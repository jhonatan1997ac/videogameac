<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("estudiante");
	}
// renderiza la vista index de estudiantes
	public function index()
	{
		$data["listadoEstudiantes"]=$this->estudiante->obtenerTodos();
		$this->load->view('header');
		$this->load->view('estudiantes/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista Nuevo de estudiantes
  public function nuevo()
	{
    $this->load->view('header');
    $this->load->view('estudiantes/nuevo');
    $this->load->view('footer');
  }
	// renderizar la vista de ACTUALIZAR
	public function actualizar($id){
		$data["estudianteEditar"]=$this->estudiante->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('estudiantes/actualizar',$data);
		$this->load->view('footer');
	}
// funcion para capturat los valores del
// formulario nuevo
	public function guardarEstudiante(){
		$datosNuevoEstudiante=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')
		);
		print_r($datosNuevoEstudiante);
		if ($this->estudiante->insertar($datosNuevoEstudiante)) {
			redirect('estudiantes/index');
		}else {
			echo "<h1> error <h1>";
		}
	}
// funcon para eliminar ESTUDIANTES
public function borrar($id_est){
	if ($this->estudiante->eliminarPorId($id_est)) {
		redirect('estudiantes/index');
	} else {
		echo "Error al Eliminar ;( ";
	}

}
// formulario actualizar estudiante
	public function procesarActualizacion(){
		$datosEstudianteEditado=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')
		);
		$id=$this->input->post("id_est");
		if ($this->estudiante->actualizar($id,$datosEstudianteEditado)) {
			redirect('estudiantes/index');
		}else {
			echo "<h1> error <h1>";
		}
	}
}// cerre de la clase no borrar nunca
