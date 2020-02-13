'use strict';

app.service('productService',function($http){

	this.viewtypepro = function(){		
		var promise = $http({
			method: 'GET',
			url: baseUrl + 'api-view-typeproduct'
		});

		return promise;
		
	}

	this.viewunitpro = function(){		
		var promise = $http({
			method: 'GET',
			url: baseUrl + 'api-view-unitproduct'
		});

		return promise;
		
	}

	this.viewpro = function(){		
		var promise = $http({
			method: 'GET',
			url: baseUrl + 'api-view-product'
		});

		return promise;
		
	}

});