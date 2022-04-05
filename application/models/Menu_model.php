<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getJurusan()
    {
        $query = "SELECT `product`.*, `jurusan`.`jurusan`, `user`.`name`
                    FROM ((`product`
              INNER JOIN `jurusan` ON `product`.`jurusan_id` = `jurusan`.`id`)
              INNER JOIN `user` ON `product`.`user_id` = `user`.`id`)
                ORDER BY `product`.`id` DESC
        ";
        return $this->db->query($query)->result_array();
    }

    public function jmlUser()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jmlJurusan()
    {
        $query = $this->db->get('jurusan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jmlProduct()
    {
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jmlMenu()
    {
        $query = $this->db->get('user_menu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jmlSubMenu()
    {
        $query = $this->db->get('user_sub_menu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
