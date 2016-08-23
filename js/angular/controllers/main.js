myApp.controller('mainCtr',['$scope', function ($scope) {
    $scope.contact = {
        name: 'contact',
        url: '/js/angular/html/contact.html'
    }

    $scope.blog = {
        name: 'blog',
        url: '/js/angular/html/blog.html'
    }

    $scope.actualite = {
        name: 'actualité',
        url: '/js/angular/html/actualite.html'
    }
}]);
