<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Header</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #3b5998;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        button {
            background-color: #3b5998;
            color: white;
            border: none;
            padding: 17px 26px;
            border-radius: 4px;
            width: 170px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #293e69;
        }
    </style>
</head>
<body>
    <header>
        <h1>Facebook</h1>
      
    </header>

<br><br>
<center>
<button id="exitButton">Salir</button>

</center>

<script>
        document.getElementById("exitButton").addEventListener("click", function() {
            if(confirm("¿Estás seguro que quieres salir? Y cerra sesión")) {
                window.location.href = "https://www.google.com.mx"; // Redirige a google.com.mx
            }
        });
    </script>
</body>
</html>
