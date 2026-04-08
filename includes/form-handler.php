<?php
/**
 * ITWAYS - Simple Form Handler
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 1. Get data from the form
    $form_type      = $_POST['form_type'] ?? 'General Inquiry';
    $service_context = $_POST['service_product'] ?? '';
    $name           = $_POST['name'] ?? '';
    $email          = $_POST['email'] ?? '';
    $phone          = $_POST['phone'] ?? '';
    $message        = $_POST['message'] ?? '';

    // 2. Simple Validation
    if (empty($name) || (empty($email) && empty($phone))) {
        echo json_encode(['status' => 'error', 'message' => 'Please provide your name and contact info.']);
        exit;
    }

    // 3. Save to Database
    require_once 'db.php';
    try {
        $sql = "INSERT INTO leads (form_type, service_context, name, email, phone, message) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $form_type, $service_context, $name, $email, $phone, $message);
        $stmt->execute();
        $stmt->close();
    } catch (Exception $e) {
        // Log the error
        error_log("Database Error: " . $e->getMessage());
    }

    // 4. Prepare the Email
    $to      = "info@itways.in";
    $subject = "ITWAYS New Lead: " . $form_type;
    
    $body  = "You have a new inquiry from your website:\n\n";
    $body .= "Form Type: $form_type\n";
    if($service_context) $body .= "Service/Product: $service_context\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";

    // 5. Send Email (Uncomment the line below to go live)
    // mail($to, $subject, $body, "From: webmaster@itways.in");

    // 6. Always return success for the AJAX call
    echo json_encode([
        'status'  => 'success',
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);

} else {
    echo json_encode(['status' => 'error', 'message' => 'Access Denied.']);
}
?>
