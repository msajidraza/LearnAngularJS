<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    
    <title>Learn AngularJS</title>
  </head>
  <body ng-app="myApp">
  
  	<div ng-include="'components/nav.php'"></div>
           
  	<div class="ng-view"></div>
	
    <script>
	var app = angular.module("myApp", ["ngRoute"]);
	
	app.config(function($routeProvider) {  
	  $routeProvider
	  .when("/", {
		templateUrl : "home.php"
	  })
	  .when("/about", {
		templateUrl : "about.php"
	  })
	  .when("/customers", {
		templateUrl : "customers.php"
	  })
	  .when("/contact", {
		templateUrl : "contact.php"
	  });
	});
	
	
	app.controller('customersFormCtrl', function($scope) {												 
		$scope.addCustomer = function(){						
			// use $.param jQuery function to serialize data from JSON 
            var data = $.param({
                fullname: $scope.fullname,
                mobile  : $scope.mobile,
                email   : $scope.email,
                address : $scope.address,
                city    : $scope.city,
                pincode : $scope.pincode,
                state   : $scope.state
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }

            $http.post('model/addcustomer_sql.php', data, config)
            .success(function (data, status, headers, config) { 
                $scope.PostDataResponse = data;
            })
            .error(function (data, status, header, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });			
		};										 	    
	});
	
	app.controller('customersCtrl', function($scope, $http) {
	  $http.get("model/customer_sql.php")
	  .then(function (response) {$scope.names = response.data.records;});
	});
	</script>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
