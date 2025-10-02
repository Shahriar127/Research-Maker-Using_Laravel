# Reacher Maker (Laravel)

A web application for managing and sharing research posts, built with Laravel and TailwindCSS.

## Features

- User authentication (login/logout)
- Post creation and viewing
- Category-based filtering of posts
- Responsive layout with TailwindCSS
- Alpine.js-powered interactive UI components
- Clean, component-based Blade templates
- Newsletter/contact section


## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Shahriar127/Reacher-Maker-Using_Laravel.git
   cd Reacher-Maker-Using_Laravel
   ```
2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```
3. **Copy and set up environment variables:**
   ```bash
   cp .env.example .env
   # Edit .env to set your DB and mail credentials
   ```
4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```
5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```
6. **Build frontend assets:**
   ```bash
   npm run dev
   ```
7. **Serve the application:**
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` in your browser.

## Folder Structure

- `resources/views/Components/`: Blade UI components
- `resources/views/posts/`: Post templates
- `routes/`: Web and console routes
- `config/`: Application configuration
- `public/`: Entry point

## Technologies Used

- Laravel (PHP Framework)
- TailwindCSS
- Alpine.js
- Vite

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---
*Created by [Shahriar127](https://github.com/Shahriar127)*
