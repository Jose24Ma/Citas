<?php

use App\Controllers\BaseController;

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('usuario_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $this->form_validation->set_rules('correo', 'Correo Electrónico', 'required|valid_email');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $correo = $this->input->post('correo');
            $contrasena = $this->input->post('contrasena');

            $usuario = $this->usuario_model->obtener_usuario($correo, $contrasena);

            if ($usuario) {
                $data = array(
                    'usuario_id' => $usuario['id'],
                    'correo' => $usuario['correo'],
                    'nombre' => $usuario['nombre'],
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $data['error'] = 'El correo electrónico o la contraseña son incorrectos.';
                $this->load->view('login', $data);
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('usuarios');
    }

}
