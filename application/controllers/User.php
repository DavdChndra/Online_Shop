<?php

class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
    }

    function user_index(){
        $this->load->model('user_model');
        // Search
		$keyword = $this->input->get('keyword');
		$datasearch = $this->user_model->search($keyword);
        // Nama Anggota
        $team=$this->user_model->tampil_data_team();
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $datasearch,
            'team'	=> $team
        );
		$this->load->view('v_user', $data);
    }
    
    function kategori(){
        $this->load->model('user_model');
        $kategori = $this->uri->segment(3);
        $datakategori = $this->user_model->SearchKategori($kategori);
        // Nama Anggota
        $team=$this->user_model->tampil_data_team();
        $data = array(
            'data'	=> $datakategori,
            'team'	=> $team
        );
		$this->load->view('v_user', $data);
    }

    function beli(){
        $data['beli']=$this->user_model->tampil_data_beli();
        $this->load->view('v_beli', $data);
    }

    function admin_index(){
        $this->load->model('user_model');
		$keyword = $this->input->get('keyword');
		$datasearch = $this->user_model->search($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $datasearch
		);
        $this->load->view('v_admin', $data);
    }

    function input(){
        $nama_produk = $this->input->post('nama_produk');
        $stok = $this->input->post('stok');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');

		//upload photo
		$config['max_size']=100000;
		$config['allowed_types']="png|jpg|jpeg|gif";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'/images';

		$this->load->library('upload');
		$this->upload->initialize($config);

		//ambil data image
		$this->upload->do_upload('images');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'images/';
		$pict=$location.$data_image;


		$data = array(
            'nama_produk' => $nama_produk,
            'stok' => $stok,
            'kategori' => $kategori,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'nama_file' => $pict
        );
		//simpan data 
		$this->user_model->simpan_data($data, 'produk');
        redirect(base_url().'index.php/user/admin_index');
            
	}

    function update(){
        $id = $this->input->post('id');
        $nama_produk = $this->input->post('nama_produk');
        $stok = $this->input->post('stok');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_produk' => $nama_produk,
            'stok' => $stok,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi
        );

        $id_data = array('id' => $id);

        $this->user_model->update_data($data, $id_data, 'produk');
        redirect(base_url()."index.php/user/admin_index");
    }

    function delete($id){
        $id_data = array('id' => $id);
        $this->user_model->delete_data($id_data, 'produk');
        redirect(base_url()."index.php/user/admin_index#TampilanProduk");
    }

    function check_out(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $stok_produk = $this->input->post('stok_produk');
        $jumlah_produk = $this->input->post('jumlah');
        $stok = $stok_produk-$jumlah_produk;
        $harga = $this->input->post('harga');
        $total_harga = $harga * $jumlah_produk;

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'jumlah' => $jumlah_produk,
            'total_harga' => $total_harga
        );
        
        //simpan data ke table beli
		$this->user_model->simpan_data_beli($data, 'beli');

        // update stok pada table produk
        $stok = array('stok' => $stok);
        $id_data_update = array('id' => $id);

        $this->user_model->update_data($stok, $id_data_update, 'produk');
        redirect(base_url()."index.php/beli");
    }
}