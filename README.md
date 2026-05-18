# JobSeeker - Professional Job Listing Platform

**Author:** Alric Sean Macalinao  
**Started:** April 24, 2026(files got corrupted had to start all over)
**Status:** Active Development

---

## About

JobSeeker is a modern, responsive job listing web application built with PHP, MySQL, and Tailwind CSS. Employers can post job listings with detailed company information, and job seekers can browse and explore opportunities. The platform features a clean, professional UI with optimized fonts and colors for readability and user experience.

This is a full-featured educational project showcasing real-world web development practices including authentication, database management, and responsive design patterns.

## Project structure

- `app/` — main application code and logic
  - `app/controllers/` — page controllers for home, auth, and listings
  - `app/models/` — data model logic for listings
  - `app/views/` — HTML views and partial templates
  - `app/public/` — web root and entry point for the app
  - `app/helpers.php` — view loader, partial loader, and utility functions
  - `app/Router.php` — route matching and dispatching system
  - `app/Database.php` — PDO database connection wrapper
- `database/schema.sql` — database schema for MySQL tables
- `.env.example` — example environment config for local database credentials

## Tech Stack

The project will use the following stacks:

- PHP
- MySQL
- Tailwind CSS

## Setup (Quick)

- Copy `.env.example` to `.env` and fill your MySQL credentials.
- Create the database and tables using the SQL in `database/schema.sql` (or run via MySQL Workbench).
- Keep `database/schema.sql` in the repo so the app can be rebuilt on a fresh machine.
- From the project root, run the seeder to populate sample listings:

```bash
php app/seed.php
```

- Run the built-in PHP server (for development) serving the `app/public` folder:

```bash
php -S localhost:8000 -t app/public
```

Open `http://localhost:8000` in your browser.

### MySQL Workbench

1. Open MySQL Workbench and connect to your local MySQL server.
2. Open the file `database/schema.sql` and run it to create the `jobseeker` database and tables.
3. Optional: insert sample data by running `php app/seed.php` from the project root.

## Licensing

Please refer to `LICENSE` if you want to know more about the proper use of this project.

---
