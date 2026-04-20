<p align="center">
  <a href="https://github.com/victor-delcastillo/chirper" target="_blank">
    <img src="public/images/chirper_logo.svg" width="400" alt="Chirper Logo">
  </a>
</p>

## About Chirper

A micro-blogging platform built with [Laravel](https://laravel.com/docs), focusing on simplicity and clean design.
This project was implemented following the excellent tutorials and guidance from **Josh Cirre** and [Laravel Learn](https://laravel.com/learn).

## Features

- Authentication
- Create and list "Chirps"
- Custom **LaravelChirper** theme with modular CSS
- Responsive UI with specialized branding assets

## Setup

Follow these steps to get the project running locally:

1. **Clone the repository** and enter the directory.
2. **Install dependecies**:
   ```bash
   composer install
   bun install
   ```
3. **Environment Configuration**:
   Copy the example environment file and update your credentials:
   ```bash
   cp .env.example .env
   ```
   Open .env and modify the database settings to match your local environment.

4. **Finalize Setup**:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```
5. **Launch Development Server**:
   ```bash
   bun run dev
   ```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
