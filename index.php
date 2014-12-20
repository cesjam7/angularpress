<?php get_header(); ?>
    <div class="container">
      <br>
      <input type="text" placeholder="Buscar en el sitio" class="form-control" ng-model="buscar">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" ng-repeat="data in datos | filter: buscar">
          <h2>{{data.title}}</h2>
          <div ng-bind-html="data.content | limitTo:250"></div>
        </div>
      </div>

      <hr>

<?php get_footer(); ?>
