<?php

class matricula extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("matricula",$datos);
  }
  // funcon de consulta todos los matriculas de la bdd
  public function obtenerTodos(){
    $matriculas=$this->db->get("matricula");
    if ($matriculas->num_rows()>0) {
      // retornar la consulta de los matriculas
      return $matriculas;
    } else {
      // cuando no exite datos
      return false;
    }
  }
  // funcion para eliminar un matricula se recibe el id
  public function eliminarPorId($id){
    $this->db->where("id_matricula",$id);
    return $this->db->delete("matricula");
  }
  // consultando el matricula por el id
  public function obtenerPorId($id){
    $this->db->where("id_matricula",$id);
    // matricula variable
    $matricula=$this->db->get("matricula");
    // validacion
    if ($matricula->num_rows()>0) {
      return $matricula->row(); // solo un usuario
    } else {
      return false; // retorna nada
    }
  }
// proceso de actulizaxcion de matriculas\
  public function actualizar($id,$datos){
    $this->db->wher("id_matricula",$id);
    return $this->db->update("matricula",$datos);
  }

} //cierre de la clase no borrar nunca
