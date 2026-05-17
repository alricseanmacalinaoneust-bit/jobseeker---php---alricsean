# JobSeeker - Professional Job Listing Platform

**Author:** Alric Sean Macalinao  
**Started:** May 17, 2026  
**Status:** Active Development

---

## About

JobSeeker is a modern, responsive job listing web application built with PHP, MySQL, and Tailwind CSS. Employers can post job listings with detailed company information, and job seekers can browse and explore opportunities. The platform features a clean, professional UI with optimized fonts and colors for readability and user experience.

This is a full-featured educational project showcasing real-world web development practices including authentication, database management, and responsive design patterns.

## Tech Stack

The project will use the following stacks:

- PHP
- MySQL
- Tailwind CSS
- Docker

## Docker

If you want to run the app with Docker, make sure your `.env` includes `MYSQL_ROOT_PASSWORD` as well as the normal database fields.

```bash
docker compose up --build
```

Then open `http://localhost:8080`.

## Setup (Quick)

- Copy `.env.example` to `.env` and fill your MySQL credentials.
- Create the database and tables using the SQL in `database/schema.sql` (or run via MySQL Workbench).
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
