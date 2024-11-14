# Laravel E-Commerce with Stripe Payment Integration

This is a simple Laravel-based eCommerce application with Stripe payment integration using Laravel Cashier. This project demonstrates how to set up and configure Laravel for Stripe payments, allowing users to make payments via Stripe using a test Visa card.

## Prerequisites

- PHP 8.0 or higher
- Composer
- Stripe account
- MySQL or other supported database
- Laravel 9.x or higher

## Installation

Follow these steps to get the project up and running:

### Step 1: Clone the Laravel Project

### Step 2: Install Dependencies
Navigate to the project directory and install the required dependencies:

cd ecommerce

composer install

### Step 3: Install Laravel Cashier
Next, install the Laravel Cashier package to handle Stripe payments:

composer require laravel/cashier

### Step 4: Publish Cashier Configuration
Publish the configuration files for Laravel Cashier:

php artisan vendor:publish --tag="cashier-config"

### Step 5: Set Up .env File
Set up your .env file with your Stripe API credentials. You can get your credentials from your Stripe Dashboard (https://dashboard.stripe.com/test/apikeys):

STRIPE_KEY=your_stripe_key

STRIPE_SECRET=your_stripe_secret

### Step 6: Generate Application Key

Generate the application key for your Laravel project:

php artisan key:generate

### Step 7: Run Migrations and Seed Database

Run the migrations to create the required tables in your database:

php artisan migrate

php artisan db:seed

### Step 8: Sample User for Testing

To test user authentication and payments, create a sample user with the following credentials:

email:'jane.smith@example.com'

password: 'password123'

### Step 9: Sample Stripe Test Card
You can use the following Stripe test card to simulate payments during testing:

Card Type: Visa

Card Number: 4242424242424242

Expiration Date: Any future date

CVC: Any 3 digits





