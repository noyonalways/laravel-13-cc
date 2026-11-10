# Laravel 13 Crash Course for JavaScript Developers

A hands-on learning repository for JavaScript developers moving into PHP and Laravel. It pairs familiar JS concepts with their PHP equivalents and then applies them in a real Laravel 13 application.

## What's inside

| Path | Description |
| --- | --- |
| `php-basics/` | Side-by-side JavaScript and PHP examples covering syntax and core language features. |
| `portfolio/` | A Laravel 13 application to practice building a real project. |

## `php-basics/`

Small, focused scripts that map JavaScript concepts onto PHP. Current examples include:

- Variables and string interpolation (`"Hi $name"` vs concatenation)
- Arrays and associative arrays (PHP's answer to JS objects)
- `foreach` loops
- Functions
- Classes, constructors with promoted properties, and objects
- Conditionals (`if` / `elseif` / `else`)
- Static methods and the scope resolution operator (`::`)
- Callbacks and higher-order functions

Files:

- `php-basics/index.js` — the JavaScript version
- `php-basics/index.php` — the equivalent PHP version

Run the PHP example with:

```bash
php php-basics/index.php
```

Run the JavaScript example with:

```bash
node php-basics/index.js
```

## `portfolio/`

A Laravel 13 application (PHP 8.3+) with:

- [Pest](https://pestphp.com) for testing
- [Tailwind CSS](https://tailwindcss.com) v4 and [Vite](https://vite.dev) for the frontend
- [Laravel Boost](https://laravel.com/docs/ai) for AI-assisted development

### Requirements

- PHP 8.3 or newer
- [Composer](https://getcomposer.org)
- Node.js and npm

### Setup

```bash
cd portfolio
composer setup
```

Or step by step:

```bash
cd portfolio
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

### Development

```bash
cd portfolio
composer dev
```

This starts the Laravel server, Vite, and the other development services together.

### Testing

```bash
cd portfolio
composer test
```

## Prerequisites

- PHP 8.3+
- Composer
- Node.js 18+ and npm

## License

This repository is for learning purposes.
