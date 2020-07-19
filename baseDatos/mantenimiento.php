<?php
    //iniciar la sessión
    session_start();

    // Acciones del metodo POST
    //var_dump($_POST)
    if(isset($_POST['accion'])){
     
     if($_POST['accion'] == 'Guardar'){
         guardarUsuario();
         header('location:indexmodal.php');
     }     
    }
    if(isset($_POST['accion'])){
     
     if($_POST['accion'] == 'Cancelar'){
         header('location:index.php');
     }     
    }
    
    if(isset($_POST['accion'])){
     
     if($_POST['accion'] == 'Registrarse'){
         guardarUsuario();
         header('location:indexmodal.php');
     }     
    }
 
    if(isset($_POST['accion'])){
     
     if($_POST['accion'] == 'Modificar'){
         modificarUsuario();
         header('location:indexmodal.php');
     }     
    }
 
    // Acciones del metodo GET
    if(isset($_GET['accion']))
    {  
        switch ($_GET['accion'])
        {
            case 'Eliminar':
                eliminarUsuario();
                header('location:indexmodal.php');
                break;
        }  
    }
    
    if(isset($_GET['accion']))
    {  
        switch ($_GET['accion'])
        {
            case 'EliminarSesion':    
                eliminarSesion();
                header('location:indexmodal.php');
                break;
        }
    }
    
    
    // Sección de funciones
    // Validar si ya existe la lista en la sessión
    // si no, la creamos y la subimos a la sessión

    function obtenerListaUsuarios(){
    if(isset($_SESSION['listaUsuarios'])){
       $listaUsuarios = $_SESSION['listaUsuarios'];
    }else{
       $listaUsuarios = array();     
       $_SESSION['listaUsuarios'] = $listaUsuarios;
    } //Si no crearlo y subirlo a la sesion   
    return $listaUsuarios;
    }

    function guardarUsuario(){
     $cedula = $_POST['cedula'];
     $nombre= $_POST['nombre'];
     $usuario = $_POST['usuario'];
     $password = $_POST['password'];
     $telefono = $_POST['telefono'];
     $correo = $_POST['correo'];
     $direccion = $_POST['direccion'];
     $estadocuenta = $_POST['estadocuenta'];
     $tipocuenta = $_POST['tipocuenta'];
     
    
    //Encriptar password con MD5
    $password = md5('SubiR189*');
    echo "Password is:" .$password;
    

     $usuarios = array("cedula"=>$cedula,"nombre"=>$nombre,"usuario"=>$usuario,"password"=>$password,"telefono"=>$telefono,"correo"=>$correo,"direccion"=>$direccion,"estadocuenta"=>$estadocuenta,"tipocuenta"=>$tipocuenta);
     $lista = obtenerListaUsuarios(); //obtengo lista
     array_push($lista,$usuarios); //agrego a la lista
     $_SESSION['listaUsuarios'] = $lista;  //jalo la lista   
    }
 
    function modificarUsuario(){
     $cedula = $_POST['cedula'];
     $nombre= $_POST['nombre'];
     $usuario = $_POST['usuario'];
     $password = $_POST['password'];
     $telefono = $_POST['telefono'];
     $direccion = $_POST['direccion'];
     $correo = $_POST['correo'];
     $estadocuenta = $_POST['estadocuenta'];
     $tipocuenta = $_POST['tipocuenta'];
     
     $usuarios = array("cedula"=>$cedula,"nombre"=>$nombre,"usuario"=>$usuario,"password"=>$password,"telefono"=>$telefono,"direccion"=>$direccion,"correo"=>$correo,"estadocuenta"=>$estadocuenta,"tipocuenta"=>$tipocuenta);
     $lista = obtenerListaUsuarios(); //obtengo lista
     array_push($lista,$usuarios); //para agregar a la lista un elemento
     $_SESSION['listaUsuarios'] = $lista;     
    }
 
    function eliminarUsuario(){
        $posicion = $_GET['posicion'];//posicion donde esta el elemento
        $lista = obtenerListaUsuarios();//devuelve lista en la posicion
        unset($lista[$posicion]);//unset elimina
        $_SESSION['listaUsuarios'] = $lista;//subir lista actualizada
    }


    function eliminarSesion(){
        unset($_SESSION['listaUsuarios']);
        session_unset();
        session_destroy();
    }

    function modificarSesion(){
       $posicion = $_GET['posicion'];
       $lista = obtenerListaUsuarios();
       update ($lista[$posicion]);
       $_SESSION['listaUsuarios'] = $lista;
    }


