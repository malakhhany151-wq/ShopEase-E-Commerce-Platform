# ShopEase – E-Commerce Platform

## About the Project
ShopEase is a web-based E-Commerce Platform developed using Laravel, MySQL, and Blade. The project aims to provide a structured online shopping system with product and category management.

## Technologies Used
- Laravel Framework
- MySQL
- Blade Templates
- HTML
- CSS

## Completed Features

### 1. Database Setup
- Created database migrations for Products and Categories.
- Created Eloquent Models.
- Defined relationships between Products and Categories.

### 2. Factories & Seeders
- Created Factories to generate sample data.
- Created Seeders to populate the database with sample records.

### 3. Category Management
- Display all categories.
- View category details.
- Create new categories.
- Edit existing categories.
- Delete categories.

### 4. Product Management
- Display all products.
- View product details.
- Create new products.
- Edit existing products.
- Delete products.

### 5. Blade Layout
- Created a shared Blade layout.
- Added navigation links for the main pages.
- Added dynamic page titles and content sections.
- Added a sidebar and footer.

## Project Structure
The project follows Laravel's MVC architecture:

- **Models:** Handle database interactions.
- **Views:** Display application pages using Blade.
- **Controllers:** Handle application logic and requests.
- **Migrations:** Define database tables.
- **Factories & Seeders:** Generate and insert sample data.

## Current Progress
The project is currently under development. Product and Category CRUD operations, database setup, sample data generation, and the shared Blade layout have been implemented.

## Upcoming Features
- Product Image Upload and Management.
- User Registration, Login, and Logout.
- Admin Dashboard.
- Custom Middleware.
- Authorization using Laravel Gates.
- RESTful API for Product Management.
- Application Testing using Browser and Postman.

## Installation

1. Clone the repository:
   ```bash
   git clone YOUR_REPOSITORY_URL
   ```

2. Navigate to the project directory:
   ```bash
   cd ShopEase
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Create the environment file:
   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file.

7. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Project Status
**Work in Progress** 🚧

More features will be added as development continues.
