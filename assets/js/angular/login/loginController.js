'use strict';

app.controller('loginController',['$scope','loginService' , function ($scope , loginService) {
	$scope.login = function(data){

		loginService.loginn(data).then(function (data){
			var getdata = angular.extend(data);
			
			if(getdata.data.status==="yes"){
				window.location.replace ( baseUrl + getdata.data.location );
			}else{
				$('#texterror').show();
				setTimeout(function(){
					$('#texterror').hide();
				},2000);
				$('#text').val("");
				$('#pass').val("");
				$('#text').focus();

			}

   });

			
			
			  
	}
}]);