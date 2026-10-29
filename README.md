# HALEEN Shop — Online Beauty & Care Store

> A small PHP + MySQL online shop for locally made beauty and personal-care products, with user sign-up / login, a product page, an order form with automatic total price, and order deletion.

## About

This is my **first web project at university**. It is a simple project with a very simple interface, built to practise HTML, CSS, PHP and MySQL.

## Live Demo

**http://haleenshop.infinityfreeapp.com** (hosted on InfinityFree)

## Features

- Sign up and log in (users stored in MySQL)
- Home page with product sections (Women section; Baby section coming soon)
- Women section with 9 products: shampoo, sunscreen, perfume, face oil, moisturizer, body butter, face mask, serum, lotion
- Choose products and a delivery country; the **total price** is calculated automatically (product prices + delivery cost per country)
- Orders are saved in the database (a repeat order from the same name updates the previous one)
- Delete a purchase by entering the customer name

## Tech stack

| Layer | Technology |
|-------|------------|
| Frontend | HTML, CSS |
| Backend | PHP (mysqli) |
| Database | MySQL |
| Hosting | InfinityFree |

## Database

Database name: `haleen`, with two tables (see `database/haleen.sql`):

| Table | Columns |
|-------|---------|
| `info` | `user`, `pass` |
| `buy` | `name`, `shampoo`, `sunscreen`, `perfume`, `faceoil`, `moisturizer`, `bodybutter`, `facemask`, `serum`, `lotion` |

## Project structure

```
├── database/
│   └── haleen.sql              # Database tables
├── src/
│   ├── index.html              # Login page (entry point)
│   ├── signinpage.html         # Sign-up page
│   ├── project.html            # Home page
│   ├── WEB SECOND PAGEE.html   # Women section (order form)
│   ├── login.php, signin.php   # Authentication
│   ├── insert.php              # Save order + show total
│   ├── delete.php              # Delete an order
│   ├── db_config.example.php   # Database settings template
│   └── *.jpeg / *.jpg          # Product images
└── README.md
```

## Getting started

**Local (XAMPP):**
1. Start Apache and MySQL.
2. In phpMyAdmin create a database named `haleen` and import `database/haleen.sql`.
3. Copy `src/` into `htdocs/haleen/`.
4. Copy `db_config.example.php` to `db_config.php` and set `root` and your MySQL password.
5. Open `http://localhost/haleen/`.

**Online (InfinityFree):** create a database, import `haleen.sql`, put your host / user / password / database name in `db_config.php`, and upload the contents of `src/` to `htdocs`.

## Notes

- Academic project: passwords are stored as plain text and queries are not parameterised, so it is not suitable for production.
- Delivery cost per country: Jordan 2, Palestine 3, Syria 4, Iraq 5, Lebanon 4, Saudi Arabia 5.
