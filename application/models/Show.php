<?php

class Show extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getShows(){

        $query = $this->db->get('shows');

        if( $query->num_rows()> 0){
            return $query;
        }else{
            return false;
        }
    }

    public function bajaShow($id) {
        // Usa consulta parametrizada para evitar inyecciones SQL
        $this->db->set('baja', 1); // Asignar el valor 1 a 'baja'
        $this->db->where('id_shows', $id);
        $this->db->update('shows'); // Ejecutar la consulta
    
        // Verificar si se actualizó al menos una fila
        if ($this->db->affected_rows() > 0) {
            return true;  // El registro fue actualizado con éxito
        } else {
            // Esto puede ocurrir si el id no existe o si el estado ya estaba en '1'
            return false;
        }
    }
          
    public function  altaShow($id) {
        // Usa consulta parametrizada para evitar inyecciones SQL
        $this->db->set('baja', 0); // Asignar el valor 0 a 'alta'
        $this->db->where('id_shows', $id);
        $this->db->update('shows'); // Ejecutar la consulta
    
        // Verificar si se actualizó al menos una fila
        if ($this->db->affected_rows() > 0) {
            return true;  // El registro fue actualizado con éxito
        } else {
            // Esto puede ocurrir si el id no existe o si el estado ya estaba en '0'
            return false;
        }
    }

    public function getShowById($id){
        $this->db->where('id_shows', $id);
        $query = $this->db->get('shows');

        return $query->row();
    }


    public function crearShow($nombre,$fecha,$precio,$capacidad,$cantReservas,$direccion,$img){

        $sql ="INSERT INTO shows(nombre,fecha,precio,capacidad,cant_reservas,direccion,imagen)
        VALUES(?,?,?,?,?,?,?)";


        $this->db->query($sql, array($nombre,$fecha,$precio,$capacidad,$cantReservas,$direccion,$img));

        if ($this->db->affected_rows() > 0) {
            return true;  // El registro fue insertado con éxito
        } else {
            // Obtener detalles del error y devolverlo o manejarlo como se necesite
            $error = $this->db->error(); // Retorna un array con 'code' y 'message'
            log_message('error', 'Error en la consulta SQL: ' . $error['message']); // Registrar el error en el log
            return false;  // Indicar que hubo un error
        }
    }

    public function actualizarNombreShow($id, $nombre){

        $this->db->query("UPDATE shows SET nombre = '$nombre' WHERE id_shows = $id");
    }

    public function actualizarFechaShow($id, $fecha){

        $this->db->query("UPDATE shows SET fecha = '$fecha' WHERE id_shows = $id");
    }

    public function actualizarPrecioShow($id, $precio){

        $this->db->query("UPDATE shows SET precio = '$precio' WHERE id_shows = $id");
    }

    public function actualizarCapacidadShow($id, $capacidad){

        $this->db->query("UPDATE shows SET capacidad = '$capacidad' WHERE id_shows = $id");
    }

    public function actualizarCantRShow($id, $cant_reservas){

        $this->db->query("UPDATE shows SET cant_reservas = '$cant_reservas' WHERE id_shows = $id");
    }

    public function actualizarDireccionShow($id, $direccion){

        $this->db->query("UPDATE shows SET direccion = '$direccion' WHERE id_shows = $id");
    }


    public function modificarShow($id, $nombre, $fecha, $precio, $capacidad, $cantReservas,$localidad) {

    
        $sql = "UPDATE shows 
                SET nombre = ?, fecha = ?, precio = ?, capacidad = ?, cant_reservas = ?, direccion = ?
                WHERE id_shows = ?";
    
        
        if ($this->db->query($sql, array($nombre, $fecha, $precio, $capacidad, $cantReservas, $localidad, $id))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                echo "No se actualizaron filas";
                return false;
            }
        } else {
            echo "Error en la consulta: " . $this->db->error();
            return false;
        }
            

    }

    public function verificarCantidad($id, $cantidad){

        $this->db->select('cant_reservas,capacidad');
        $this->db->from('shows');
        $this->db->where('id_shows', $id);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $row = $query->row();

            $cantidad = $row->cant_reservas + $cantidad;
            $reservado = $row->capacidad;


            if(   $cantidad <= $reservado  ){
                return true;
            }

        }else{
            return false;
        }


    }

    public function obtenerPrimerShow() {
        $query = $this->db->get('shows'); // Realiza la consulta a la tabla 'shows'
        
        if ($query->num_rows() > 0) {
            return $query->row(); // Obtiene el primer resultado como un objeto
        } else {
            return null; // Retorna null si no hay filas en la tabla
        }
    }


}

