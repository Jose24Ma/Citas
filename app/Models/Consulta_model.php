<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta_model extends Model {

    public function registrar_consulta($datos) {
        $this->db->insert('consultas', $datos);
        return $this->db->insert_id();
    }

}
