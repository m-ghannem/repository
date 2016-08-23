<!DOCTYPE html>
<html data-ng-app="myApp">
<head>
  <title>Mohamed Ghannem développeur web</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/vendor/components/angular.js/angular.js"></script>
  <script type="text/javascript" src="/js/angular/app.js"></script>

  <script type="text/javascript" src="/js/angular/services/main.js"></script>
  <script type="text/javascript" src="/js/angular/services/blog.js"></script>
  <script type="text/javascript" src="/js/angular/directives/validators/email.js"></script>

  <script type="text/javascript" src="/js/angular/controllers/main.js"></script>
  <script type="text/javascript" src="/js/angular/controllers/contact.js"></script>
  <script type="text/javascript" src="/js/angular/controllers/blog.js"></script>
  <script type="text/javascript" src="/js/angular/controllers/actualite.js"></script>
</head>
<body data-ng-controller="mainCtr">

  <div class="container-fluid">

    <div class="jumbotron text-center">

    </div>

    <div class="row">

      <div class="col-sm-4"  data-ng-include="contact.url"></div>

      <div class="col-sm-4"  data-ng-include="blog.url"></div>

      <div class="col-sm-4"  data-ng-include="actualite.url"></div>

    </div>

  </div>

</body>


</html>
