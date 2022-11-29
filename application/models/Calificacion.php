<?php

class Calificacion extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("calificacion",$datos);
  }
  //funicion que consulta todos los estudiantes de la bdd
  public function obtenerTodos(){
    $calificaciones=$this->db->get("calificacion");
    if ($calificaciones->num_rows()>0)
    {
      return $calificaciones;
    }
    else
    {
      return false;
    }
  }
  // funicion para eliminar un estudiante se recien elid
  public function eliminarPorId($id)
  {
    $this->db->where("id_cal",$id);
    return $this->db->delete("calificacion");
  }
  //editar
    public function ObtenerPorId($id)
    {
      $this->db->where("id_cal",$id);
      $calificacion=$this->db->get("calificacion");
      if ($calificacion->num_rows()>0)
      {
        return $calificacion->row();
      }
      else
      {
        return false;
      }
    }
    // proceso de actualizacion
    public function editar($id,$datos)
    {
      $this->db->where("id_cal",$id);
      return $this->db->update("calificacion",$datos);
    }


}// cierre de la clase
