# Student Management System (PHP + MySQL)

A student management web app built with **PHP** and **MySQL**, with an **AdminLTE** admin dashboard for managing records. Students can register and log in, and the admin panel lists all students with options to update or delete each record.

## Features

- Welcome page with a **Register** button
- Student registration form (name, email, city, course, password)
- City and course dropdowns loaded dynamically from the database
- Student login using email and password (PHP sessions)
- Admin dashboard built with AdminLTE
- Student table showing joined data (city name and course name instead of IDs)
- Update a student's details through a pre-filled form
- Delete a student record

## Tech Stack

- **Backend:** PHP (`mysqli`)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS, Bootstrap 5, AdminLTE 3
- **Local server:** XAMPP

## Project Structure

```
project1/admin/
├── assets/            # CSS, JS, images
├── include/           # header, sidebar, topbar, footer
├── database/
│   └── project1.sql   # database export
├── conn.php           # database connection
├── welcome.php        # landing page
├── signup.php         # student registration form
├── stdform.php        # student login form
├── index.php          # admin dashboard home
├── table.php          # student table with update and delete buttons
├── updatetbl.php      # student table with update buttons
├── updateform.php     # edit a student's details
├── deleteform.php     # student table with delete buttons
├── deleterow.php      # deletes a student record
└── README.md
```

## Database

The database is named `project1` and uses three tables:

| Table     | Columns                                           |
|-----------|---------------------------------------------------|
| `student` | id, name, email, city, course, password           |
| `city`    | cityid, cityname                                  |
| `course`  | course_id, course_name                            |

`student.city` links to `city.cityid`, and `student.course` links to `course.course_id`.

## Installation and Setup

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/) and start **Apache** and **MySQL** in the XAMPP Control Panel.
2. **Copy the project** into this exact location (the redirects in the code expect this path):
   ```
   C:\xampp\htdocs\project1\admin
   ```
3. **Create the database:**
   - Open `http://localhost/phpmyadmin`
   - Create a new database named `project1`
   - Select it, click **Import**, and choose `database/project1.sql`
4. **Check the connection** in `conn.php` (the defaults match a standard XAMPP setup):
   ```php
   $conn = mysqli_connect("localhost", "root", "", "project1");
   ```
5. **Run the app** in your browser:
   - Register page: `http://localhost/project1/admin/welcome.php`
   - Login page: `http://localhost/project1/admin/stdform.php`
   - Student table: `http://localhost/project1/admin/table.php`

## Screenshots

*Add screenshots here (registration form, login page, student table, update form).*

```
![Student table](screenshots/table.png)
```

## Known Limitations and Planned Improvements

This is a learning project, and these are the next things I plan to improve:

- [ ] Use prepared statements for all SQL queries (currently queries use direct string input)
- [ ] Hash passwords with `password_hash()` and verify with `password_verify()`
- [ ] Stop displaying passwords in the student table
- [ ] Restrict admin pages to logged-in users using sessions
- [ ] Escape output with `htmlspecialchars()`
- [ ] Reuse `conn.php` everywhere instead of reconnecting in each file
- [ ] Add input validation and success/error messages
- [ ] Replace hardcoded `localhost` redirect URLs with relative paths

## Credits

- Dashboard template: [AdminLTE](https://github.com/ColorlibHQ/AdminLTE) by ColorlibHQ (MIT License)
- Forms styled with [Bootstrap 5](https://getbootstrap.com/)

## Author

Your Name - [GitHub Profile](https://github.com/your-username)
