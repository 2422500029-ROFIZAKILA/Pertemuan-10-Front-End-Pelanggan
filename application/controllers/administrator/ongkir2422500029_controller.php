<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ongkir2422500029_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('ongkir2422500029_model');
    }

    public function index() {
        $data['list_ongkir2422500029'] = $this->ongkir2422500029_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ongkir2422500029/index',$data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ongkir2422500029() {
        $data['title'] = 'Tambah ongkir2422500029';
        $this->form_validation->set_rules('nama_ekspedisi029', 'Nama Ekspedisi', 'required');
        $this->form_validation->set_rules('jenis_layanan029', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('tarif_per_kg029', 'Tarif PerKg', 'required|numeric');
        $this->form_validation->set_rules('status029', 'Status', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->_simpan_ongkir2422500029();
        } 
        else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ongkir2422500029/tambah_ongkir2422500029');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function _simpan_ongkir2422500029() {
        $data = [
            'nama_ekspedisi029' => $this->input->post('nama_ekspedisi029', true),
            'jenis_layanan029'  => $this->input->post('jenis_layanan029', true),
            'tarif_per_kg029'   => $this->input->post('tarif_per_kg029', true),
            'status029'         => $this->input->post('status029', true)
        ];

        $simpan = $this->ongkir2422500029_model->tambah($data);
        
        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Berhasil Tambah ongkir2422500029-!
                </div>
            </div>
            ');
        } 
        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Gagal Tambah ongkir2422500029-!
                </div>
            </div>
            ');
        }

        redirect('admin/ongkir2422500029');
    }

    public function hapus_ongkir2422500029($id) {
        $ongkir2422500029 = $this->ongkir2422500029_model->get_by_id($id);
        if ($ongkir2422500029) {
            $hapus = $this->ongkir2422500029_model->hapus($id);
                if ($hapus) {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Berhasil Hapus ongkir2422500029-!
                        </div>
                    </div>
                    ');
                } 

                else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Gagal Hapus ongkir2422500029-!
                        </div>
                    </div>
                    ');
                }
                    redirect('admin/ongkir2422500029');

        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    ongkir2422500029 Tidak Ditemukan-!
                </div>
            </div>
            ');

            redirect('admin/ongkir2422500029');
        }
    }

    public function ubah_ongkir2422500029($id) {
        $ongkir2422500029 = $this->ongkir2422500029_model->get_by_id($id);
        if ($ongkir2422500029) {
            $this->form_validation->set_rules('nama_ongkir2422500029', 'Nama ongkir2422500029', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $this->_ubah_ongkir2422500029($id);
                } 

                else {
                    $data['title'] = 'Ubah ongkir2422500029';
                    $data['ongkir2422500029'] = $ongkir2422500029;
                    $this->load->view('administrator/templates/header', $data);
                    $this->load->view('administrator/templates/sidebar');
                    $this->load->view('administrator/ongkir2422500029/ubah_ongkir2422500029', $data);
                    $this->load->view('administrator/templates/footer');
                }
        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    ongkir2422500029 Tidak Ditemukan-!
                </div>
            </div>
            ');
            redirect('admin/ongkir2422500029');
        }
    }

    private function _ubah_ongkir2422500029($id) {
        $data = [
            'nama' => $this->input->post('nama_ongkir2422500029'),
            'deskripsi' => $this->input->post('deskripsi_ongkir2422500029')
        ];

        $ubah = $this->ongkir2422500029_model->ubah($id, $data); 
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Ubah ongkir2422500029-!
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal Ubah ongkir2422500029!
            </div>
            ');
        }

        redirect('admin/ongkir2422500029');
    }
}

