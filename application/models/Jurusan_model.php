<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
    public function getJurusan()
    {
        $jurusan_id = $this->session->userdata('jurusan_id');
        $query = "SELECT `user`.*, `jurusan`.`jurusan`
                    FROM `user` JOIN `jurusan`
                      ON `user`.`jurusan_id` = `jurusan`.`id`
                      WHERE `user`.`jurusan_id` = `jurusan`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function deleteDataJurusan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jurusan');
    }
}
