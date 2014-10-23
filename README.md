smashlounge
===========

Source code for http://www.smashlounge.com
<hr>
<h1> Installation </h1>
<p>Clone the repository into the root directory of your local website</p>
===========

### Dependencies:
1. XAMPP or WAMPP, or any *AMP stack.

2. Composer


===========
### Install Composer:

with curl -> 
	```curl -sS https://getcomposer.org/installer | php```

without curl -> 
	```php -r "readfile('https://getcomposer.org/installer');" | php```

Run php composer install in the repository directory. This will read composer.json and install
all necessary dependencies for the website. A directory will be created called 'src' which contains Cartalyst Sentry, which is used for user authentication.

===========
### Upload Schema:

If you are using XAMPP or WAMP, you have access to phpmyadmin. Use the schema located in schema/mysql.sql
to replicate our database. Create a database called 'thalounge', and run the sql script to populate the tables.

===========
### Database Credentials

Create 'db.php' and 'dbSuper.php' in the techs/ directory to hold authentication credentials.
db should hold the credentials for a user that has READ only access to the tables, and dbSuper should hold credentials for a user that has READ/WRITE access to the tables. This separation of credentials will allow us to provide write access to scripts which explicitly need write access (ie credentials for submitting). These scripts should export the following variables.

db.php 
```php
$username="smashlounge";
$password="";
$database="thalounge";
$dahostname="localhost";
```

dbSuper.php
```php
$username = 'submit';
$password = '';
$dahostname = 'localhost';
$dbname = 'thalounge';
$table = 'submissions';
```


<hr>

Relevant Information:
===========
Accessor functions are mostly found in the /techs directory, where I wrote scripts to access the database and initialize variables which are referenced from the template pages, following MVC principles. These variables are then exported to the views (which lie in the root directory) via php's ```include()``` function. I also export necessary functions for the views in the relevant controller.


API:
===========
Most of the data on our website is accessible via API call. For information on accessing this data, visit smashlounge.com/api/docs. If what you're looking for doesn't exist in our API yet, contact me and I'll write the code so you can get the data you want. I haven't gotten to writing most of the API yet, as I'm focused mostly on developing new features.
