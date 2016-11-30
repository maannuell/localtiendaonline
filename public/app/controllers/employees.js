app.controller('ProductoController', function($scope, $http, API_URL) {
    //retrieve employees listing from API
    
    /*$http.get(API_URL + "employees")
            .success(function(response) {
                $scope.employees = response;
            });*/
    
    //show modal form
    
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;
               
           
               
                $scope.id = id;
                $http.get(API_URL + 'modal/' + id)
                        .success(function(response) {
                               
                            console.log(response);
                            $scope.nuevo= id;
                            $scope.imagen= response.imagen;
                            $scope.nombre= response.nombre;
                            $scope.precio= (response.precio-(response.precio*response.promo));
                            $scope.existencia = response.existencia;
                            $scope.descripcion= response.descripcion;
                           //$("#nombre").text(response.nombre);
                           //$("#precio").text("$"+(response.precio-(response.precio*response.promo)));
                           //$("#imagen").attr("src",'http://localhost/proyectoTienda4/public/imgart/'+response.imagen);
                           //$("#descripcion").text(response.descripcion);

                          
                           //$("#existencia").text(response.existencia);

                           

                         

                           /* $scope.employee = response;
                            $scope.manuel= "hola";*/
                        });

               
           
       
       // console.log(id);

        $('#quick-view-modal').modal('show');
      
    }
  

    //save new record / update existing record
    /*$scope.save = function(modalstate, id) {
        var url = API_URL + "employees";
        
        //append employee id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }
        $scope.employee.bError = false;

        
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.employee),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            debugger
            console.log(response);
            //alert(response.bError);
            $("#myModal").modal('hide');
            //location.reload();
            $scope.employees.push(response);
        }).error(function(response) {
            console.log(response);
            debugger
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }*/

    //delete record
    /*$scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'employees/' + id
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Unable to delete');
                    });
        } else {
            return false;
        }
    }*/
});