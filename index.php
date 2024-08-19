<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header class="header">

        <div class="menu contrainer">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icon" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ipsum sapiente mollitia id natus deleniti, dolor quae aliquid, 
                    laudantium fuga dolore optio accusantium minima, rerum temporibus
                    fugiat provident tempore sit repudiandae.
                </p>
                <a href="#" class="btn-1">Information</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>

        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium perspiciatis, natus ipsa dolore numquam earum at voluptas suscipit eius magni, eveniet laboriosam assumenda odio animi adipisci ipsum, totam sed iste?</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestiae obcaecati tenetur hic nesciunt eos dicta eaque temporibus ratione deleniti, similique sunt. Facilis ea ducimus nihil, cumque omnis porro delectus?</p>
        </div>

    </section>
    
    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicios-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatria</h3>
            </div>

            <div class="servicios-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecologia</h3>
            </div>

            <div class="servicios-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>dermatologia</h3>
            </div>

            <div class="servicios-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>

        </div>

    </main>

    <section class="formulario container">

        <form method="post" autocomplete="off">
            <h2>Agenda Consulta</h2>
            <div class="input-container">
                <input type="text" name="name" placeholder="nombre y apellido">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="telefono/celular">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="correo">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-container">
                <textarea name="message" placeholder="detalles de la consulta"></textarea>
            </div>
            <input type="submit" name="send" class="btn" onClick="myFunction()">

        </form>
    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include ("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="https://localhost/mama"
        }
    </script>
</body>
</html>