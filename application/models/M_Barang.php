<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barang extends CI_Model {

    public function getProduk() {
        return $this->db->get('add_barang')->result();
    }

    public function get_keyword($keyword)
    {
	    $this->db->select('*');
        $this->db->from('add_barang');
        $this->db->like('nama_barang',$keyword);
        $this->db->or_like('tipe_barang',$keyword);
        $this->db->or_like('harga_barang',$keyword);

        return $this->db->get()->result(); 
    }

    public function get_barang($limit, $start)
    {
        return $this->db->get('add_barang',$limit, $start)->result_array();
    }

    public function countAllBarang()
    {
        return $this->db->get('add_barang')->num_rows();
    }
}
