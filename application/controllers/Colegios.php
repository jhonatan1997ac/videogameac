<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colegios extends CI_Controller{
	public function __construct()
	{
					parent::__construct();
					$this->load->model("colegio");
				}
				//renderiza la vista index de estudiantes
				public function indexc()
	{
		$data["listadoColegios"]=$this->colegio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('colegios/indexc',$data);
		$this->load->view('footer');
	}
	// renderiza la vista Nuevo de colegio
	public function nuevoc()
	{
		$this->load->view('header');
		$this->load->view('colegios/nuevoc');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarColegio(){
		$datosColegio=array(
			"id_abc"=>$this->input->post('id_abc'),
			"nombre_abc"=>$this->input->post('nombre_abc'),
			"curso_abc"=>$this->input->post('curso_abc'),
			"materia_abc"=>$this->input->post('materia_abc'),
			"docente_abc"=>$this->input->post('docente_abc')
    );
		print_r($datosColegio);
		if ($this->colegio->insertar($datosColegio)){
			redirect("colegios/indexc");
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function editarColegio(){
		$datosColegio=array(
			"id_abc"=>$this->input->post('id_abc'),
			"nombre_abc"=>$this->input->post('nombre_abc'),
			"curso_abc"=>$this->input->post('curso_abc'),
			"materia_abc"=>$this->input->post('materia_abc'),
			"docente_abc"=>$this->input->post('docente_abc')
    );
		print_r($datosColegio);
		if ($this->colegio->insertar($datosColegio)){
			redirect("colegios/indexc");
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
// funcion para eliminar colegio
	public function borrar($id_abc){
		if ($this->colegio->eliminarPorId($id_abc))
		{
			redirect("colegios/indexc");
		}
		else
		{
			echo "Error al eliminar XD";
		}
	}
	//funcion para editar colegio
	public function editar($id_abc){
		if ($this->colegio->editarPorId($id_abc))
		{
			redirect("colegios/indexc");
		}
		else
		{
			echo "Error al eliminar XD";
		}
	}

}//cierre de la clase no borrar despues estas en problemas te conozco
