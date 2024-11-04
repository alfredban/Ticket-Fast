<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class ShowController extends CI_Controller  {


	public function __construct() {
        parent::__construct();
        // Cargamos los modelos
         $this->load->model('Show');
		 $this->load->model('Usuario');
		 $this->load->library('session');
    }



    public function elimnarShow($id){

    $modelo = new Show();


    if($modelo->bajaShow($id) ){

        $datos = $modelo->getShows();	

        redirect('ShowController/cargarShows');

        }{

        echo("no se pudo dar de baja");
    }

}

    public function darAlta($id){

        $modelo = new Show();
    
    
        if($modelo->altaShow($id) ){
    
            $datos = $modelo->getShows();	
    
            redirect('ShowController/cargarShows');
    
        }{
    
            echo("no se pudo dar de alta");
            }
    
    }
    
    public function detalleShow($id_shows){

		$modelo = new Show();

		$show['show']= $modelo->getShowById($id_shows);

		$this->load->view('header');
		$this->load->view('show/showIndividual',$show);
		$this->load->view('footer');

	}



    public function modShow($id){

		$modelo = new Show();

		$Show ['show'] = $modelo->getShowById($id); 

		$this->load->view('show/modificarShow',$Show);

	}
	
	public function modificarShow($idShow) {
		$modelo = new Show();
		
		// Obtener los datos enviados por el formulario
		$nombre = $this->input->post('nombre');
		$fecha = $this->input->post('fecha');
		$precio = $this->input->post('precio');
		$capacidad = $this->input->post('capacidad');
		$cantR = $this->input->post('cantR');
		$agotado = $this->input->post('agotado');
		$localidad = $this->input->post('localidad');

		// Llamar al método modificarShow
		if($modelo->modificarShow($idShow, $nombre, $fecha, $precio, $capacidad, $cantR, $localidad) == true) {
			
			// Si es exitoso, cargar la vista con los shows actualizados
			$datos['shows'] = $modelo->getShows();
	
			redirect('ShowController/cargarShows');

		} else {
			echo("No se pudo modificar el show");
		}
	}


    public function crearShowForm(){
		$this->load->view('show/crearShow');
	}

	public function crearShow(){
			//configuramos la libreria
		$config['upload_path'] = './assets/shows/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//$config['max_size'] = 2048;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('imagen') ){
			$imagen = $this->upload->data('file_name');


			$nombre = $this->input->post('nombre');
			$precio = $this->input->post('precio');
			$capacidad = $this->input->post('capacidad');
			$cantR = $this->input->post('cantR');
			$localidad = $this->input->post('localidad');
			$fecha = $this->input->post('fecha');
	
			$modelo = new Show();
	
			if( $modelo->crearShow($nombre,$fecha,$precio,$capacidad,$cantR,$localidad,$imagen) == true ){
	
				$modelo = new Show();
				$datos['shows'] = $modelo->getShows();
	
	
				$this->load->view('header');
				$this->load->view('show/showsAdmin',$datos);
				$this->load->view('footer');
			}else{
				echo("ocurrio un error");
			}



		}else{	
			$this->upload->display_errors();

		}

  
		
			
	}

    public function cargarShows(){

		$modelo = new Show();
		$datos['shows'] = $modelo->getShows();
		$vacia='';

		if($this->session->userdata('rolUsuario') == 1){

		if( $modelo->getShows() != false){
			$this->load->view('header');
			$this->load->view('show/showsAdmin',$datos);
			$this->load->view('footer');
		}else{ 
			$this->load->view('header');
			$this->load->view('show/errorShow',$datos);
			$this->load->view('footer');
		} 

		 echo $vacia;

		}else{

			if( $modelo->getShows() != false){
				$this->load->view('header');
				$this->load->view('show/shows',$datos);
				$this->load->view('footer');
			}else{ 
				$this->load->view('header');
				$this->load->view('show/errorShow',$datos);
				$this->load->view('footer');
			} 


		}
		
	}

}