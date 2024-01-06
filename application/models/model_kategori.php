<?php

class Model_kategori extends CI_Model{

    public function data_elektronik(){
        return $this->db->get_where("tb_barang",array('kategori' => 'elektronik'));
    }

    public function data_pakaian_pria(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian pria'));
    }

    public function data_pakaian_wanita(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian wanita'));
    }

    public function data_pakaian_anak_anak(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian anak-anak'));
    }

    public function data_peralatan_olahraga(){
        return $this->db->get_where("tb_barang",array('kategori' => 'peralatan olahraga'));
    }
}