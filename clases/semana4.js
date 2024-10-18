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

for(let i = 0; i < 10 ; i++){
    console.log(i)
}

let frutas = ["melon","sandia","manzana","pera"];

for(let i in frutas){
    console.log(frutas[i]);
}

console.log(frutas[0]);

for(let i in frutas){
    console.log(i);
    if(frutas[i] == "melon"){
        console.log("Encontre mi fruta favorita", frutas[i]);
        break;
    }
}


edad = 50;

do {
    edad++;
    console.log(edad);
} while(edad < 50)


while(edad < 50){
    edad++;
    console.log(edad);
}

function calculadora(operador, numero1, numero2){
    // sumar, restar, multiplica, dividir


}

console.log(calculadora("",5,6));
/*
let saludo = document.getElementById("saludo");
saludo.innerHTML = "Hola Semana 5";
console.log(saludo);
*/
let nuevoElemento = document.createElement("p");
nuevoElemento.innerHTML = "<b>Este es un nuevo elemento tipo p</b>";
document.body.append(nuevoElemento);

document.getElementById("saludar").addEventListener("click",function(){
    let saludo = document.getElementById("saludo");
    let email = document.getElementById("email").value;
    if(email != ""){
        
    }
    console.log(email);
    saludo.innerHTML = "Hola Semana 5";
    alert("Hola!!");
})