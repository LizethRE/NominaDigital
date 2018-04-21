console.info("Dentro");
var accion = document.querySelector("#vista_home");
if(accion!=null){
    console.info("Dentro");
    $.ajax({
        url:"../../../backend/index.php",
        data:{solicitud:'home'},
        type:"post",
        dataType:"json",
        success:function(data){
            console.log(data)

            /*document.querySelector("#nit").value = data.empresa.nit;
            document.querySelector("#nombre").value = data.empresa.nombre;
            document.querySelector("#direccion").value = data.empresa.direccion;
            document.querySelector("#telefono").value = data.empresa.telefono;
            document.querySelector("#email").value = data.empresa.email;
            */
        }
    });
}

var accion2 = document.querySelector("#lista_empresa");
if(accion2!=null) {
    $.ajax({
        url: "../../../backend/index.php",
        data: {solicitud: 'listaEmpresa'},
        type: "post",
        dataType: "Array",
        success: function (response) {
            var json = JSON.parse(response);
            var respuesta = "";
            var respuesta2 = "";

            if (json.success === 0) {
                var t = $('#dataTables-example').DataTable();
                t.clear().draw();
                for (var i = 0; i < json.data.length; i++) {
                    var Nit = json.data[i].nit;
                    var Nombre = json.data[i].nombre;
                    var Direccion = json.data[i].direccion;
                    var Telefono = json.data[i].telefono;
                    var Email = json.data[i].email;

                    respuesta2 += '<button class="btn btn-danger"><i class="zmdi zmdi-delete"></i>';
                    respuesta2 += 'Asignar';
                    respuesta2 += '</button>';
                    t.row.add([json.data[i].numIdentificacion, json.data[i].nombre, json.data[i].estado, respuestas]).draw(false);
                    respuesta2 = "";
                    respuesta = "";
                }
            }else{
                alert("Ha ocurrido un error al buscar los empleados");
            }
        }
    });
}

var accion2 = document.querySelector("#lista_root");
if(accion2!=null) {
    $.ajax({
        url: "../../../backend/index.php",
        data: {solicitud: 'listaRoot'},
        type: "post",
        dataType: "Array",
        success: function (response) {
            var json = JSON.parse(response);
            var respuesta = "";
            var respuesta2 = "";

            if (json.success === 0) {
                var t = $('#dataTables-example').DataTable();
                t.clear().draw();
                for (var i = 0; i < json.data.length; i++) {
                    var Nit = json.data[i].nit;
                    var Nombre = json.data[i].nombre;
                    var Direccion = json.data[i].direccion;
                    var Telefono = json.data[i].telefono;
                    var Email = json.data[i].email;

                    respuesta2 += '<button class="btn btn-danger"><i class="zmdi zmdi-delete"></i>';
                    respuesta2 += 'Asignar';
                    respuesta2 += '</button>';
                    t.row.add([json.data[i].numIdentificacion, json.data[i].nombre, json.data[i].estado, respuestas]).draw(false);
                    respuesta2 = "";
                    respuesta = "";
                }
            }else{
                alert("Ha ocurrido un error al buscar los empleados");
            }
        }
    });
}

if(accion3!=null){
    $.ajax({
        url:"../../../backend/index.php",
        data:{solicitud:'cambioEstado'},
        type:"post",
        dataType:"json",
        success:function(data){
            console.log(data)

            document.querySelector("#nombre").value = data.empresa.nombre;
            document.querySelector("#direccion").value = data.empresa.direccion;
            document.querySelector("#telefono").value = data.empresa.telefono;
            document.querySelector("#email").value = data.empresa.email;
        }
    });
}

