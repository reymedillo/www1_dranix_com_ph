/* global angular */
angular.module('mainCtrl', [])

.controller('mainController', function($scope, $http, Service, $location) {

	$scope.successMsg = false;
	$scope.test = 'rei';

	Service.get()
	.success(function(data) {
	    $scope.meetings = data;
	});

	$scope.view = function(id) {
		Service.view(id)
		.success(function(data) {
			$scope.meetings = data;
			Service.get()
			.success(function(data) {
			   $scope.meetings = data;
			});
		})
	};
});