
1. download the zip file and put unzipped files into a new folder inside htdocs. [ eg. htdocs/smartbus/{your files}]
2. create a database named "project_smartbus".
3. to see the map features import the db.sql after creating the database.
4. for fresh install open cmd in "smartbus" folder and run "php artisan migrate" [ N.B. You have to provide the latitude and longitude for getting exact result ]
5. from your browser go to "localhost/smartbus/public"

Features
1. only user with "Administrator" role can access the dashboard. // For testing purpose user with id no 1 is assigned to "Administrator"
2. if you are not using the database that is provided and using it by command "php artisan migrate"  most likely you'll receive an error -unless you use this url after you have completed registration- "localhost/smartBus/public/insert"
3. To select a trip you need to have this available

		1. At least one driver (if none first create one)
		2. At least one schedule (if none first create one)
		3. Multiple Station -with correct lat ,long [ you can use this website https://www.gps-coordinates.net/ ]
		4. Route (at least one)
		5. one bus at least
	
	finally you're allowed to create a trip. the distance between two point is calculated by using Google Map DistanceMatrixService api.
	
	
Features to be included:

		1. Multiple roles 
		2. consolidate the dependencies between each model
		3. Implementing Razorpay for payment gateway.
		

please provide the gmap api key in resources/views/layouts/master.blade.php at line 357

