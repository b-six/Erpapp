<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_baru extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('marketing/produk_baru_model');
    }

    public function index(){
        $data['produk_baru'] = $this->produk_baru_model->getProdukBaru();
        
        $this->load->view('marketing/produk_baru_v', $data);
    }

    public function tambahProduk(){
        //upload file desain
        $config = array(
            "upload_path"   => "./document/marketing/produk_baru/desain",
            "allowed_types" => 'pdf|doc|docx|ppt|pptx',
            "max_size"      => "16192",
            "encrypt_name"  => TRUE
        );
        //load library upload
        $this->load->library('upload', $config);
        // upload file
        if($this->upload->do_upload('file_desain')){
            //apabila berhasil
            $data = array('upload_data' => $this->upload->data());
            // print_r($data);
        }else{
            //apabila error
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
        }
        //ambil array upload_data dalam array data
        $upload_data = $data['upload_data'];

        // hapus tanda kutip (")
        $tampilan_barang = explode('"', $this->input->post('tampilan-produk'));
        
        //membuat id_barang
        //buat format tanggal
        $tgl = date("Ymd");
        //kueri ambil jumlah row yang sama
        $cari = $this->db->query("SELECT * FROM produk_baru WHERE id_barang LIKE '$tgl%%%'");
        //ambil jumlah row
        $hasil = $cari->num_rows();
        //generate id
        $hasil2 = $hasil+1;
        //tambah prefix '0' ke increment
        // masukkan increment ke id_barang
        $id_barang = $tgl.str_pad($hasil2, 3, '0', STR_PAD_LEFT);        

        //siapkan data
        $data = array(
            'id_barang'         => $id_barang,
            'nama'              => $this->input->post('nama'),
            'jenis'             => $this->input->post('jenis'),
            'harga'             => $this->input->post('harga'),
            'file_desain'       => $upload_data['file_name'],
            'tampilan_produk'   => $tampilan_barang[1]);

        // masukkan data ke database
        $this->produk_baru_model->saveProdukBaru($data);

        redirect('marketing/produk_baru');
    }

    public function uploadGambar(){
        $data = $this->input->post('image');

        list($type, $data) = explode(';', $data);
        list(, $data)	     = explode(',', $data);

        $data = base64_decode($data);
        $imageName = time().uniqid(rand()).'.png';
        file_put_contents('document/marketing/produk_baru/tampilan/'.$imageName, $data);
        echo json_encode($imageName);
    }

    function hapusProdukBaru(){
        $id_barang = $this->input->get('id_barang');

        $result = $this->produk_baru_model->getOneProdukBaru($id_barang);

        foreach($result as $v){
            $file_desain = $v['file_desain'];
            $tampilan_produk = $v['tampilan_produk'];
        }

        if(unlink('document/marketing/produk_baru/desain/'.$file_desain)){
            $error = array('file_desain' => 'berhasil');
        }else{
            $error = array('file_desain' => 'file_desain tidak ditemukan');
        }

        if(unlink('document/marketing/produk_baru/tampilan/'.$tampilan_produk)){
            $error = array('tampilan_produk' => 'berhasil');
        }else{
            $error = array('tampilan_produk' => 'tampilan_produk tidak ditemukan');
        }

        $this->produk_baru_model->hapusProdukBaru($id_barang);

        redirect('marketing/produk_baru');
    }
}

/* End of file Produk_baru.php */
/* Location: ./application/controllers/Produk_baru.php */