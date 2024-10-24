<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio SI NSLC</title>
    <style>
        body    {
        background-image: url(fondo3.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        }
        
        .nombre-liceo{
        text-decoration: none;
        color: white;
        }       

        header{
        display: flex;
        height: 100%;
        background-color: #333333ab;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        }

        .logo{
        display: flex;
        align-items: center;
        }

        .logo{
        height: 80px; ;
        margin-right: 10px;
        }

        nav a{
        background-color: #c2a1aa;
        padding: 50px 140px 50px;
        border-radius: 15px;
        }

        nav a:hover{
        color: aliceblue;

        }   
      
        .nav-link{
        background-color: #c2a1aa;
        padding: 50px 140px 50px;
        border-radius: 15px;
        }

        .columnas{
        display: flex;
        justify-content:center;
        height: 0%;
        width: auto;
        }

        .dale-aqui{
        background-color: #c2a1aa;
        padding: 5px 14px 5px;
        border-radius: 15px;
        }
        .dale-aqui:hover{
        color: #ffffff;
        }
        .colum{
        background-color:#ece1e4;
        padding: 120px;
        margin: 0 5px;
        text-align: center;
        border-radius: 10px;
        margin-top: 50px;
        }
        .colum h3{
        margin: 0 5px;
        }
        .colum img{
        height: 160px;
        }
        .footer{
        background-color: #333333ab;
        padding: 20px 30px 20px;
        width: 100%;
        position: absolute;
        bottom: 0;
    

        }
        .final{
        background-color: #000000ab;
        padding: 20px;
        text-align: center;
        }
        .final p{
        color: white;
        }

    </style>
        <link rel="stylesheet" href="CRUDestilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</head>

<body>
        <header>
            <img src="ave.png" alt="" class="logo">
               <h1 class="nombre-liceo"><i>¡Bienvenido al Sistema de Información de la U.E.<br> " Nuestra Señora de la Candelaria"!</i></h1>
        <nav>
            <a href="#L1" class="nav-link">Cerrar Sesion</a>
        </nav>
            </header> 

        
    <div class="columnas">
        <div  style =background-color:#0080ff class="colum">
            <h3>Estudiantes</h3>
            <img src="todo/assets/imgs/estu.PNG" alt="Registrar Nuevo estudiante">
            <a href="todo/index.php" class="dale-aqui" >Ingresar</a>
        </div>
        <div style =background-color:#198754 class="colum">
            <h3>Profesor</h3>
            <img src="todo/assets/imgs/prof.PNG" class="img-regis" alt="Registrar Profesor">
            <a href="visita.html" class="dale-aqui" >Ingresar</a>
        </div>
        <div style =background-color:#ffc107 class="colum">
            <h3>Materias</h3>
            <img src="todo/assets/imgs/mater.PNG" alt="Registrar Materia">
            <a href="registro.html" class="dale-aqui" >Ingresar </a>
        </div>
        <div style =background-color:#dc3545 class="colum">
            <h3>Constancias</h3>
            <img src="todo/assets/imgs/constancia.PNG" alt="Solicitud">
            <a href="registro.html" class="dale-aqui" >Ingresar </a>
        </div>
    </div>
    <div class="footer"> 
        <div class="final">
            <p>U.E Nuestra Señora de la Candelaria &copy; 2024; Hecho por <span class="diseño"> Rosa Elena Castellanos, Orlando Ortega, Fermin Valera</span></p>
        </div>    
    </div>
</body>

</html>
