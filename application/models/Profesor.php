<?php

class Profesor extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("profesor",$datos);
  }
  //funicion que consulta todos los estudiantes de la bdd
  public function obtenerTodos(){
    $profesores=$this->db->get("profesor");
    if ($profesores->num_rows()>0)
    {
      return $profesores;
    }
    else
    {
      return false;
    }
  }
  // funicion para eliminar un estudiante se recien elid
  public function eliminarPorId($id)
  {
    $this->db->where("id_pro",$id);
    return $this->db->delete("profesor");
  }
  //editar
    public function ObtenerPorId($id)
    {
      $this->db->where("id_pro",$id);
      $profesor=$this->db->get("profesor");
      if ($profesor->num_rows()>0)
      {
        return $profesor->row();
      }
      else
      {
        return false;
      }
    }
    // proceso de actualizacion
    public function editar($id,$datos)
    {
      $this->db->where("id_pro",$id);
      return $this->db->update("profesor",$datos);
    }


}// cierre de la clase
