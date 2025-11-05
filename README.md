Student Results Management System.

A simple PHP & MySQL project for managing student results.
Developed as part of my ICT coursework (1.3) at KCA University.

🚀 Features.
🔑 Admin.

Secure login to dashboard.

Add & manage student records.

View all students.

Manage courses & lecturers (future extension ready).

👨‍🏫 Lecturer
.
Secure login to dashboard.

Enter marks for students.

Manage, edit & update results.

🎓 Student

Secure login to dashboard.

View personal results.

Login & logout functionality.

Student browsing space (profile & results access).

🛠️ Tech Stack

Frontend: HTML, CSS

Backend: PHP (procedural).

Database: MySQL.

Server Environment: XAMPP (Apache)

⚙️ Installation (Localhost)

Clone the repository:.

git clone https://github.com/KHISA-12/student-results-management.git.


Move the project folder into your XAMPP htdocs directory:

C:\xampp\htdocs\student-results-management


Import the database:

Open phpMyAdmin

Create a new database (e.g., student_results)

Import the SQL file provided in the project (database/student_results.sql)

Update the database connection file:

Go to config/db.php

Edit database credentials if needed:

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "student_results";


Run the project in your browser:

http://localhost/student-results-management

🔒 Default Login Credentials

Admin:

Username: admin

Password: admin123

Lecturer & Student:

Create accounts via Admin dashboard

📌 Notes

Built for learning purposes and can be extended with features like:

Online result export (PDF/CSV)

Role-based access control

Responsive design for mobile
