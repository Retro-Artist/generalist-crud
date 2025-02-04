<?php
// Project Structure Generator

class ProjectGenerator {
    private $rootPath;
    private $directories = [
        'config',
        'public',
        'src/Controllers',
        'src/Models',
        'src/Views/layouts',
        'src/Views/auth',
        'src/Views/dashboard',
        'src/Views/errors',
        'assets/css',
        'assets/js',
        'assets/images'
    ];

    private $files = [
        'config/config.php' => '<?php // Configuration settings will go here',
        'config/connect.php' => '<?php // Database connection code will go here',
        'config/database.php' => '<?php // Database configuration will go here',
        'public/index.php' => '<?php // Main entry point will go here',
        'public/.htaccess' => "RewriteEngine On\nRewriteBase /your-project/public/\n\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule ^(.*)$ index.php?url=$1 [QSA,L]",
        'src/Controllers/BaseController.php' => '<?php namespace Controllers; class BaseController {}',
        'src/Controllers/AuthController.php' => '<?php namespace Controllers; class AuthController extends BaseController {}',
        'src/Controllers/DashboardController.php' => '<?php namespace Controllers; class DashboardController extends BaseController {}',
        'src/Controllers/ErrorController.php' => '<?php namespace Controllers; class ErrorController extends BaseController {}',
        'src/Models/BaseModel.php' => '<?php namespace Models; class BaseModel {}',
        'src/Models/UserModel.php' => '<?php namespace Models; class UserModel extends BaseModel {}',
        'src/Models/Database.php' => '<?php namespace Models; class Database {}',
        'src/Views/layouts/header.php' => '<!-- Header template will go here -->',
        'src/Views/layouts/footer.php' => '<!-- Footer template will go here -->',
        'src/Views/layouts/sidebar.php' => '<!-- Sidebar template will go here -->',
        'src/Views/auth/login.php' => '<!-- Login form will go here -->',
        'src/Views/auth/register.php' => '<!-- Registration form will go here -->',
        'src/Views/dashboard/index.php' => '<!-- Dashboard content will go here -->',
        'src/Views/errors/404.php' => '<!-- 404 error page will go here -->',
        'assets/css/style.css' => '/* CSS styles will go here */',
        'assets/js/main.js' => '// JavaScript code will go here',
        'composer.json' => '{"name": "your-name/crud-system","description": "A simple CRUD system","type": "project","require": {"php": ">=8.2"}}'
    ];

    public function __construct($rootPath) {
        $this->rootPath = rtrim($rootPath, '/');
    }

    public function generate() {
        echo "Starting project generation...\n";

        // Create directories
        foreach ($this->directories as $dir) {
            $path = $this->rootPath . '/' . $dir;
            if (!is_dir($path)) {
                if (mkdir($path, 0755, true)) {
                    echo "Created directory: $dir\n";
                } else {
                    echo "Failed to create directory: $dir\n";
                }
            }
        }

        // Create files
        foreach ($this->files as $file => $content) {
            $path = $this->rootPath . '/' . $file;
            if (!file_exists($path)) {
                if (file_put_contents($path, $content) !== false) {
                    echo "Created file: $file\n";
                } else {
                    echo "Failed to create file: $file\n";
                }
            }
        }

        echo "\nProject structure generation completed!\n";
        echo "Remember to update the configuration files and .htaccess with your specific settings.\n";
    }
}

// Usage
$projectPath = __DIR__; // Change this to your desired project path
$generator = new ProjectGenerator($projectPath);
$generator->generate();