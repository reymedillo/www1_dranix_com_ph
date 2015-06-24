angular.module('mainService', [])

.factory('Service', function($http) {
  return {
  	//
    get : function() {
    	return $http.get('api/imeetings');
    },
    view : function(id) {
    	return $http.get('api/imeetings/' + id);
    }
  }
});