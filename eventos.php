<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <button onclick="clickear()">Presioname</button>
    <br>
    <button onmouseout="sacarMouse()">Sacar el mouse</button>



    <script>
        
        function clickear(){
            alert("Alerta por evento :)");
        }

        function sacarMouse(){
            alert("Sacaste el ratón");
        }



    </script>



</body>
</html>