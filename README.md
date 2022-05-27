## DYID
DYID is an e-commerce website that sells various electronic devices. This project is originally one of the university projects.

## Tools
* Laravel 8
* HTML5
* CSS
* Bootstrap
* XAMPP (Using MySQL DB)

## Website inner workings
* Purchasing system simulation
* Authorization and Authentication
* Pagination
* Eloquent ORM
* Forms

## ERD
![DYID ERD](https://user-images.githubusercontent.com/75673604/170701569-86ea23ee-0b2a-4f3f-b0f6-cc757c5c7bc5.jpg)

## Screen shots
![1](https://user-images.githubusercontent.com/75673604/169240543-a961f21b-2143-45f3-9fa8-9f54d70dcc99.png)
![2](https://user-images.githubusercontent.com/75673604/169240601-58038aef-ff0e-4c6c-ba7b-080bd1ed5e23.png)
![3](https://user-images.githubusercontent.com/75673604/169240605-d624fd60-f3a2-4404-a0cd-a57cda2ff2b8.png)
![4](https://user-images.githubusercontent.com/75673604/169240614-cd9868dc-1843-460f-bc38-307949f9b8ae.png)
![5](https://user-images.githubusercontent.com/75673604/169240620-da32feb7-967a-4002-ab01-ea226229bb61.png)

## Starting Project
1. Before starting up the project, make sure to install:
* Composer (latest version)
* Node.js (latest version)
* XAMPP (latest version)

2. Pull the project
3. Start up XAMPP Apache & MySQL
4. Open the cmd and enter `composer install`
5. Create a .env file that matches with the environment (including the DB) that you are using
6. Create a database in XAMPP MySQL to contain DYID data. The DB name must match the DB_DATABASE value in .env file. For example if in the .env file the DB name is written as `DB_DATABASE=dyid`, then your MySQL DB name must be `dyid`.
7. Run the command `php artisan migrate --seed` in order to migrate the data into the DB
8. Run the command `php artisan storage:link` to create a symbolic link in from /public/storage to storage/app/public
9. Add images folder (inside the Asset folder) into /public/storage folder in the project
10. Run the command `php artisan serve` in the cmd and ctrl + click on the link

*The dummy users credentials can be found in databse/seeders/UserSeeder.php*
