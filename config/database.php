<?php
/**
 * Database Configuration
 * 
 * This file contains the database connection settings.
 * For security, consider moving these to environment variables in production.
 */

// Database configuration - uses environment variables with fallback defaults
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: 'admin');
define('DB_NAME', getenv('DB_NAME') ?: 'verona_comments');
