<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('ciqrcode');
        $this->load->helper('url');
    }

    public function index() {
        $qr['data'] = 'http://h4nk.blogspot.com/2016/11/generate-qr-code-dengan-codeigniter.html';
        $qr['level'] = 'H';
        $qr['size'] = 2;
        $qr['savename'] = FCPATH.'assets/qr/qr.png'; // Menyimpan gambar di assets/qr
        $this->ciqrcode->generate($qr);

        $data['qr_image'] = base_url().'qr.png'; // Mengirim URL gambar ke view
        $this->load->view('barcode_view', $data); // Memuat view untuk menampilkan gambar QR
    }
}
