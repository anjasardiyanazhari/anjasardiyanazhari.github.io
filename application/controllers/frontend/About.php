<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    //Halaman Utama Dashboard
    public function index()
    {
        $data = array(
            'title'             => 'nama_web',
            'sub_title'         => 'Wedding Organizer',
            'halaman'           => 'frontend/home/v_about',
        );
        $this->load->view('frontend/layout/v_wrapper', $data);
    }
}
