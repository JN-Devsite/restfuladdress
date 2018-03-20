# restfuladdress

# Welcome to my Restful Address Application

You will be able to find the code on the  application in the following files : -

Migration table file:			\database\migrations\2018_03_14_164356_create_addresses_table.php
The Address model class:		\App\Address.php
The generated seeder file:		\database\seeds\AddressesTableSeeder.php
The routes file:					\routes\web.php
The addresses controller:		\app\Http\Controllers\AddressesController.php

#Database
Database name: 				restful_address
Database address table:		addresses
Address table fields:			'address', 'city', 'country', 'code', 'lat', 'long'

#React files
The React files can be found in \resources\assets\js\components folder
To view an example map location, view the curl file from outside the Laravel framework URL eg. http://localhost/curl-rest.php?id=11


Added React framework to the project. I am unsure if Github has been adding the  node_modules directory. I added the directory ass a zip folder if somehow this wasn't added. 
It needs to be extracted into the main directory. Alternatively, I added the whole project as a 7z compressed file if this will make it a lot simpler. 