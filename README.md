## About StudentHUB

StudentHUB is a Virtual Learning Environment (VLE) created by s0285157 as part of the BSc Computing Technologies Degree. This is evidence of which is being sumitted as part of my 'Final Research Project' module.

NOTICE: This GitHub will be taken down once the assignment has been graded, resulting in the code no longer accessible.

## Getting Started

I have been using this locally on my machine as developing therefore, to simulate that same enviroment make sure you have XAMPP (for database use) and then you'll have to follow the steps below.

1. Open up the root folder in your IDE (Microsoft Visual Code, PhpStorm, etc)
2. Open the Terminal and type 'php artisan serve' - This will launch the php application on your domain locally, such as 'localhost' or '127.0.0.1:8000'
3. Open up a new Terminal.
4. Type 'php artisan migrate:fresh' - This will create all the tables and structure in the database.
5. Type 'php artisan db:seed' - This will populate the database with a few courses and users.
