<?php get_header(); ?>
    <div class="container" ng-controller="MyController">
 
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" ng-repeat="data in datos">
          <h2>{{data.title}}</h2>
          <div ng-bind-html="data.content | limitTo:250"></div>
        </div>
      </div>

      <hr>

<?php get_footer(); ?>
