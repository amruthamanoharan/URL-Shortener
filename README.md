# URL Shortener - Laravel

A simple URL shortener web application built with **Laravel**.

## Features
- Shorten long URLs into short, shareable links.
- View and manage the shortened URLs.
- Supports generating random short codes for each URL.

## Technologies Used
- **Laravel** - PHP Framework
- **PHP** - Server-side scripting language
- **MySQL** - Database
- **Bootstrap 5** - Frontend framework for responsive design

## Installation

### Prerequisites
- PHP >= 7.4
- Composer
- MySQL
- Laravel >= 8.x

### Steps to Run the Project Locally:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/amruthamanoharan/url-shortener.git
   ```
2. **Navigate to the project directory:**

    ```bash
    cd url-shortner
    ```
3. **Install dependencies using Composer:**

    ```bash
    composer install
    ```
4. **Set up the environment file: Copy the .env.example file to .env:**

    ```bash
    cp .env.example .env
    ```
5. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```
6. **Configure the database: Open the .env file and update the database credentials:**
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```
7. **Run database migrations to set up the database tables:**
    ```bash
    php artisan migrate
    ```
8. **Start the development server:**
    ```bash
    php artisan serve
    ```
    Now, you can access the application at http://127.0.0.1:8000.

**Usage**
1. **Shorten a URL:**
    - Go to the home page.
    - Enter the long URL you want to shorten in the input field.
    - Click the "Shorten URL" button.
2. **View Shortened URL:**
    - After shortening, a new shortened URL will appear on the screen.
    - You can click on the shortened URL to open the original URL.


