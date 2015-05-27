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

Run ```php composer install``` in the repository directory. This will read composer.json and install
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

===========
### Apache Settings
Smashlounge uses URL rewriting provided by Apache to handle some URL requests. This allows us to use front-facing pretty URL's, such as /users/{username}, /tournaments/{tournament_name}, /characters/{character_name}, and /techniques/{tech_name}. The following code should be placed in the root directory in a file called .htaccess:

```
Options +FollowSymLinks -MultiViews
## Turn mod_rewrite on
RewriteEngine On


RewriteBase /
#
RewriteRule ^users/([A-Za-z0-9]+)*$ ./users.php?username=$1

RewriteRule ^techniques/([^/]*)$ /techniques.php?tech=$1

RewriteRule ^characters/([^/]*)$ /characters.php?char=$1

RewriteRule ^vods/([^/]*)$ /vods.php?tournament=$1
```

<hr>

Relevant Information:
===========
This website is built on MVC principles. All of the controllers lie in the techs/ directory. Each view has an associated controller, specified by init{VIEW}.php. The views lie in the root directory, and access exported variables and functions from the controller. 


API:
===========
Most of the data on our website is accessible via API call. For information on accessing this data, visit smashlounge.com/api/docs. If what you're looking for doesn't exist in our API yet, contact me and I'll write the code so you can get the data you want. I haven't gotten to writing most of the API yet, as I'm focused mostly on developing new features.
