var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('loaisanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem ="";
    $scope.serial = 1;
    $scope.itemPerPage = 10;
    $scope.indexCount = function(newPageNumber){
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    };

    $scope.loadData = () => {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/Loaisanphams",
        }).then(function (response) {
            console.log(response.data);
            $scope.types = response.data;
        });
    };
    $scope.loadData();
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm loại sản phẩm"; 
            $scope.product =null;
            
        } else {
            $scope.modalTitle =" Sửa loại sản phẩm";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/Loaisanphams/" + id
            }).then(function(response) {
                $scope.product = response.data;
            });
        }
        $('#myModal').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/Loaisanphams/" + id
            }).then(function(response) {
                $scope.message = response.data;
                $scope.loadData();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/Loaisanphams",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                $scope.loadData();
                $scope.closeModal();


            }, (err)=>{
                console.log(err);
            });
        } else { //sua san pham
            console.log($scope.product);
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/Loaisanphams/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                $scope.loadData();
                $scope.closeModal();


            }, (err)=>{
                console.log(err);
            });
        }
    }
    $scope.closeModal = function () {
        $("#myModal").modal("hide");
    };
});