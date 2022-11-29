<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaturas extends CI_Controller {
// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("asignatura");
	}
	public function indexa()
	{
		$data["listadoAsignaturas"]=$this->asignatura->obtenerTodos();
		$this->load->view('header');
		$this->load->view('asignaturas/indexa',$data);
		$this->load->view('footer');
	}
	public function nuevoa()
	{
		$this->load->view('header');
		$this->load->view('asignaturas/nuevoa');
		$this->load->view('footer');
	}
	// renderizar la vista de ACTUALIZAR
	public function actualizar($id){
		$data["asignaturaEditar"]=$this->asignatura->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('asignaturas/actualizar',$data);
		$this->load->view('footer');
	}
	// funcion para capturat los valores del formulario matricula
			public function guardarAsignatura(){
				$datosAsignatura=array(
					"nombre_asignatura"=>$this->input->post('nombre_asignatura'),
					"numero_creditos_asignatura"=>$this->input->post('numero_creditos_asignatura'),
					"descripcion_asignatura"=>$this->input->post('descripcion_asignatura'),
					"jornada_asignatura"=>$this->input->post('jornada_asignatura')
				);
				print_r($datosAsignatura);
				if ($this->asignatura->insertar($datosAsignatura)) {
					redirect('asignaturas/indexa');
				}else {
				echo "<h1> error <h1>";
			}
		}
		// funcon para eliminar asignatura
		public function borrar($id_asignatura){
			if ($this->asignatura->eliminarPorId($id_asignatura)) {
				redirect('asignaturas/indexa');
			} else {
				echo "Error al Eliminar ;( ";
			}

		}
		// formulario actualizar estudiante
			public function procesarActualizacion(){
				$datosAsignaturaEditado=array(
					"nombre_asignatura"=>$this->input->post('nombre_asignatura'),
					"numero_creditos_asignatura"=>$this->input->post('numero_creditos_asignatura'),
					"descripcion_asignatura"=>$this->input->post('descripcion_asignatura'),
					"jornada_asignatura"=>$this->input->post('jornada_asignatura')
				);
				$id=$this->input->post("id_asignatura");
				if ($this->asignatura->actualizar($id,$datosAsignaturaEditado)) {
					redirect('asignaturas/indexa');
				}else {
					echo "<h1> error <h1>";
				}
			}
}
