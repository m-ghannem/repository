myApp.controller('contactCtr',['$scope', '$http', function ($scope, $http) {

  $scope.submit = function() {
    try {
        if($scope.formContact.$valid){
          $http(
            {
              method : 'POST',
              url: '/toto.php',
              data: [$scope.email,$scope.message,$scope.name, $scope.raison]
            }
          ).then(
            function ok(response){console.log('post is ok :' + response.data)},
            function ko(response){console.log('post error'+response.status)});
        } else {
          console.log('form is invalid');
        }
    } catch (err) {
      console.log(err.name);
    }
  }
}]);
