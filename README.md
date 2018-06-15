# Jakku

Jakku is a simple and easy-to-use open source CRM that helps you create your estimates.

## IMPORTANT

This is still an alpha, and you **SHOULDN'T** be using it in production.

## Configuration

Minimum required version :

* **PHP** >= 7.2
* **Composer** >= 1.5
* **MySQL** >= 8.0
* **Node** >= 8.9
* **Gulp** >= 4.0

    We highly recommand to install gulp globally on your system, otherwise, there are a lot of probability that the project won't work. Please go in a terminal and run `npm install gulp-cli -g`.  
    Note that a .phar is sufficient for [Composer](http://getcomposer.org)

## Install

After installing the configuration, please make sur all of the softwares are available in your path. Make sure your MySQL server is on (you can use `mysql.server start` for example).

Once it is done, clone this repository and go at the root of the project by executing in a terminal 

```bash
git clone https://github.com/Mykapo/Jakku.git && cd Jakku
``` 
Prepare the configuration file PHP is going to use to make the different programs run by doing

```bash
cp conf.php.dist conf.php
```

You can define everything around database (starting with "__DB"). Note that the program will create a database user and password, so feel free to put any user name and password !

Then, install all dependencies

```bash
npm install
composer install
``` 

Now you can install the database by executing

```bash
bin/setup
```

gulp will only be useful to compile Sass code, and we added some facilities to run a developpement server. You now just need to execute

```bash
gulp
```

and

```bash
bin/server:run
```

And your personal Jakku will be waiting for you at [http://localhost:8000/](http://localhost:8000/).

## Contribution

If you want to contribute to the project, we invite you to read the [contribution guide](./ressources/doc/CONTRIBUTING.md).

We highly encourage you to report us bugs and features you'd like to see in Jakku in the issues.
