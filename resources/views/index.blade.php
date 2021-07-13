<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Domain Testing</title>
</head>
<body onLoad="onLoad()">
    <h1 id="text">Sub Domain Testing</h1>
    <script>
        function onLoad(){
           
            document.getElementById("text").innerHTML = "Subdomain work as : "+window.location.href;
        }
    </script>
</body>
</html>