<?php

class Genero_model extends CI_Model {

    private $tabla;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->tabla  = 'sexo';
    }

    public function alta($data)
    {
        return $this->db->insert($this->tabla, $data);
    }

    public function obtener($id)
    {
        $this->db->select($this->tabla.'.*');
        $this->db->from($this->tabla);
        $this->db->where($this->tabla.'.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function obtener_todos()
    {
        $this->db->select($this->tabla.'.*');
        $this->db->from($this->tabla);
        $query = $this->db->get();
        return $query->result();
    }
}
