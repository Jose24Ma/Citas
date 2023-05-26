<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends Model {

    public function obtener_usuario($correo, $contrasena) {
        $this->db->where('correo', $correo);
        $this->db->where('contrasena', $contrasena);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

}
