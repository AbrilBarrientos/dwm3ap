'use strict';

const d = document;

const persona = {
    nombre: 'Carlos',
    edad: 20,
    email: 'carlos@mail.com',
    // saludar: function(){
    //     alert('Hola!');
    // }
}

//Ejecutar metodo
// persona.saludar();



//Mostrar una propiedad
console.log(persona.nombre); // 'Carlos'

//Actualizar una propiedad
persona.nombre = 'Martin';

//Agregar una propiedad
persona.telefono = '111334567';

class Persona {
    //Atributos
    nombre = '';
    edad = 0;
    email = ''
    constructor(nombre, edad, email){
        this.nombre = nombre;
        this.edad = edad;
        this.email = email;
    }
}


class Perro {
    nombre = "";
    color = "";
    raza = "";
    //constructor
    constructor(nombre, color, raza){
        this.nombre = nombre; 
        //se usa this para referirse al objeto "Perro"
        this.color = color;
        this.raza = raza;
    }
    //metodos
    ladrar(){
        console.log("guau");
    }
}

const perro2 = new Perro('firulais', 'marron', 'pastor blanco');
console.log(perro2.color)// "marron"

//Instanciar clase para crear un objeto

const perro1 = new Perro();

perro1.nombre = "Firulais";
perro1.color = "marron";
perro1.ladrar()


//LocalStorage

//setItem
localStorage.setItem("Auto", "Marca");

    //getItem
    console.log(localStorage.getItem("Auto"));


//SessionStorage