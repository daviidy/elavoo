# Elavoo
Laundry web app

![screenshot](./elavoo.png)

This project consisted of building a laundry web app. People can schedule a pickup for their clothes. The company will clean the clothes and send them back to the user.

## Description

###Admin
* Can perform CRUD operations on users and assign roles to them
* Can perform CRUD operations on clients orders
* Can perform CRUD operations on items (clothes)

###Clients
* Can create orders or cancel them
* Can filter the items by name or category
* Can edit their profile

##Delivery person
* Can edit orders status, assigned to them

## Laundry
* Can edit orders status, assigned to them


## Built With

- Laravel 7
- JQuery 3
- Bootstrap 4
- Pusher
- Librairies: Quill Editor, Font Awesome

## Live Demo

[Live Demo Link](https://elavoo.com/)

## Authors

👤 **David YAO**

- GitHub: [@daviidy](https://github.com/daviidy)
- Twitter: [@davidyao3](https://twitter.com/DavidYao3)
- LinkedIn: [@daviidy](https://www.linkedin.com/in/david-yao-6bb95299/)
- Personal Website: [@daviidy](http://david-yao.com)


## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](issues/).

## Show your support

Give a ⭐️ if you like this project!



# How to use the repository ?

## 1- Connect

- install composer on your system
- install git on your system
- clone the repo by using: <code>git clone repo_url</code>
- ##Windows users:

- Download wamp: http://www.wampserver.com/en/
- Download and extract cmder mini: https://github.com/cmderdev/cmder/releases/download/v1.1.4.1/cmder_mini.zip
- Update windows environment variable path to point to your php install folder (inside wamp installation dir) (here is how you can do this http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-to-run-commands-in-git-bash)
- cmder will be refered as console

## 2- Install Laravel

##Mac Os, Ubuntu and windows users continue here:

- Create a database locally
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
- Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
- Run <code>composer install</code> or php composer.phar install
- Run <code>php artisan key:generate</code>
- Run <code>php artisan migrate</code>
- Run <code>php artisan db:seed</code> to run seeders, if any.
- Run <code>php artisan serve</code>

#####You can now access your project at localhost:8000 :)
