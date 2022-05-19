<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete_model extends CI_Model
{
    public function deleteDataJurusan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jurusan');
    }

    public function deleteDataRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }

    public function deleteDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }

    public function deleteSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    public function deletuser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function deletproduct($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }

    public function resetpassuser($id)
    {
        $this->db->where('id', $id);
        $data = [
            'password'  => password_hash((123456), PASSWORD_DEFAULT)
        ];
        $this->db->update('user', $data);
    }
}
