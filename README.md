smashlounge
===========

Source code for http://www.smashlounge.com
<hr>
<h1> Installation </h1>
<p>Clone the repository into the root directory of your local website</p>
===========

### Dependencies:
===========
1. XAMPP or WAMPP, or any *AMP stack.

2. Composer


===========
### Install composer:

with curl -> ```curl -sS https://getcomposer.org/installer | php

without curl -> ```php -r "readfile('https://getcomposer.org/installer');" | php

Run php composer install in the repository directory. This will read composer.json and install
all necessary dependencies for the website. A directory will be created called 'src' which contains
Cartalyst Sentry, which is used for user authentication.
===========
### Upload schema:

If you are using XAMPP or WAMP, you have access to phpmyadmin. Use the schema located in schema/mysql.sql
to replicate our database. Create a database called 'thalounge', and run the sql script to populate the tables.

===========
### Export connection credentials to the client scripts.

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
Live modules:
===========


techniques
	-Moderated display of techniques and relevant gifs

characters
	-All relevant information on how to play a specific character displayed on a single page

lounge
	-Visually display (via google maps API) local smash groups and provide links to get engaged

index
	-Holds a random gif pulled from r/smashgifs, a list of the top 4 smash streams, and a smashlounge promotional video

Current Projects:
===========



admin
	- will provide a robust interface for account interactions

upcoming
	- calendar interface for upcoming events as provided through database

awards
	- will hold section for prominent community members and their accomplishments


relevant information:
===========
Accessor functions are mostly found in the /techs directory, where I wrote scripts to access the database and initialize arrays which are referenced from the template pages, following MVC principles.


API:
===========
Most of the data on our website is accessible via API call. For information on accessing this data, visit smashlounge.com/api/docs. If what you're looking for doesn't exist in our API yet, contact me and I'll write the code so you can get the data you want. I haven't gotten to writing most of the API yet, as I'm focused mostly on developing new features.

Installing Dependencies
=======================

Smashlounge uses a few Composer dependencies.  Please use composer to install or update in the root directory, once you've downloaded the repo.