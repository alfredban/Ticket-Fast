<?php
class Usuario extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function verificarExistencia($nombre, $contraseña) {
        $this->db->where('nombre', $nombre);
        $query = $this->db->get('usuario');
    
        if ($query->num_rows() === 1) {
            $usuario = $query->row();
            // Comparar directamente sin hashear
            if ($contraseña === $usuario->contraseña) {
                return true; // Contraseña correcta
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no existe
        }
    }

    public function traerId($nombre, $contraseña){

        $this->db->where('nombre',$nombre);
        $this->db->where('contraseña',$contraseña);

        $query = $this->db->get('usuario');

        // Comprobar si se encontró al menos una fila
        if ($query->num_rows() > 0) {
            return $query->row()->id_usuario; //retornamos el id del usuario
        } else {
            return false; // El usuario no existe
        }

    }
    public function traerRol($nombre, $contraseña){

        $this->db->where('nombre',$nombre);
        $this->db->where('contraseña',$contraseña);

        $query = $this->db->get('usuario');

        // Comprobar si se encontró al menos una fila
        if ($query->num_rows() > 0) {
            return $query->row()->id_rol; // retornamos el id del usuario
        } else {
            return false; // El usuario no existe
        }

    }

    public function getClientes(){

        $query = $this->db->SELECT('u.*')
                          ->from('usuario u')
                          ->join('rol_usuario r', 'u.id_rol = r.id_rol')
                          ->where('r.descripcion','cliente')
                          ->get();

            if( $query->num_rows() > 0){
                return $query;
            }else{
                return false;
            }

    }

    
    public function eliminarCliente($id){
     $result = false;

    if (is_numeric($id)) {

        // Elimina el cliente de la base de datos
        $this->db->delete('usuario', array('id_usuario' => $id));
        
        // Verifica si la eliminación fue exitosa
        if ($this->db->affected_rows() > 0) {
            
            $result = true;
        } 
       
    } else {
        echo "ID inválido.";
    }
         return $result;
    }

    public function vincularShow($idUsario,$id_shows){

        $sql = "INSERT INTO shows_x_clientes(id_show, id_usuario)
                VALUES (?,?)";

        $this->db->query($sql, array($id_shows,$idUsario));

        if ($this->db->affected_rows() > 0) {
            return true;  // Éxito
        } else {
            // Manejo de errores
            $error = $this->db->error();
            log_message('error', 'Error en la consulta SQL: ' . $error['message']);
            return false;
        }
    }   

    public function sumarEntradas($id_shows,$idUsario,$cant){
        //primero la tabla de usuarios
        $this->db->set('entradas', 'entradas + ' . (int)$cant, FALSE); // Usa FALSE para no poner comillas en la operación
        $this->db->where('id_usuario', $idUsario);
        $this->db->update('usuario');
    
        if ($this->db->affected_rows() > 0) {
            //ahora la se shows
            $this->db->set('cant_reservas', 'cant_reservas + ' . (int)$cant, FALSE);
            $this->db->where('id_shows', $id_shows);
            $this->db->update('shows');

            if ($this->db->affected_rows() > 0) {
                return true; // Ambas actualizaciones fueron exitosas
            }
        }
    
        return false; // Alguna de las actualizaciones falló

    }

 
    public function registrarUsuario($nombre, $correo, $contraseña) {
        // Consulta SQL
        $sql = "INSERT INTO usuario (nombre, correo, contraseña, id_rol) 
                VALUES (?, ?, ?, 2)";
        // Ejecutar la consulta
        $this->db->query($sql, array($nombre, $correo, $contraseña)); // Sin hashear
    
        if ($this->db->affected_rows() > 0) {
            return true;  // Éxito
        } else {
            // Manejo de errores
            $error = $this->db->error();
            log_message('error', 'Error en la consulta SQL: ' . $error['message']);
            return false;
        }
    }

/*
public function registrarUsuario($nombre, $correo, $contraseña) {
    // Verificar si el nombre de usuario ya existe
    $this->db->where('nombre', $nombre);
    $query = $this->db->get('usuario');

    if ($query->num_rows() > 0) {
        log_message('error', 'El nombre de usuario ya existe: ' . $nombre);
        return false; // El usuario ya existe
    }

    // Hashear la contraseña antes de guardarla en la base de datos
    $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

    // Consulta SQL con prepared statements
    $sql = "INSERT INTO usuario (nombre, correo, contraseña, id_rol) 
            VALUES (?, ?, ?, 2)";  // El id del rol es siempre 2 para usuarios normales

    // Ejecutar la consulta con los parámetros vinculados
    $this->db->query($sql, array($nombre, $correo, $hashed_password));

    if ($this->db->affected_rows() > 0) {
        return true;  // El registro fue insertado con éxito
    } else {
        // Obtener detalles del error y devolverlo o manejarlo como se necesite
        $error = $this->db->error(); // Retorna un array con 'code' y 'message'
        log_message('error', 'Error en la consulta SQL: ' . $error['message']); // Registrar el error en el log
        return false;  // Indicar que hubo un error
    }
}
    el programa con el hash de las contraseñas hechos, no lo deje porque me daba errores y me quede sin tiempo*/ 

}