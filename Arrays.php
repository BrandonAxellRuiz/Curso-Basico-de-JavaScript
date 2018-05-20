<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <meta name="description" content="BackHome Blog."/>
    <meta name="keywords" content="Blog | BackHome" />
    <meta name="author" content="Brandon Axell Ruiz" />
    
    <!-- facebook -->
    <meta property="og:url"           content="https://brandonaxellruiz.ml/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="BackHome" />
    <meta property="og:description"   content="Somos la opcion en desarrollo de aplicaciones hibridas para mejorar el proceso de tu negocio." />
    <meta property="og:image"         content="https://brandonaxellruiz.ml/img/icon/avatar-brandon.png" />

    <meta name="theme-color" content="#4e342e">

    <title>Blog BackHome</title>

    <link rel="icon" href="https://brandonaxellruiz.ml/img/icon/icon-144x144.png">
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://brandonaxellruiz.ml/img/icon/icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="https://brandonaxellruiz.ml/img/icon/icon-128x128.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://brandonaxellruiz.ml/img/icon/icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="https://brandonaxellruiz.ml/img/icon/icon-512x512.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://brandonaxellruiz.ml/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://brandonaxellruiz.ml/css/mdb.min.css" rel="stylesheet">

    <link href="https://brandonaxellruiz.ml/css/style.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="https://brandonaxellruiz.ml/css/mystyle.css" rel="stylesheet">
    
    <!-- include vue -->
    <link rel="https://brandonaxellruiz.ml/manifest" href="manifest.json">

    <script src="https://brandonaxellruiz.ml/js/fbSdk.js"></script>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script src="https://brandonaxellruiz.ml/js/no.js"></script>

    <style>
        img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }
        #body_class h5{
            font-weight: bolder !important;
            color: #636c72 !important;
        }
        #body_class p{
            font-size: 15px !important;
        }

        #body_class code{
            font-size: 15px !important;
        }

    </style>

    
</head>


<body>
    
    <!-- fb 
    Load Facebook SDK for JavaScript-->
    <div id="fb-root"></div>
    <div class="fb-customerchat" attribution="setup_tool" page_id="1843146869053586" theme_color="#4E342E" logged_in_greeting="Hola, en qué puedo ayudarte?" logged_out_greeting="Hola, en qué puedo ayudarte?"></div>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="https://brandonaxellruiz.ml/" target="_blank">BackHome Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" id="title_link" href="https://brandonaxellruiz.ml/Capitulo/<?php echo $_GET['DemoName']; ?>">Regresar </a>
                        </li>
                        <li class="nav-item" id="subscribe_link" style="display: none !important">
                            <a class="nav-link" data-toggle="modal" data-target="#frameModalBottomSuccessDemo" >
                                Subscribe to notifications
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true" id="share_fb"></div>
                    </form>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>

    <main class="main_padding-top">
        <!--Main layout-->
        <div class="container">
            <div class="row">
                <!--Main column-->
                <div class="col-lg-12">
            		<h1>Como crear un array :</h1><br>
            		//Esta linea sirve para quitar los advertencias de varibles undefined entre otros errores.<br>
            		error_reporting(1);<br>
            		//Declaracion de varibales.<br>
            		$nombre = "Brandon Axell Ruiz";<br>
            		$edad = 22;<br>
            		$fechaNacimiento = "18-07-2018"; <br>
            		$miArray = [];<br>
            		//Creacion de mi array con las variables previamente declaradas.<br>
            		$miArray[] = array(
            			"nombre" => $nombre,
            			"edad" => $edad, 
            			"fechaNacimiento" => $fechaNacimiento
            		);<br>
            		<br>
            		<h1>Envia tu array</h1>
            		<form method="POST">
            			<label for="nombre">Nombre:</label>
            			<input type="text" name="nombre" />
            			<label for="edad">Edad:</label>
            			<input type="number" name="edad" min="1"/>
            			<label for="fechaNacimiento">Fecha de Nacimiento:</label>
            			<input type="date" name="fechaNacimiento" />
            			<button type="submit"> Enviar</button>
            		</form>
            		<br>
            		var_dump($miArray);
            		<?php
            		//esta lnea sirve para quitar los avisos 
            		error_reporting(1);
            		$nombre = "Brandon Axell Ruiz";
            		$edad = 22;
            		$fechaNacimiento = "18-07-2018"; 
            		$miArray = [];
            		if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['fechaNacimiento'])){
            			$miArray[] = array(
            				"nombre" => $_POST['nombre'],
            				"edad" => $_POST['edad'],
            				"fechaNacimiento" => $_POST['fechaNacimiento']
            			);
            		}else{
            			$miArray[] = array(
            				"nombre" => $nombre,
            				"edad" => $edad, 
            				"fechaNacimiento" => $fechaNacimiento
            			);
            		}
            
            		var_dump($miArray);
            		?>
            		<h1>Impreso desde un foreach para descomponer el arreglo :</h1><br>
            
            		foreach ($miArray as $miNuevoArray) {<br>
            		<p>//en esta parte podrias poner cualquier nombre del array que pusiste en otro caso podria ser fechaNacimiento y asi obtener el valor.</p>
            			&nbsp;&nbsp;&nbsp;echo $miNuevoArray["nombre"]; 
            		<br>}<br>
            		Este es el resultado de el echo de la variable $miNuevoArray[nombre]: 
            		<?php
            		foreach ($miArray as $miArray) {
            			echo "<b>".$miArray["nombre"]."</b><br>";
            		}
            		?>
            		<br>
            		<h1>Este el arreglo esta preparado para usarlo en formato JSON (JavaScript Object Notation) :</h1><br>
            		$arrayToJSON = json_encode($miArray);
            		<br>echo $arrayToJSON;
            		<br>
            		<p>Este seria el resultadoe de el array mostrado en formato json</p>
            		<?php 
            		$arrayToJSON = json_encode($miArray);
            		echo $arrayToJSON;
            		?>
                	</div>
                </div>
            </div>
        </main>
		<br><br><br>
		   <!-- SCRIPTS -->
    <!--Footer-->
    <footer class="page-footer center-on-small-only">
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright:
                <a href="../../Portafolio/"> BackHome | Brandon Axell Ruiz </a>

            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->
   
    <!-- JQuery -->
    <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>

    <!-- VUE
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.0/vue-resource.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="../../js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../js/mdb.min.js"></script>

    <script>
        new WOW().init();        
    </script>

	</body>
</html>