function MEliminarUsuariosodel()
{
    $.ajax({
        url:"../Controller/UsuarioController.php",
        type:"POST",
        data: { 
                "MEliminarUsuariosodel" : "MEliminarUsuariosodel", 
                "IdUsuario" : document.getElementById("userId").value 
              },
        success:function(data){
            window.location.href = "mantUsuario.php";
        },
        error:function(data){
            //Que pasa si algo sale mal??
        }
    });

}