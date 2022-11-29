<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("matricula");
		$this->load->model("estudiante");
		$this->load->model("asignatura");
	}

	// renderiza la vista index de matriculas
		public function indext(){
			$data["listadoMatriculas"]=$this->matricula->obtenerTodos();
			$this->load->view('header');
			$this->load->view('matriculas/indext',$data);
			$this->load->view('footer');
		}
		public function nuevoa(){
			$data["listadoaEstudiantes"]=$this->estudiante->obtenerTodos();
			$data["listadoaAsignaturas"]=$this->asignatura->obtenerTodos();
			$this->load->view('header');
			$this->load->view('matriculas/nuevoa',$data);
			$this->load->view('footer');
		}
		public function nuevo(){
			$this->load->view('header');
			$this->load->view('matriculas/nuevo');
			$this->load->view('footer');
		}
		public function tipomatricula(){
			$this->load->view('header');
			$this->load->view('matriculas/tipomatricula');
			$this->load->view('footer');
		}
	// renderizar la vista de ACTUALIZAR
	public function actualizar($id){
		$data["matriculaEditar"]=$this->matricula->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('matriculas/actualizar',$data);
		$this->load->view('footer');
	}

	// funcion para capturat los valores del formulario matricula
			public function guardarMatricula(){
				$datosMatricula=array(
					"nombre_matricula"=>$this->input->post('nombre_matricula'),
					"observacion_matricula"=>$this->input->post('observacion_matricula'),
					"estado_matricula"=>$this->input->post('estado_matricula')
				);
				print_r($datosMatricula);
				if ($this->matricula->insertar($datosMatricula)) {
					echo "OK";
				}else {
				echo "<h1> error <h1>";
			}
		}
		// funcon para eliminar matriculas
		public function borrar($id_matricula){
			if ($this->matricula->eliminarPorId($id_matricula)) {
				redirect('matriculas/indext');
			} else {
				echo "Error al Eliminar ;( ";
			}

		}
		// formulario actualizar matricula
			public function procesarActualizacion(){
				$datosmatriculaEditado=array(
					"nombre_matricula"=>$this->input->post('nombre_matricula'),
					"observacion_matricula"=>$this->input->post('observacion_matricula'),
					"estado_matricula"=>$this->input->post('estado_matricula')
				);
				$id=$this->input->post("id_matricula");
				if ($this->matricula->actualizar($id,$datosmatriculaEditado)) {
					redirect('matriculas/indext');
				}else {
					echo "<h1> error <h1>";
				}
			}
	}//no eliminar
