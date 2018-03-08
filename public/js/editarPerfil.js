function obtenerDatosPersonales() {
    $("#editButton").on("click",enviarFormulario);
    elegir('personal');
    axios.get(`/profile/personal`)
        .then(function(response){
            // $('#spinner').show();
            $("#chosenInfo").empty();
            $("#chosenInfo").append(response.data);
        }).catch(function (error) {
        console.log(error);
    });
}

function obtenerDatosCuenta() {
    $("#editButton").on("click",enviarFormulario);
    elegir('account');
    axios.get(`/profile/account`)
        .then(function(response){
            // $('#spinner').show();
            $("#chosenInfo").empty();
            $("#chosenInfo").append(response.data);
        }).catch(function (error) {
        console.log(error);
    });
}

function obtenerDatosAvatar() {
    $("#editButton").on("click",enviarFormulario);
    elegir('avatar');
    axios.get(`/profile/avatar`)
        .then(function(response){
            // $('#spinner').show();
            $("#chosenInfo").empty();
            $("#chosenInfo").append(response.data);
        }).catch(function (error) {
        console.log(error);
    });
}

function obtenerDatosAdicionales() {
    $("#editButton").on("click",enviarFormulario);
    elegir('additional');
    axios.get(`/profile/additional`)
        .then(function(response){
            // $('#spinner').show();
            $("#chosenInfo").empty();
            $("#chosenInfo").append(response.data);
        }).catch(function (error) {
        console.log(error);
    });
}

function elegir(elegido) {
    $("#personal").removeClass("bg-light");
    $("#account").removeClass("bg-light");
    $("#avatar").removeClass("bg-light");
    $("#additional").removeClass("bg-light");
    switch (elegido){
        case 'personal':
            $("#personal").addClass("bg-light");
            break;
        case 'account':
            $("#account").addClass("bg-light");
            break;
        case 'avatar':
            $("#avatar").addClass("bg-light");
            break;
        case 'additional':
            $("#additional").addClass("bg-light");
            break;
    }
}

function asociarEventoPerfil(){
    $("#personal").on("click",obtenerDatosPersonales);
    $("#account").on("click",obtenerDatosCuenta);
    $("#avatar").on("click",obtenerDatosAvatar);
    $("#additional").on("click",obtenerDatosAdicionales);
}

$(function(){
    asociarEventoPerfil();

});

function enviarFormulario() {
    console.log("test");
    $("#editForm").submit();
}