<?php
session_start();
if (!isset($_SESSION['nickname'])) {
    header("Location: index.html");
    exit();
}

include("php/conexion.php"); // Incluir el archivo de conexión

$nickname = $_SESSION['nickname'];

// Obtener los datos del usuario
$sql = "SELECT * FROM persona WHERE Nickname = '$nickname'";
$resultado = mysqli_query($conexion, $sql);
$usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Perfil - <?php echo $usuario['Nickname']; ?></title>
    <meta charset="utf-8">
    <link href="Css/estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="logo">
            <img src="img/logo.jpg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="perfil.php">Mi Perfil</a></li>
                <li><a href="fotos.html">Mis Fotos</a></li>
                <li><a href="amigos.html">Mis Amigos</a></li>
                <li><a href="php/cerrarSesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section id="editarPerfil">
        <h2>Editar Perfil</h2>
        <form method="post" action="php/editarPerfil.php">
            Nombre: <br>
            <input type="text" name="nombre" value="<?php echo $usuario['Nombre']; ?>" required><br>
            Apellidos: <br>
            <input type="text" name="apellidos" value="<?php echo $usuario['Apellidos']; ?>" required><br>
            Edad: <br>
            <input type="number" name="edad" value="<?php echo $usuario['Edad']; ?>" required><br>
            Descripción: <br>
            <textarea name="descripcion" required><?php echo $usuario['Descripcion']; ?></textarea><br>
            Correo Electrónico: <br>
            <input type="email" name="email" value="<?php echo $usuario['CorreoElectronico']; ?>" required><br>
            <input type="submit" value="Actualizar Perfil">
        </form>
    </section>

    <footer>
        <p>Guita - Todos los derechos reservados</p>
    </footer>
</body>
</html>
