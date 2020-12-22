<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<button  id="btn">Hazme Click :)</button>




<script>
//la idea es que la función se llame a si misma para no dejarla dentro del scope global

(function (){
    document.getElementById('btn').addEventListener("click",function(){
    console.log("Me clickeaste");
    });
})();









</script>


</body>
</html>