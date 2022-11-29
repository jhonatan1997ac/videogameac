<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificaciones extends CI_Controller
{
	public function __construct()
	{
					parent::__construct();
					$this->load->model("calificacion");
				}
				//renderiza la vista index de estudiantes
				public function calificacion()
	{
		$data["listadoCalificaciones"]=$this->calificacion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('calificaciones/calificacion',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de estudiantes
	public function nueva_calificacion()
	{
		$this->load->view('header');
		$this->load->view('calificaciones/nueva_calificacion');
		$this->load->view('footer');
	}
// asignaturas



	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarCalificaciones(){
		$datosNuevaCalificacion=array(
			"materia_cal"=>$this->input->post('materia_cal'),
			"nota_cal"=>$this->input->post('nota_cal'),
			"producto_cal"=>$this->input->post('producto_cal'),
		);
		print_r($datosNuevoEstudiante);

		if($this->calificacion->insertar($datosNuevaCalificacion)){
			redirect("calificaciones/calificacion");
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
// funcion para eliminar estudiante
public function borrar($id_cal){
	if ($this->calificacion->eliminarPorId($id_cal))
	{
		redirect("calificaciones/calificacion");
	}
	else
	{
		echo "Error al eliminar XD";
	}
}

public function editar($id)
{
	$data["calificacionEditar"]=$this->calificacion->ObtenerPorId($id);
		$this->load->view('header');
		$this->load->view('calificaciones/editar',$data);
		$this->load->view('footer');
}
public function procesarEditar(){
	$datosCalificacionEditado=array(
    "id_cal"=>$this->input->post('id_cal'),
    "materia_cal"=>$this->input->post('materia_cal'),
    "nota_cal"=>$this->input->post('nota_cal'),
    "producto_cal"=>$this->input->post('producto_cal'),
  );
	$id=$this->input->post("id_cal");

	if($this->calificacion->editar($id,$datosCalificacionEditado)){
		redirect("calificaciones/calificacion");
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre de la clase no borrar despues estas en problemas te conozco
