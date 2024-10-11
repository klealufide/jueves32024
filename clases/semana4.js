const notaAprobada = 70;


let total = 50;

console.log(total);

function suma(a, b) {
    // let total = a+b; // solo local
    total = a + b; // cambia global
    console.log(total);
}

suma(4, 5);
console.log(total);

let nombre = "Karol Leal";
let edad = 34;
let esProfesor = true;

const mayorEdad = 18;

console.log(nombre.length);
console.log(nombre.startsWith("Ka"));
console.log(nombre);
console.log(edad);
console.log(esProfesor.toString());
console.log(edad.toString() + 3);


let mensaje = edad >= mayorEdad ? "Es mayor de edad" : "Es menor de edad";

console.log(mensaje);

if (edad >= mayorEdad) {
    console.log("es mayor de edad");
}

edad = 10;

if (edad >= mayorEdad) {
    console.log("es mayor de edad");
} else {
    console.log("No es mayor de edad");
}

let color = "verde";

switch (color) {
    case 'amarillo':
        console.log("precaucion");
        break;
    case 'rojo':
        console.log("detengase");
        break;
    case 'verde':
        console.log("siga");
        break;
    default:
        console.log("No esta definido ese color");
        break;
}