<?php
class User_model extends CI_Model{

    function tampil_data(){
		$this->db->select('*');
		$this->db->from('produk');
		return $this->db->get()->result_array();
	}

    function simpan_data($data, $table){
        $this->db->insert($table, $data);
    }

    function edit_data($id_data, $table){
        return $this->db->get_where($table, $id_data);
    }
    
    function update_data($data, $id_data, $table){
        $this->db->where($id_data);
        $this->db->update($table, $data);
    }

    function delete_data($id_data, $table){
        $this->db->where($id_data);
        $this->db->delete($table);
    }

    function search($keyword=null){
		$this->db->select('*');
		$this->db->from('produk');
		if(!empty($keyword)){
			$this->db->like('nama_produk',$keyword);
		}
		return $this->db->get()->result_array();
	}

    function SearchKategori($kategori){
        $this->db->select('*');
		$this->db->from('produk');
        $this->db->like('kategori',$kategori);
        return $this->db->get()->result_array();
    }

    function simpan_data_beli($data, $table){
        $this->db->insert($table, $data);
    }
    
    function tampil_data_beli(){
        $sql = "SELECT * FROM beli ORDER BY id_beli DESC LIMIT 1";
		return $this->db->query($sql)->result_array();
	}

    function update_data_beli($stok, $id_data_update, $table){
        $this->db->where($id_data_update);
        $this->db->update($table, $stok);
    }

    function tampil_data_team(){
        $this->db->select('*');
		$this->db->from('team');
		return $this->db->get()->result_array();
    }
}