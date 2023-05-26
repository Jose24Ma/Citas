<?php

use App\Controllers\BaseController;

defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('registro_consulta');
    }

    public function registrar() {
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');
        $this->form_validation->set_rules('medico', 'Médico', 'required');
        $this->form_validation->set_rules('paciente', 'Paciente', 'required');
        $this->form_validation->set_rules('sintomas', 'Síntomas', 'required');
        $this->form_validation->set_rules('recomendaciones', 'Recomendaciones', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('registro_consulta');
        } else {
            // Aquí puedes procesar los datos del formulario, como guardarlos en una base de datos
            
            // Luego, puedes mostrar un mensaje de éxito y redirigir a otra página
            $data['message'] = 'Consulta registrada exitosamente.';
            $this->load->view('registro_consulta', $data);
        }
    }

}
