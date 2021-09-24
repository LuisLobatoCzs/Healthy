var app = angular.module("home", [])
.controller('homeController', function($scope,$http){   

    $scope.pu1 = false;
    $scope.pu2 = false;
    $scope.pu3 = false;
    $scope.pu4 = false;
    $scope.pu5 = false;
    $scope.pu6 = false;
    $scope.pu7 = false;
    $scope.pu8 = false;
    $scope.pu9 = false;
    $scope.pu10 = false;
    $scope.pu11 = false;
    $scope.pu12 = false;
    $scope.pu13 = false;
    $scope.pu14 = false;

    $scope.selectorPUR = function(){
        $scope.pu1 = false;
        $scope.pu2 = false;
        $scope.pu3 = false;
        $scope.pu4 = false;
        $scope.pu5 = false;
        $scope.pu6 = false;
        $scope.pu7 = false;
        $scope.pu8 = false;
        $scope.pu9 = false;
        $scope.pu10 = false;
        $scope.pu11 = false;
        $scope.pu12 = false;
        $scope.pu13 = false;
        $scope.pu14 = false;
    }

    $scope.selectorPU = function(p){
        switch (p){
            case 1:
                $scope.selectorPUR();
                $scope.pu1 = true;
                break;
            case 2:
                $scope.selectorPUR();
                $scope.pu2 = true;
                break;
            case 3:
                $scope.selectorPUR();
                $scope.pu3 = true;
                break;
            case 4:
                $scope.selectorPUR();
                $scope.pu4 = true;
                break;
            case 5:
                $scope.selectorPUR();
                $scope.pu5 = true;
                break;
            case 6:
                $scope.selectorPUR();
                $scope.pu6 = true;
                break;
            case 7:
                $scope.selectorPUR();
                $scope.pu7 = true;
                break;
            case 8:
                $scope.selectorPUR();
                $scope.pu8 = true;
                break;
            case 9:
                $scope.selectorPUR();
                $scope.pu9 = true;
                break;
            case 10:
                $scope.selectorPUR();
                $scope.pu10 = true;
                break;
            case 11:
                $scope.selectorPUR();
                $scope.pu11 = true;
                break;
            case 12:
                $scope.selectorPUR();
                $scope.pu12 = true;
                break;
            case 13:
                $scope.selectorPUR();
                $scope.pu13 = true;
                break;
            case 14:
                $scope.selectorPUR();
                $scope.pu14 = true;
                break;
        }
    }

    $scope.pe1 = false;
    $scope.pe2 = false;
    $scope.pe3 = false;
    $scope.pe4 = false;
    $scope.pe5 = false;
    $scope.pe6 = false;
    $scope.pe7 = false;
    $scope.pe8 = false;
    $scope.pe9 = false;
    $scope.pe10 = false;
    $scope.pe11 = false;
    $scope.pe12 = false;

    $scope.selectorPER = function (){
        $scope.pe1 = false;
        $scope.pe2 = false;
        $scope.pe3 = false;
        $scope.pe4 = false;
        $scope.pe5 = false;
        $scope.pe6 = false;
        $scope.pe7 = false;
        $scope.pe8 = false;
        $scope.pe9 = false;
        $scope.pe10 = false;
        $scope.pe11 = false;
        $scope.pe12 = false;    
    }
    
    $scope.selectorPE = function(p){
        switch (p){
            case 1:
                $scope.selectorPER();
                $scope.pe1 = true;
                break;
            case 2:
                $scope.selectorPER();
                $scope.pe2 = true;
                break;
            case 3:
                $scope.selectorPER();
                $scope.pe3 = true;
                break;
            case 4:
                $scope.selectorPER();
                $scope.pe4 = true;
                break;
            case 5:
                $scope.selectorPER();
                $scope.pe5 = true;
                break;
            case 6:
                $scope.selectorPER();
                $scope.pe6 = true;
                break;
            case 7:
                $scope.selectorPER();
                $scope.pe7 = true;
                break;
            case 8:
                $scope.selectorPER();
                $scope.pe8 = true;
                break;
            case 9:
                $scope.selectorPER();
                $scope.pe9 = true;
                break;
            case 10:
                $scope.selectorPER();
                $scope.pe10 = true;
                break;
            case 11:
                $scope.selectorPER();
                $scope.pe11 = true;
                break;
            case 12:
                $scope.selectorPER();
                $scope.pe12 = true;
                break;
        }
    }



    $scope.su1 = false;
    $scope.su2 = false;
    $scope.su3 = false;
    
    $scope.selectorSUR = function(){
        $scope.su1 = false;
        $scope.su2 = false;
        $scope.su3 = false;
    }

    $scope.selectorSU = function(p){
        switch (p){
            case 1:
                $scope.selectorSUR();
                $scope.su1 = true;
                break;
            case 2:
                $scope.selectorSUR();
                $scope.su2 = true;
                break;
            case 3:
                $scope.selectorSUR();
                $scope.su3 = true;
                break;
        }
    }

    $scope.se1 = false;
    $scope.se2 = false;
    $scope.se3 = false;
    
    $scope.selectorSER = function(){
        $scope.se1 = false;
        $scope.se2 = false;
        $scope.se3 = false;
    }

    $scope.selectorSE = function(p){
        switch (p){
            case 1:
                $scope.selectorSER();
                $scope.se1 = true;
                break;
            case 2:
                $scope.selectorSER();
                $scope.se2 = true;
                break;
            case 3:
                $scope.selectorSER();
                $scope.se3 = true;
                break;
        }
    }

})