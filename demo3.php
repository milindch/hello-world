<html>
	<head>
		<title>Multiple Controller Example</title>
		<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	</head>
	
	<body ng-app="myApp">
		<div ng-controller="controller1">
			First Name : <input type="text" ng-model="firstName"><br>
			Last Name : <input type="text" ng-model="lastName"><br>
			<button ng-click="show()" value="Show">Show</button>
			<p>Hi {{fullName}}</p>
		</div>
		<div ng-controller="controller2">
			Marks of 1st Subject : <input type="text" ng-model="sub1"><br>
			Marks of 2nd Subject : <input type="text" ng-model="sub2"><br>
			Marks of 3rd Subject : <input type="text" ng-model="sub3"><br>
			Marks of 4th Subject : <input type="text" ng-model="sub4"><br>
			<button ng-click="showMarks()" >Show Marks</button>
			<p>{{marks}}</p>
		</div>
		<script>
			var myApp = angular.module("myApp",[]);
			myApp.controller('controller1', function($scope){
				//$scope.fullName = "Hi";
				$scope.show = function(){
					$scope.fullName = $scope.firstName+" "+$scope.lastName;
				}
			});
			
			myApp.controller('controller2', function($scope){
				//$scope.fullName = "Hi";
				$scope.showMarks = function(){
					$scope.marks = $scope.sub1+" "+$scope.sub2+" "+$scope.sub3+" "+$scope.sub4;
				}
			});
		</script>
	</body>
</html>
