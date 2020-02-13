'use strict';

app.controller('productController',['$scope','productService' , function ($scope , productService) {

	$scope.viewpro = function(){

		productService.viewpro().then(function (data){
			var viewpro = angular.extend(data);
			$scope.dataviewpro= viewpro.data.viewdata
			console.log(viewpro);
   		});

	}

	$scope.viewtypepro = function(){

		productService.viewtypepro().then(function (data){
			var viewtypepro = angular.extend(data);
			$scope.dataviewtypepro = viewtypepro.data.viewdata
   		});

	}

	$scope.viewunitpro = function(){

		productService.viewunitpro().then(function (data){
			var viewunitpro = angular.extend(data);
			$scope.dataviewunitpro= viewunitpro.data.viewdata

   		});

	}
}]);