//Funcion para sanitizar una cadena de entraada contra XSS
function sanitizeInput(input) {
    //Elimina cualquier etiqueta HTML y caracteres especiales
    return input.replace(/</g, '&lt;').replace(/>/g, '&gt;');
}

//Funcion para validar un campo de texto
function validateTextField(input) {
    //Comprueba si el campo esta vacío o contiene etiquetas HTML
    if (!input || input !== sanitizeInput(input)) {
        return false; //Campo no valido
    }
    return true; //Campo valido
}

//Funcion para validar el numero de telefono
function validatePhoneNumber(input) {
    //Comprueba si el numero de telefono contiene solo digitos
    if (!/^\d+$/.test(input)) {
        return false; //Numero de telefono no valido
    }
    return true; //Numero de telefono valido
}

//Funcion para validar el correo electronico
function validateEmail(input) {
    //Utiliza una expresion regular para verificar si el correo electronico tiene un formato valido
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(input);
}

//Funcion para procesar el formulario
function PForm(){
    const nombre = document.getElementById('name').value;
    const primerApellido = document.getElementById('surname1').value;
    const segundoApellido = document.getElementById('surname2').value;
    const anoNacimiento = document.getElementById('birthdate').value;
    const numeroTelefono = document.getElementById('phone').value;
    const correoElectronico = document.getElementById('email').value;
    const observaciones = document.getElementById('comments').value;

    //Validar campos
    if (
        !validateTextField(nombre) ||
        !validateTextField(primerApeelido) ||
        !validateTextField(segundoApellido) ||
        !validateTextField(anoNacimiento) ||
        !validatePhoneNumber(numeroTelefono) ||
        !validateEmail(correoElectronico)
    ) {
        alert('Por favor, complete todos los campos correctamente.');
        return;
    }

    alert('Formulario enviado con éxito');
}