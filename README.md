<p align="center"><a href="http://127.0.0.1:8000" target="_blank"><img src="\public\img\logo1.png" width="400"></a></p>

## About Game Store

Game Store will be the next all in one site for gamers. here you can search and buy all your favourite games, filter them from top sellers or from the games that are beeing played, search our diverse variety of categoriesn from MMOS all the way to ACTION games or even RPG'S. You can interact with other people in the comment section on every game, and discuss avery topic game related. 

## How to run our app

1. Clone the repository in the htdocs folder in xampp.
2. In the terminal run the composer install command to install all missing dependencies.
3. Download an import the SQL database from github to your phpmyadmin.
4. Change the .env file to acomodate your phpmyadmin info, your user, password and the database name to game.
5. In the terminal run the command php artisan serve to start running the site.
6. The main route of our site is /home.
7. The main Admin route is /admin.


## Game Store routes

Home route = /home
Categories route = /categories
About route = /about
Support route = /support
Admin route = /admin
Admin Users route = /admin/user
Admin Categories route = /admin/category
Admin Games route = /admin/game

## Database

to import the database to your phpmyadmin do the following steps

1. Create a new database called game.
2. Click the import button on the database.
3. Select the game.sql file.
4. Click continue.

