<?php

class colegio extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("colegio_abc",$datos);
  }
  // funcon de consulta todos los estudiantes de la bdd
  public function obtenerTodos(){
    $colegios=$this->db->get("colegio_abc");
    if ($colegios->num_rows()>0) {
      // retornar la consulta de los estudiantes
      return $colegios;
    } else {
      // cuando no exite datos
      return false;
    }
  }
  // funcion para eliminar un estudiante se recibe el id
  public function eliminarPorId($id){
    $this->db->where("id_abc",$id);
    return $this->db->delete("colegio_abc");
  }
} //cierre de la clase no borrar nunca
