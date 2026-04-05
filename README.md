# Todo List App

A simple todo list application built with PHP and MySQL.

## Live Demo
[Click here to view](https://mytodoapp.infinityfreeapp.com/)
## Screenshots
<img width="663" height="289" alt="image" src="https://github.com/user-attachments/assets/684ddee0-bc50-401c-aa0e-620ce4fe29b4" />
<img width="607" height="343" alt="image" src="https://github.com/user-attachments/assets/c6eb05f3-f76b-4808-b84e-e6ccaca2e4de" />
<img width="373" height="164" alt="image" src="https://github.com/user-attachments/assets/bea0e08a-ff0b-4025-a024-ce3c2a561c8c" />

## Features
- Add new tasks
- Edit existing tasks
- Delete tasks
- Mark tasks as done/undo

## Tech Stack
- PHP
- MySQL
- Tailwind CSS


## Getting Started

### Prerequisites
- PHP installed (or use XAMPP/Laragon)
- MySQL database

### Installation

1. Clone the repository
```bash
git clone https://github.com/Achch4/TodoListApp.git
cd TodoListApp
```

2. Set up the database
- Create a database called `todo_db`
- Import the `database.sql` file

3. Update database connection in `db.php`
```php
$conn = new mysqli("localhost", "root", "", "todo_db");
```

4. Run with your local server (XAMPP/Laragon)
- Place the project in your server's web root
- Open `http://localhost/TodoListApp`


