# React-Laravel-Project

This project implements user authentication with **Laravel** (backend) and **React** (frontend) using **Laravel Sanctum** for API authentication. It uses **SQL Server** for the database.

## Features

- User Signup: Allows users to register with name, email, and password.
- User Login: Authenticates users with email and password, generating a personal access token.
- User Logout: Logs out users by deleting their access token.

## Installation

### Backend (Laravel)

Endpoints
POST /api/signup: Registers a new user.

POST /api/login: Logs in a user and returns a token.

POST /api/logout: Logs out the user by deleting their token.

Technology Stack
Backend: Laravel, Sanctum (API Authentication)

Frontend: React, Axios

Database: SQL Server

Notes
Ensure the .env file is configured correctly, especially for SQL Server database settings.

After login/signup, you can redirect users to the dashboard with React routing.

Clone the repository and navigate to the project folder. Install the dependencies using Composer:
```bash
composer install
php artisan migrate
php artisan serve
npm install
