<html>
	<head>
		<title>Nested Controller Example</title>
		<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	</head>
	
	<body ng-app="myApp">
		<div ng-controller="controller1">
			First Name : <input type="text" ng-model="fName"><br>
			Last Name : <input type="text" ng-model="lName"><br><br>
			
			<div ng-controller="controller2">
				Subject 1 marks : <input type="text" ng-model="sub1"><br>
				Subject 2 marks : <input type="text" ng-model="sub2"><br>
				Subject 3 marks : <input type="text" ng-model="sub3"><br>
				Subject 4 marks : <input type="text" ng-model="sub4"><br>
			</div>
		</div>
	</body>

</html>
