var app = angular.module("home", [])
.controller('homeController', function($scope,$http){   

    $scope.pu1 = false;

    $scope.selectorPU = function(p){
        switch (p){
            case 1:
                $scope.pu1 = true;
                break;
        }
    }
})