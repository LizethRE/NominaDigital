console.info("Dentro");
var accion = document.querySelector("#vista_home");
    if(accion!=null){
        console.info("Dentro");
        $.ajax({
            url:"../../../backend/index.php",
            data:{solicitud:'homeEmpleado'},
            type:"post",
            dataType:"json",
            success:function(data){
                console.info("Dentro");
                console.log(data)

                document.querySelector("#numIdentificacion").value = data.empleado.numIdentificacion;
                document.querySelector("#nombre").value = data.empleado.nombre;
                document.querySelector("#fechaNacimiento").value = data.empleado.fechaNacimiento;
                document.querySelector("#direccion").value = data.empleado.direccion;
                document.querySelector("#telefono").value = data.empleado.telefono;
                document.querySelector("#email").value = data.empleado.email;
            }
        });
    }

var accion2 = document.querySelector("#actualizacion_empleado");
if(accion2!=null){
    $.ajax({
        url:"../../../backend/index.php",
        data:{solicitud:'homeEmpleado'},
        type:"post",
        dataType:"json",
        success:function(data){
            console.log(data)

            document.querySelector("#direccion").value = data.empleado.direccion;
            document.querySelector("#telefono").value = data.empleado.telefono;
            document.querySelector("#email").value = data.empleado.email;
        }
    });
}