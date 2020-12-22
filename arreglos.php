<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<script>

 var arreglo = [20,10,3];


/*
 //ingresar un valor al arreglo al final
 arreglo.push("asd");

 //ingresar un valor al arreglo al principio
 arreglo.unshift("perro");

  //Elimina el último 
  arreglo.pop("perro");


 console.log(arreglo[0]);
 
 //longitud del arreglo
 console.log(arreglo.length);
*/


//reccorrer el arreglo
for (var i = 0; i < arreglo.length; i++){
    console.log(arreglo[i]);
}



//oredena arreglo alfabéticamente
//arreglo.sort();


//convertir una cadena en arreglo y recorrerlo
var arreglo2 = "a,b,c,2".split(",");

for (var i = 0; i < arreglo2.length; i++){
    console.log(arreglo2[i]);
}


//función map (ejecuta función x cada elemento de el arreglo que le pongamos )

var arreglo3 = [1,3,5,8];

//se usará map para que aplique en cada elemento 1 por 1 
//se está haciendo una función dentro del argumento de la función map
var cuadrados = arreglo3.map(function(elemento){
    return elemento * elemento;
});

console.log(cuadrados);

</script>






</body>
</html>