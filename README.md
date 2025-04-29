# Carspotting

## Overview

CarSpotting is a dynamic web application for car enthusiasts, focused on discovering and sharing exclusive supercars. Users can browse through an impressive collection of rare cars and find answers to frequently asked questions about spotting these fascinating vehicles. 

For the more engaged members, CarSpotting offers admin capabilities: once promoted to admin, they gain access to an extensive management panel. Here, they can add, edit, and delete cars and FAQs, communicate with users through an inbox system, and promote other users to admin roles. This interactive and immersive experience makes CarSpotting the ultimate destination for supercar enthusiasts.

## Prerequisites

- PHP Laravel
- Composer
- XAMPP
- MySQL

## Database Setup

1. Set up your MySQL database and take note of the login credentials.
2. Use the `.env` file to configure your database connection.
3. Run `php artisan migrate` to set up the tables.

## Seeding the Database

Navigate to the project folder and run `php artisan migrate:fresh --seed` to populate your database with dummy data.

**It is essential to complete this step before proceeding further.**

## Running the Application

1. Start the server with `php artisan serve`.
2. Browse to [http://localhost:8000](http://localhost:8000) in your web browser.

## Sources

The sources can be found on the About page of the website.
