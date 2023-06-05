<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styleNavbar.css" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="#">
                <img src="../assets/images/Logo/logo-sms.png" alt="">
            </a>
        </div>
        <input type="checkbox" id="toggle">
        <label for="toggle"> <img src="../assets/images/Footer/menu.svg" alt="menu"></label>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php">INICIO</a></li>
                <li><a href="../index.php#Trabajos">TRABAJOS</a></li>
                <li><a href="../index.php#Nosotros">NOSOTROS</a></li> 
                <li>
                    <a href="#">SERVICIOS</a>
                <ul>
                    <li><a href="../Servicios/Alambre_púa.php">Alambre púa</a></li>
                    <li><a href="../Servicios/Malla_acmafor.php">Malla acmafor</a></li>
                    <li><a href="../Servicios/Malla_bizcocho.php">Malla bizcocho</a></li>
                    <li><a href="../Servicios/Malla_ganadera.php">Malla ganadera</a></li>     
                    <li><a href="../Servicios/Tabla_de_1x5.php">Tabla de 1x5</a></li>
                </ul>
                </li>
                <li><a href="#" class="action_btn">COTIZAR</a></li>
            </ul>
            
        </nav>
    </header>