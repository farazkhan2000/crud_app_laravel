<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel CRUD Application with Pagination

A demonstration of full-stack web development using Laravel, featuring complete CRUD operations with efficient pagination for optimal user experience.

## 🚀 About This Project

This Laravel application showcases modern web development practices with:
- **Complete CRUD functionality** (Create, Read, Update, Delete)
- **Efficient pagination** for handling large datasets
- **Clean MVC architecture** following Laravel best practices
- **Database seeding** with Laravel's query builder
- **Responsive design** for seamless user interaction

## ⚡ Quick Start

```bash
# Clone the repository
git clone https://github.com/farazkhan2000/laravel-crud-pagination.git

# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure your database in .env file
# DB_DATABASE=your_database_name
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Run migrations and seeders
php artisan migrate --seed

# Start development server
php artisan serve
```
Visit http://localhost:8000 to explore the application.

## Technologies Used
- **Laravel**: PHP framework for building web applications.
- **Pagination**: Implemented pagination for better data organization and presentation.

## CRUD Operations
- **Create**: Add new data using the provided forms.
- **Read**: View data in paginated format for easier navigation.
- **Update**: Edit existing data through the update functionality.
- **Delete**: Remove data entries as needed.

## Contributing
Contributions are welcome! Fork the repository, make your changes, and create pull requests with your improvements.

## License
This project is licensed under the [MIT License](LICENSE).
