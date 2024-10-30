//Encontrar el numro mayor de una lista de numeros en un array
//defenir nuestro arreglo

let numeros = [2, 3, 6, 1, 8, 4];

//variable para nuetsro bjetivo, iniciar en 0

let numMax = 0;
let tamanoarray = numeros.length;

for (let i = 0; i < tamanoarray; i++) {
  if (numMax < numeros[i]) {
    numMax = numeros[i];
  }
}
console.log(numMax);

//otro metodo
let maximo = Math.max(2, 3, 6, 1, 8, 4);
console.log(maximo);
