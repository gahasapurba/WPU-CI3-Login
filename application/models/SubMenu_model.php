<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubMenu_model extends CI_Model
{
    public function deleteDataSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }
}
