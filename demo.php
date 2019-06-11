<?php
include_once __DIR__ . '/src/autoload.php';

use FreeWijmo\WijmoHelpers;

?>
<html>
<head>
    <?php WijmoHelpers::loadWijmoAngularJsScript() ?>
</head>
<body ng-app="app" ng-controller="appCtrl">

<div class="container">
    <wj-flex-pie
            items-source="data"
            binding="value"
            binding-name="name"
            header="Pie chart"
    >
    </wj-flex-pie>
</div>
<script>
    (function() {
        angular.module('app', ['wj']);
    })();

    (function () {
        'use strict';

// declare app module
        var app = angular.module('app');

// controller
        app.controller('appCtrl', function ($scope) {
            $scope.data = [];
            for (var i=1;i<=4;i++) {
                $scope.data.push({
                    name: 'name' + i,
                    value: i*4
                })
            }
        });
    })();
</script>
    <?php WijmoHelpers::loadWijmoRemoveLicenseScript() ?>
</body>
</html>
