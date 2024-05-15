<?php

    if((isset($_POST['nombre']) && !empty($_POST['nombre']))
       && (isset($_POST['apellido']) && !empty($_POST['apellido']))
       && (isset($_POST['edad']) && !empty($_POST['edad']))
       && (isset($_POST['fecha']) && !empty($_POST['fecha']))
       && (isset($_POST['ciudad']) && !empty($_POST['ciudad']))
       && (isset($_POST['trabajo']) && !empty($_POST['trabajo']))
       && (isset($_POST['cargo']) && !empty($_POST['cargo']))
       &&(isset($_FILES['imagen']) && !empty($_FILES['imagen']['error']=== UPLOAD_ERR_OK))
    ){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $fecha = $_POST['fecha'];
        $ciudad = $_POST['ciudad'];
        $trabajo = $_POST['trabajo'];
        $cargo = $_POST['cargo'];
        $imagen = $_FILES['imagen'];
        

        $nombreArchivo = $_FILES['imagen']['name'];
        $rutatemp = $_FILES['imagen']['tmp_name'];
        $destino = 'img/'.$nombreArchivo;

        move_uploaded_file($rutatemp, $destino);
        
        echo 'variable llenas';
        echo "Nombre: $nombre. <br>";
        echo "apellido: $apellido. <br>";
        echo "Edad: $edad. <br>";
        echo "fecha: $fecha. <br>";
        echo "ciudad: $ciudad. <br>";
        echo "trabajo: $trabajo. <br>";
        echo "cargo: $cargo. <br>";
        echo "<img src='$destino' alt='Imagen cargada' style='width: 400px; height: 400px'>";

        if($edad >= 18 && $edad != 0){
            echo " <br> . Es mayor de edad";
        }else{
            echo " <br> .Es menor de edad";
        }
    

    }else{
        echo 'Llene todos los campos del formulario';
    }


    // $nombre = $_GET['nombre'];
    // $apellido = $_GET['apellido'];
    // $edad = $_GET['edad'];
    // $fecha = $_GET['fecha'];
    // $ciudad = $_GET['ciudad'];
    // $trabajo = $_GET['trabajo'];
    // $cargo = $_GET['cargo'];



