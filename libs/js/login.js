/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#frm-login").submit(function(evt){
    $.ajax({
        method: "POST",
        url: "api.php",
        data: $(this).serialize()
    }).done(function (msg) {
        alert("Login \r\n" + msg);
        window.location.reload();
    });
});

function salir() {
    $.ajax({
        method: "POST",
        url: "api.php",
        data: {operacion: "logout"}
    }).done(function (msg) {
        alert("Salida completada correctamente. \r\n" + msg);
        window.location.reload();
    });

}

