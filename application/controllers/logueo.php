<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logueo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar el modelo ModeloLogueo
        $this->load->model('Usuario');
        $this->load->library('session');
    }

	public function index()
	{   
        $dato['conforme'] = "";
		$this->load->view('usuario/logueo',$dato);
	}

    public function verificarExistencia(){

        $nombre = $this->input->post('nombre');  
        $contraseña = $this->input->post('contraseña');

        $modelo = new usuario();

        if ($modelo->verificarExistencia($nombre,$contraseña) ) {

            $this->session->set_userdata(array(
                'idUsuario' => $modelo->traerId($nombre, $contraseña),
                'rolUsuario' => $modelo->traerRol($nombre, $contraseña),
                'log' => true
            ));

            redirect('');
        }else {
            // Si no existe, mostramos un mensaje de error
            $dato['conforme'] = "Usuario o contraseña incorrectos.";
            $this->load->view('usuario/logueo',$dato);
        }

    }

    public function cerrarSession(){
        session_destroy();
        redirect('navegacion');
    }
    public function reg(){
        $dato['conforme'] = "";
        $this->load->view('usuario/registrar',$dato);

    }

    public function registrar(){

        $modelo = new usuario();

        $dato['conforme'] = "";
        $nombre = $this->input->post('nombre');  
        $contraseña = $this->input->post('contraseña');
        $contraseña2 = $this->input->post('contraseña2');
        $correo = $this->input->post('correo');

        if($contraseña != $contraseña2 ){
            $dato['conforme'] = "las contraseñas deben ser iguales";
            $this->load->view('usuario/registrar',$dato);
        }else{

            if( !$modelo->verificarExistencia($nombre,$contraseña)){ //cambiar por uno de solo nombre
            $modelo->registrarUsuario($nombre,$correo,$contraseña); 
            $dato['conforme'] = "registrado correctamente";
            $this->load->view('usuario/registrar',$dato);   
            }else{
             $dato['conforme'] = "el usuario ya existe";
             $this->load->view('usuario/registrar',$dato);
            }
        }

    }

}


