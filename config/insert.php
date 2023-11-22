<?php
// Verificar si se han enviado datos mediante el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron los datos esperados (correo y contraseña)
    if (isset($_POST['correo']) && isset($_POST['password'])) {
        // Recuperar los datos del formulario
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        // Realizar la conexión a la base de datos (usando la clase anteriormente creada)
        require_once('bd.php'); // Reemplaza con la ruta correcta

        $conexion = new ConexionBD();

        // Insertar datos en la base de datos
        try {
            // Sentencia SQL para insertar datos en la tabla correspondiente
            $sql = "INSERT INTO nombre_de_tu_tabla (correo, password) VALUES (:correo, :password)";

            // Preparar la sentencia SQL
            $stmt = $conexion->conn->prepare($sql);

            // Asignar valores a los parámetros
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password);

            // Ejecutar la sentencia
            $stmt->execute();

            echo "Datos insertados correctamente";
        } catch(PDOException $e) {
            echo "Error al insertar datos: " . $e->getMessage();
        }

        // Cerrar la conexión
        $conexion->cerrarConexion();
    } else {
        echo "Faltan datos del formulario";
    }
} else {
    echo "Acceso denegado";
}
?>

