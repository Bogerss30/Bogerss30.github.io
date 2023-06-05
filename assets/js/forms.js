document.querySelector('#submit').addEventListener('click',function(){
    let nombre = document.querySelector('#fullname').value;
    let correo = document.querySelector('#correo').value;
    let cierre = document.querySelector('#cierre').value;
    let direccion = document.querySelector('#direccion').value;
    let mensaje = document.querySelector('#message').value;

    let url = `https://api.whatsapp.com/send?phone=${56962525998}&text=
    *_Cierre Perimetrales SMS_*%0A
    *Reservas*%0A%0A
    *¿Cuál es tu nombre?*%0A
    ${nombre}%0A
    *Indica tu correo*%0A
    ${correo}%0A
    *Tipo de Cierre Perimetrales*%0A
    ${cierre}%0A
    *Indica tu dirrecion*%0A
    ${direccion}%0A
    *Indique su pregunta*%0A
    ${mensaje}`;
    window.open(url);
})