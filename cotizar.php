<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo"><span>Conta</span>ctanos</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contactanos</h3>
                <form action="" class="formulario" method="post">
                    <p>
                        <label>Nombre Completo</label>
                        <input id="fullname" type="text" name="fullname">
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input id="correo" type="email" name="email">
                    </p>
                    <p>
                        <label>Tipos de Cierre Perimetrales</label>
                        <select id="cierre" name="listacierre" >
                            <option>Alambre Pua</option>
                            <option>Malla Acmafor</option>
                            <option>Malla Bizcocho</option>
                            <option>Malla Ganadera</option>
                            <option>Tabla 1x5</option>
                            <option>Tabla 1x8</option>
                        </select>
                    </p>
                    <p>
                        <label>Direccion</label>
                        <input id="direccion" type="text" name="direccion">
                    </p>
                    <p class="block">
                        <label>Mensaje</label> 
                        <textarea id="message" name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button id="submit" type="submit" name="btnenviar">
                            Enviar
                        </button>
                    </p>
                </form>
                <script src="./forms.js"></script>
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>

</body>
</html>