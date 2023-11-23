<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Header</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #3b5998; /* Color azul característico de Facebook */
    color: white;
    text-align: center;
    padding: 20px 0;
}

h1 {
    margin: 0;
    font-size: 28px;
}


/* Estilos adicionales para la sección de votación */
.voting-section {
    text-align: center;
    padding: 20px;
}

.voting-options {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.person {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 8px;
    width: 200px;
}

.progress-bar {
    background-color: #eee;
    border-radius: 4px;
    height: 15px;
    margin-bottom: 8px;
}

.progress {
    background-color: #3b5998;
    border-radius: 4px;
    height: 100%;
    line-height: 15px;
    color: white;
}

button {
    background-color: #3b5998;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 100%;
    margin-top: 8px;
}

button:hover {
    background-color: #293e69;
}

</style>
<body>
    <header>
        <h1>Facebook</h1>
    </header>
    
    <section class="voting-section">
        <h2>Elige tu persona favorita:</h2>
        <div class="voting-options">
            <div class="person">
                <p>Marco Mozo</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 40%;">40%</div>
                </div>
                <a href="Gracias.php"> <button>¡Votar!</button></a>
            </div>
            <div class="person">
                <p>Maria Lopez</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 60%;">60%</div>
                </div>
                <a href="Gracias.php"> <button>¡Votar!</button></a>
            </div>
            <div class="person">
                <p>Luis Perez</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 20%;">20%</div>
                </div>
                <a href="Gracias.php"> <button>¡Votar!</button></a>
            </div>
            <div class="person">
                <p>Sofia Gomez</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 80%;">80%</div>
                </div>
                <a href="Gracias.php"> <button>¡Votar!</button></a>
            </div>
        </div>
    </section>
</body>
</html>
