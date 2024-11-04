<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class navegacion extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Cargamos los modelos
         $this->load->model('Show');
		 $this->load->model('Usuario');
		 $this->load->library('session');
    }


	public function index()
	{	
		$modelo = new Show();

		$show['show'] = $modelo->obtenerPrimerShow();

		 $this->load->view('navegacion/inicio',$show);
	}




	public function listaClientes(){

		$model = new Usuario();

		$datos['clientes'] = $model->getClientes();

		if($model->getClientes() != false){
		$this->load->view('header');
		$this->load->view('usuario/listaClientes',$datos);
		$this->load->view('footer');
		}else{

			$this->load->view('header');
			$this->load->view('usuario/errorUsuario',$datos);
			$this->load->view('footer');

		}
	}

	public function eliminarCliente($id_usuario){


		$model = new Usuario();
 
		$model->eliminarCliente($id_usuario);

		
		$datos['clientes'] = $model->getClientes();

		if($model->getClientes() != false){
		$this->load->view('header');
		$this->load->view('usuario/listaClientes',$datos);  

		$this->load->view('footer');
		}else{
			echo("no hay clientes");

		}
	}

	public function comprarEntrada($id_shows){


		if($this->session->userdata('log') == true){

		$modelo = new Usuario();
		$modelo2 = new show();
		$cant = $this->input->post('cant');
 

		if($modelo2->verificarCantidad($id_shows,$cant)){

			if($modelo->vincularShow($this->session->userdata('idUsuario'),$id_shows) &&
				 $modelo->sumarEntradas($id_shows,$this->session->userdata('idUsuario'),$cant)){

				$show['show']= $modelo2->getShowById($id_shows);


			$this->load->view('header');
			$this->load->view('show/compraRealizada',$show);
			$this->load->view('footer');

			}else{
				echo("gracias por no comprar");
				echo $cant;
			}

				//cargar vistas
			
			}else{
			echo("no se puede comprar mas de las que hay");

			}

		}else{
			$dato['conforme'] = "tiene que registrarse antes de continuar";
			$this->load->view('usuario/logueo',$dato);
		}
	}


	



}
