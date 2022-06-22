# Lead-Liaison-Todo-Task Using Laravel - API - Vue-js

The following must be installed and available on your terminal:
- [x] [composer](https://getcomposer.org/doc/00-intro.md)
- [x] [npm](https://nodejs.org/en/)


### INSTALLATION GUIDE
1. Clone the project
   `git clone https://github.com/AbdorrahmanRamadan/Lead-Liaison-Todo-Task.git`
2. ``cd`` to the laravel-todo-api directory and run ``composer install`` on the terminal to install php dependencies
3. make a copy of the `.env-example` file and rename it to `.env` file
4. Create a Mysql database and edit the ``.env`` to reflect your connections as follows:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=todo
    DB_USERNAME=root
    DB_PASSWORD=
    ```
5. Migrate your migrations: `php artisan migrate`
6. Generate application encryption key: `php artisan key:generate`
7. Run `npm install && npm run dev` to install node.js dependencies
8. Start your development server. `php artisan serve`
9. ``cd`` to the vue-todo-api directory and run ``npm install`` on the terminal to install its dependencies
10. Run `npm run serve` to start your frontend server.
11. open your web browser and go to the link provided in the terminal followed by /todos
12. Congratulations, you made it!

Need helps? Reach me out
>Email: AbdorrahmanRamadan@gmail.com
>
>Linkedin: [Abdorrahman Ramadan](https://www.linkedin.com/in/abdorrahmanramadan/)