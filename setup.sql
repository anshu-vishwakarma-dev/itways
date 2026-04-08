-- SQL script to create the database and leads table
-- Run this in phpMyAdmin or your MySQL client

CREATE DATABASE IF NOT EXISTS itways_db;
USE itways_db;

CREATE TABLE IF NOT EXISTS leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    form_type VARCHAR(100),
    service_context VARCHAR(255),
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    phone VARCHAR(20),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
