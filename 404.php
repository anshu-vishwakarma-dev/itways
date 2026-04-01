<?php include 'includes/header.php'; ?>

<section class="section bg-light-bg text-center" style="padding: 120px 0; min-height: 80vh; display: flex; align-items: center; justify-content: center;">
    <div class="container" data-aos="fade-up">
        <!-- 404 Illustration or Big Text -->
        <h1 style="font-size: 150px; font-weight: 900; line-height: 1; color: var(--secondary-color); margin-bottom: 20px; text-shadow: 0 10px 30px rgba(6,182,212,0.2);">
            404
        </h1>
        
        <h2 class="text-heading-color mb-20" style="font-size: 36px; font-weight: 800;">
            Oops! Page Not Found
        </h2>
        
        <p class="text-text-color" style="font-size: 18px; max-width: 600px; margin: 0 auto 40px; line-height: 1.6;">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        
        <a href="<?php echo $base_url; ?>" class="btn btn-primary px-40 py-15" style="border-radius: 50px; font-weight: 700; font-size: 16px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); transition: all 0.3s ease;">
            <i class="fas fa-home" style="margin-right: 8px;"></i> Back to Homepage
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
