<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

   

<script>

    var persona = {

        nombre: "Michel",
        apellido: "Charnay",
        edad : 29,
        getNombre: function(){
            return this.nombre;
        },
        setNombre: function(nombre){
            this.nombre = nombre;
        }
    };


    console.log(persona.getNombre());


</script>

</body>
</html>