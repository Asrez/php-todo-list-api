# PHP To-Do List API

This project is a simple RESTful API for managing a to-do list. It is built using pure PHP and follows basic API development principles. The API provides functionality to create, read, update, and delete tasks.

## Features

- Create a new to-do item
- Get a list of all to-do items
- Update a specific to-do item
- Delete a specific to-do item

## Requirements

- PHP 8.3
- MySQL or any other database
- Web server (Apache/Nginx)

## Installation

Clone the repository:

```bash
git clone https://github.com/Asrez/php-todo-list-api.git
```

Navigate to the project directory:

```bash
cd php-todo-list-api
```

Configure the database connection by updating the database settings in config.php.

Import the `todo_list.sql` file into your database to set up the table structure.

## API Endpoints

1. List All Tasks

URL: /tasks

Method: GET

Response: List of all tasks in JSON format.

2. Get a Single Task

URL: /task/{id}

Method: GET

Response: JSON object of the task with the specified id.

3. Create a Task

URL: /task

Method: POST

Parameters:
  - title: (string) Task title.
  - description: (string) Task description.
  - Response: JSON object of the created task.

4. Update a Task

URL: /task/{id}

Method: PUT

Parameters:
  - title: (string) Task title.
  - description: (string) Task description.

Response: JSON object of the updated task.

5. Delete a Task

URL: /task/{id}

Method: DELETE

Response: Success message in JSON format.

Copyright 2024, asrez team
