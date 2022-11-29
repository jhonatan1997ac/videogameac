<?php

class asignatura extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("asignatura",$datos);
  }
  // funcon de consulta todos los asignaturas de la bdd
  public function obtenerTodos(){
    $asignaturas=$this->db->get("asignatura");
    if ($asignaturas->num_rows()>0) {
      // retornar la consulta de los asignaturas
      return $asignaturas;
    } else {
      // cuando no exite datos
      return false;
    }
  }
  // funcion para eliminar un asignatura se recibe el id
  public function eliminarPorId($id){
    $this->db->where("id_asignatura",$id);
    return $this->db->delete("asignatura");
  }
  // consultando el asignatura por el id
  public function obtenerPorId($id){
    $this->db->where("id_asignatura",$id);
    // asignatura variable
    $asignatura=$this->db->get("asignatura");
    // validacion
    if ($asignatura->num_rows()>0) {
      return $asignatura->row(); // solo un usuario
    } else {
      return false; // retorna nada
    }
  }
// proceso de actulizaxcion de asignaturas\
  public function actualizar($id,$datos){
    $this->db->where("id_asignatura",$id);
    return $this->db->update("asignatura",$datos);
  }

} //cierre de la clase no borrar nunca
