# Laravel E-Commerce Project

## Student Information

**Student Name:** Aya Chekhab
**Student ID:** 20222022775
**Course:** ESOF302 Advanced Web Programming
**Project:** Laravel + React E-Commerce Website and Admin Panel

---

## Project Description

This project is a full-stack e-commerce web application developed using **Laravel**, **Blade**, **Eloquent ORM**, **SQLite Database**, **Session-based Cart**, **React Integration**, and a simple **Admin Panel**.

The project was developed step by step according to the weekly course milestones, starting from Laravel setup and GitHub version control, then progressing into routing, MVC, database design, authentication, cart, checkout, React integration, admin CRUD, REST API, security, and documentation.

---

## Technologies Used

* PHP
* Laravel
* Blade Templates
* HTML5
* CSS3
* JavaScript
* React 18
* Eloquent ORM
* SQLite Database
* Git and GitHub

---

## Main Features

### Public Features

* Home page
* Product catalog
* Product search and filtering
* Shopping cart
* Add to cart
* Remove from cart
* Clear cart
* Checkout form
* Order confirmation page

### Admin Features

* Admin login
* Session-based authentication
* Admin middleware protection
* Admin dashboard
* Product management panel
* Create product
* Update product
* Delete product
* Product-category relationship using database models

### API and Security Features

* REST API endpoint for products
* JSON response for product data
* CSRF protection in POST forms
* AdminMiddleware for protected routes
* Session-based login/logout
* API throttling
* Eloquent ORM for database operations

---

## Admin Login Information

Use the following credentials to access the admin dashboard:

```text
Email: admin@example.com
Password: 123456
```

Admin login URL:

```text
/login
```

Admin dashboard URL:

```text
/admin/dashboard
```

Admin product management URL:

```text
/admin/products
```

---

## Main Routes

| Route              | Description                    |
| ------------------ | ------------------------------ |
| `/`                | Home page                      |
| `/products`        | Product catalog                |
| `/cart`            | Shopping cart                  |
| `/checkout`        | Checkout page                  |
| `/order-success`   | Order confirmation page        |
| `/login`           | Admin login                    |
| `/admin/dashboard` | Admin dashboard                |
| `/admin/products`  | Admin product CRUD panel       |
| `/react-products`  | React product catalog          |
| `/api/products`    | REST API products endpoint     |
| `/security`        | Security and performance notes |

---

## Weekly Development Progress

### Week 1: Laravel Project Setup and GitHub

* Created Laravel project.
* Configured development environment.
* Initialized Git repository.
* Pushed project to GitHub.

### Week 2: HTML/CSS Product Homepage

* Created responsive homepage.
* Added product listing using HTML and CSS.

### Week 3: JavaScript Search and Filter

* Added JavaScript product search.
* Implemented dynamic filtering for products.

### Week 4: Laravel Routes and Views

* Created `/products` route.
* Created products Blade view.
* Passed product data from route to view.

### Week 5: MVC and Controller

* Created `ProductController`.
* Moved product logic from route to controller.
* Applied MVC structure.

### Week 6: Database, Models, Migrations, and Relationships

* Created Category, Product, and Order models.
* Created database migrations.
* Added relationships:

  * Category has many Products
  * Product belongs to Category
  * Product has many Orders
  * Order belongs to Product

### Week 7: Authentication, Middleware, and Roles

* Created admin login page.
* Used session-based authentication.
* Created AdminMiddleware.
* Protected admin dashboard route.

### Week 8: Product Catalog and Shopping Cart

* Added cart functionality.
* Added add to cart feature.
* Added remove and clear cart options.
* Calculated subtotal and total.

### Week 9: Checkout and Orders

* Created checkout page.
* Created order confirmation page.
* Stored last order in session.
* Cleared cart after placing order.

### Week 10: React Integration

* Created React product catalog page.
* Added React search/filter.
* Added React cart preview.

### Week 11: Admin Product CRUD

* Created admin product management panel.
* Added create product feature.
* Added update product feature.
* Added delete product feature.
* Connected products to database.

### Week 12: REST API, Security, and Performance

* Created `/api/products` endpoint.
* Added JSON product response.
* Added security and performance notes page.
* Used API throttle middleware.

### Week 13: Testing, Documentation, and Final Demo

* Tested all main routes.
* Tested cart and checkout flow.
* Tested admin login and product management.
* Added final README documentation.
* Prepared the project for final submission.

---

## How to Run the Project

Clone the repository:

```bash
git clone https://github.com/ayachekhab09-gif/LaravelProject.git
```

Open the project folder:

```bash
cd LaravelProject
```

Install PHP dependencies:

```bash
composer install
```

Copy environment file:

```bash
copy .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Start the Laravel development server:

```bash
php artisan serve
```

Open the project in browser:

```text
http://127.0.0.1:8000
```

---

## Testing Checklist

The following features were tested successfully:

* Home page opens correctly.
* Product catalog displays products.
* Add to cart works correctly.
* Cart quantity and total are calculated correctly.
* Remove and clear cart work correctly.
* Checkout form submits order information.
* Order success page displays order summary.
* Admin login works with the provided credentials.
* Admin dashboard is protected by middleware.
* Admin product CRUD works correctly.
* React product page displays products and cart preview.
* API endpoint returns product data as JSON.
* Security page displays security and performance notes.

---

## Conclusion

This Laravel e-commerce project demonstrates the main concepts of advanced web programming, including Laravel routing, MVC architecture, Blade views, database migrations, Eloquent relationships, authentication, middleware, session management, cart and checkout logic, React integration, REST API development, security practices, and project documentation.
