
# Tasks for Today Management System

**IT0049 - Web System Technologies**  
**Technical Summative Assessment 3**

A simple task management application developed using Laravel 13, Eloquent ORM, database migrations, and seeders.

## Features

- Welcome page displaying only today's tasks.
- Task List page displaying all tasks ordered by date.
- Profile page displaying the user's information.
- About page containing developer information.
- Eloquent models for Tasks and Users.
- Database migrations and seeders.
- Date-based task filtering using Eloquent.

## Technologies Used

- Laravel 13
- PHP 8.5
- SQLite
- Eloquent ORM
- Blade Templates

## Database Structure

### Users Table
- id
- username (unique)
- full_name
- email
- created_at
- updated_at

### Tasks Table
- id
- title
- status (default: pending)
- task_date
- created_at
- updated_at

## Sample Data

The database seeder creates:
- Exactly 1 user record.
- At least 8 sample tasks.
- Tasks distributed across at least 3 different dates, including today.

## Installation

1. Clone the repository:

   git clone https://github.com/ClrkJcob/tasks-today-laravel.git

2. Enter the project directory:

   cd tasks-today-laravel

3. Install dependencies:

   composer install

4. Create your environment file:

   Copy-Item .env.example .env

5. Generate the application key:

   php artisan key:generate

6. Create the SQLite database file:

   New-Item -ItemType File -Path database/database.sqlite -Force

7. Run migrations and seed the database:

   php artisan migrate --seed

8. Start the Laravel development server:

   php artisan serve

9. Open the application:

   http://127.0.0.1:8000

## Application Pages

| Page | Route |
|---|---|
| Welcome | / |
| Task List | /tasks |
| Profile | /profile |
| About | /about |

## Developer

**Name:** Clark Jacob P. Llamoso  
**Section:** TC33  
**Course:** IT0049 - Web System Technologies

GitHub: [ClrkJcob](https://github.com/ClrkJcob)
