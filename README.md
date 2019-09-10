This App is still in Production

This is a web application built with Laravel(5.4) RESTApi for online bus users.  

1. open cmd in project folder and run "composer update"
2. copy ".env.example" and name it as ".env" also update the info of your database in ".env"
3. Run this following commands
 "$ php artisan key:generate"
 "$ php artisan migrate"
 "$ php artisan serve"

To set your role as Admin set your "role_id" as 1 in users table 


Features
1. To select a trip you need to have this available

		1. At least one driver (if none first create one)
		2. At least one schedule (if none first create one)
		3. Multiple Station -with correct lat ,long [ you can use this website https://www.gps-coordinates.net/ ]
		4. Route (at least one)
		5. one bus at least
	
	finally you're allowed to create a trip. the distance between two point is calculated by using Google Map DistanceMatrixService api.
	
	Login as a Admin to create available info for a trip.
	
Features to be included:

		1. Implementing Razorpay for payment gateway.
		2. consolidate the dependencies between each model
		

please provide the gmap api key in resources/views/layouts/master.blade.php at line 366

