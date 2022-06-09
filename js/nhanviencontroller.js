var app = angular.module("myapp", ["angularUtils.directives.dirPagination"]); //tao 1 module
app.controller("nhanviencontroller", function ($scope, $http) {
    //tao 1 controller
    $scope.timkiem = "";
    $scope.serial = 1;
    $scope.itemPerPage = 10;
    $scope.indexCount = function (newPageNumber) {
        $scope.serial =
            newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    };

    $scope.loadData = () => {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/Nhanviens",
        }).then(function (response) {
            console.log(response.data);
            $scope.Nhanviens = response.data;
        });
    };
    $scope.loadData();
    $scope.showmodal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm nhân viên";
            $scope.product = null;
        } else {
            $scope.modalTitle = "Sửa nhân viên";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/Nhanviens/" + id,
            }).then(function (response) {
                $scope.Nhanvien = response.data;
            });
        }
        $("#myModal").modal("show");
    };
    $scope.deleteClick = function (id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/Nhanviens/" + id,
            }).then(function (response) {
                $scope.message = response.data;
                $scope.loadData();
                
            });
        }
    };
    $scope.saveData = function () {
        if ($scope.id == 0) {
            //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/Nhanviens",
                data: $scope.Nhanvien,
                "content-Type": "application/json",
            }).then(function (response) {
                $scope.message = response.data;
                console.log(response.data);
                $scope.loadData();
                $scope.closeModal();

            }, (err)=>{
                console.log(err);
            });
        } else {
            //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/Nhanviens/" + $scope.id,
                data: $scope.Nhanvien,
                "content-Type": "application/json",
            }).then(function (response) {
                $scope.message = response.data;
                console.log(response.data);
                $scope.loadData();
                $scope.closeModal();

            }, (err)=>{
                console.log(err);
            });
        }
    };
    $scope.closeModal = function () {
        $("#myModal").modal("hide");
    };
});
