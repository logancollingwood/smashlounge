smashlounge
===========

Source code for SmashLounge


Live Modules:
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



API:
===========
Most of the data on our website is accessible via API call. For information on accessing this data, visit smashlounge.com/api/docs. If what you're looking for doesn't exist in our API yet, contact me and I'll write the code so you can get the data you want. I haven't gotten to writing most of the API yet, as I'm focused mostly on developing new features. 

Relevant Information:
===========
Accessor functions are mostly found in the /techs directory, where I wrote scripts to access the database and initialize arrays which are referenced from the template pages.