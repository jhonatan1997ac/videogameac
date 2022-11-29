<?php

class estudiante extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("estudiante",$datos);
  }
  // funcon de consulta todos los estudiantes de la bdd
  public function obtenerTodos(){
    $estudiantes=$this->db->get("estudiante");
    if ($estudiantes->num_rows()>0) {
      // retornar la consulta de los estudiantes
      return $estudiantes;
    } else {
      // cuando no exite datos
      return false;
    }
  }
  // funcion para eliminar un estudiante se recibe el id
  public function eliminarPorId($id){
    $this->db->where("id_est",$id);
    return $this->db->delete("estudiante");
  }
  // consultando el estudiante por el id
  public function obtenerPorId($id){
    $this->db->where("id_est",$id);
    // estudiante variable
    $estudiante=$this->db->get("estudiante");
    // validacion
    if ($estudiante->num_rows()>0) {
      return $estudiante->row(); // solo un usuario
    } else {
      return false; // retorna nada
    }
  }
// proceso de actulizaxcion de estudiantes\
  public function actualizar($id,$datos){
    $this->db->where("id_est",$id);
    return $this->db->update("estudiante",$datos);
  }

} //cierre de la clase no borrar nunca
