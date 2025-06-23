# Valentine's Day Website 💖

A simple, romantic Valentine's Day website built with HTML, CSS, and PHP. This project creates a heartfelt web experience, possibly as a digital surprise for a loved one. It includes date tracking, themed visuals, and personalized messages.

## 🌟 Features

- Romantic themed UI (dark background with bright hearts and messages)
- PHP script calculates how long a relationship has lasted (in seconds)
- Interactive and responsive design
- Can be deployed on any PHP-compatible server

## 📁 Project Structure
valentine-s-day-website-main/
├── README.md

└── WebSite/

├── index.php # Landing page with romantic intro

└── home.php # Displays message with relationship time counter


## 🚀 How to Use

### Requirements

- PHP 7.x or higher
- Web server (Apache, Nginx, or use `php -S localhost:8000` for local testing)

### Steps

1. Clone or download this repository.
2. Place the `WebSite` folder in your web server directory (e.g., `htdocs` for XAMPP).
3. Open `index.php` in a browser to start the experience.
4. Optionally edit `home.php` to adjust the start date of the relationship or customize messages.

## 🛠 Customization

You can change the relationship start date by modifying this line in `home.php`:

```php
$dataInicio = new DateTime("2023-12-12 00:00:00");

This project was  created as a personal gesture or a web-based gift. Feel free to adapt it and spread the love in your own creative way!
