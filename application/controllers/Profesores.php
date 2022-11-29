<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller
{
	public function __construct()
	{
					parent::__construct();
					$this->load->model("profesor");
				}
				//renderiza la vista index de estudiantes
				public function profesor()
	{
		$data["listadoProfesores"]=$this->profesor->obtenerTodos();
		$this->load->view('header');
		$this->load->view('profesores/profesor',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de estudiantes
	public function nuevo_profesor()
	{
		$this->load->view('header');
		$this->load->view('profesores/nuevo_profesor');
		$this->load->view('footer');
	}
// asignaturas



	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarProfesores(){
		$datosNuevoProfesor=array(
			"materia_pro"=>$this->input->post('materia_pro'),
			"nombre_pro"=>$this->input->post('nombre_pro'),
			"apellido_pro"=>$this->input->post('apellido_pro'),
			"cedula_pro"=>$this->input->post('cedula_pro'),
			"telefono_pro"=>$this->input->post('telefono_pro'),
			"direccion_pro"=>$this->input->post('direccion_pro'),
			"fecha_nacimiento_pro"=>$this->input->post('fecha_nacimiento_pro')
		);
		print_r($datosNuevoProfesor);

		if($this->profesor->insertar($datosNuevoProfesor)){
			redirect("profesores/profesor");
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
// funcion para eliminar estudiante
public function borrar($id_pro){
	if ($this->profesor->eliminarPorId($id_pro))
	{
		redirect("profesores/profesor");
	}
	else
	{
		echo "Error al eliminar XD";
	}
}

public function editar($id)
{
	$data["profesorEditar"]=$this->profesor->ObtenerPorId($id);
		$this->load->view('header');
		$this->load->view('profesores/editar',$data);
		$this->load->view('footer');
}
public function procesarEditar(){
	$datosProfesorEditado=array(
    "id_pro"=>$this->input->post('id_pro'),
    "materia_pro"=>$this->input->post('materia_pro'),
    "nombre_pro"=>$this->input->post('nombre_pro'),
    "apellido_pro"=>$this->input->post('apellido_pro'),
    "cedula_pro"=>$this->input->post('cedula_pro'),
    "telefono_pro"=>$this->input->post('telefono_pro'),
    "direccion_pro"=>$this->input->post('direccion_pro'),
    "fecha_nacimiento_pro"=>$this->input->post('fecha_nacimiento_pro')
	);
	$id=$this->input->post("id_pro");

	if($this->profesor->editar($id,$datosProfesorEditado)){
		redirect("profesores/profesor");
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre de la clase no borrar despues estas en problemas te conozco
