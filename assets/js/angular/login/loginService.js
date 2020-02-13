'use strict';

app.service('loginService',function($http){

	this.loginn = function(data){
		var formdata = data;
		var promise = $http({
			method: 'POST',
			url: baseUrl + 'api-login-form',
			data: formdata
		});

		return promise;
		
	}

});