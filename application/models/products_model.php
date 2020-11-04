<?php

class Products_model extends CI_Model
{
    public function index()
    {
        return $this->db->get('produtos')->result_array();
    }

    public function store($produto)
    {
        $this->db->insert('produtos', $produto);
    }

    public function show($id)
    {
        return $this->db->get_where('produtos', array('id' => $id))->row_array();
    }

    public function update($id, $produto){
        $this->db->where('id', $id);
        return $this->db->update('produtos', $produto);
    }

    public function destroy($id){
        $this->db->where('id', $id);
        return $this->db->delete('produtos');
    }
}
