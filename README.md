## GENERALIST-CRUD
a Simple PHP 8.2 CRUD System

A beginner-friendly, white-label CRUD (Create, Read, Update, Delete) system built with PHP 8.2 and MySQL. This project follows a minimalist MVC approach and is designed for easy customization and deployment on shared hosting environments.

## Features

- 🚀 Simple setup - just upload and configure
- 🔒 Secure authentication system
- 📱 Responsive admin dashboard
- 🎨 Easy to customize and white-label
- 🔍 Basic CRUD operations
- 🌐 Clean URL structure
- 🛡️ Basic security features
- 📝 Form validation
- 🔄 Session management

## Requirements

- PHP 8.2 or higher
- MySQL 5.x/8.x or MariaDB
- Apache with mod_rewrite enabled
- PDO PHP Extension
- UTF8MB4 charset support

## Installation

1. Upload all files to your web server
2. Create a new MySQL database
3. Configure database settings in `config/config.php`
4. Set your domain in `public/.htaccess`
5. Make sure `assets` directory has write permissions (chmod 755)
6. Access your domain to complete setup

## Project Structure

```
project_root/
├── config/                   # Configuration files
│   ├── config.php            # Main configuration
│   ├── connect.php           # Database connection handler
│   └── database.php          # Database settings
├── public/                   # Public web files
│   ├── index.php             # Application entry point
│   └── .htaccess                   # URL rewriting rules
├── src/                            # Source code
│   ├── Controllers/                # Request handlers
│   │   ├── BaseController.php      # Parent controller
│   │   ├── AuthController.php      # Authentication logic
│   │   ├── DashboardController.php # Dashboard logic
│   │   └── ErrorController.php     # Error handling
│   ├── Models/                     # Data & business logic
│   │   ├── BaseModel.php           # Parent model
│   │   ├── UserModel.php           # User management
│   │   └── Database.php            # Database operations
│   └── Views/                      # Templates & UI
│       ├── layouts/                # Shared layout files
│       │   ├── header.php          # Common header
│       │   ├── footer.php          # Common footer
│       │   └── sidebar.php         # Navigation sidebar
│       ├── auth/                   # Authentication pages
│       │   ├── login.php           # Login form
│       │   └── register.php        # Registration form
│       ├── dashboard/              # Admin dashboard
│       │   └── index.php           # Dashboard home
│       └── errors/                 # Error pages
│           └── 404.php             # Not found page
├── assets/                         # Static resources
│   ├── css/                        # Stylesheets
│   │   └── style.css               # Main CSS
│   ├── js/                         # JavaScript
│   │   └── main.js                 # Main JS
│   └── images/                     # Image files
└── composer.json                   # Dependencies

```

## Configuration

1. Database Setup (`config/database.php`):
```php
// Example configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
```

2. Base URL (`config/config.php`):
```php
define('BASE_URL', 'https://your-domain.com');
```

## Security Features

- Password hashing using PHP's `password_hash()`
- CSRF protection for forms
- PDO prepared statements
- Input sanitization
- Secure session handling
- Basic XSS protection

## Customization

### Branding
1. Update logo in `assets/images/`
2. Modify styling in `assets/css/style.css`
3. Change site name in `config/config.php`

### Layout
1. Edit header/footer in `src/Views/layouts/`
2. Modify dashboard in `src/Views/dashboard/`
3. Update authentication pages in `src/Views/auth/`

## Best Practices

- Keep controllers thin and models fat
- Use prepared statements for all database queries
- Validate all user inputs
- Sanitize outputs to prevent XSS
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Comment complex logic
- Keep methods small and focused

## URL Structure

```
/                    # Home page
/auth/login          # Login page
/auth/register       # Registration page
/dashboard           # Admin dashboard
/dashboard/users     # User management
```

## Common Issues & Solutions

1. **404 Errors**: Ensure .htaccess is properly configured and mod_rewrite is enabled
2. **Database Connection**: Verify credentials in config/database.php
3. **Permissions**: Check directory permissions (755 for folders, 644 for files)
4. **Session Issues**: Verify PHP session configuration is correct

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support, please open an issue in the repository or contact the maintainers.

---

Remember to replace placeholder values with your actual configuration before deploying to production.