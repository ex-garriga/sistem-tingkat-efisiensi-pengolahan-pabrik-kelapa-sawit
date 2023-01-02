<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Analisa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'nilai/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'nilai/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'nilai/index.html';
            $config['first_url'] = base_url() . 'nilai/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nilai_model->total_rows($q);
        $nilai = $this->Nilai_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'nilai_data' => $nilai,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'Analisa/nilai_list'
        );
        $this->load->view('layoutbackend1', $data);
    }

    public function read($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_nilai' => $row->id_nilai,
		'nama_dmu' => $row->nama_dmu,
		'jumlah_karyawan' => $row->jumlah_karyawan,
		'shiff_kerja' => $row->shiff_kerja,
		'kapasitas_produksi' => $row->kapasitas_produksi,
		'tbs_masuk' => $row->tbs_masuk,
		'produksi_cpo' => $row->produksi_cpo,
		'produksi_karnel' => $row->produksi_karnel,
        'content' => 'nilai/nilai_read'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nilai/create_action'),
	    'id_nilai' => set_value('id_nilai'),
	    'nama_dmu' => set_value('nama_dmu'),
	    'jumlah_karyawan' => set_value('jumlah_karyawan'),
	    'shiff_kerja' => set_value('shiff_kerja'),
	    'kapasitas_produksi' => set_value('kapasitas_produksi'),
	    'tbs_masuk' => set_value('tbs_masuk'),
	    'produksi_cpo' => set_value('produksi_cpo'),
	    'produksi_karnel' => set_value('produksi_karnel'),
        'content' => 'nilai/nilai_form'
	);
        $this->load->view('layoutbackend1', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_dmu' => $this->input->post('nama_dmu',TRUE),
		'jumlah_karyawan' => $this->input->post('jumlah_karyawan',TRUE),
		'shiff_kerja' => $this->input->post('shiff_kerja',TRUE),
		'kapasitas_produksi' => $this->input->post('kapasitas_produksi',TRUE),
		'tbs_masuk' => $this->input->post('tbs_masuk',TRUE),
		'produksi_cpo' => $this->input->post('produksi_cpo',TRUE),
		'produksi_karnel' => $this->input->post('produksi_karnel',TRUE),
	    );

            $this->Nilai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nilai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nilai/update_action'),
		'id_nilai' => set_value('id_nilai', $row->id_nilai),
		'nama_dmu' => set_value('nama_dmu', $row->nama_dmu),
		'jumlah_karyawan' => set_value('jumlah_karyawan', $row->jumlah_karyawan),
		'shiff_kerja' => set_value('shiff_kerja', $row->shiff_kerja),
		'kapasitas_produksi' => set_value('kapasitas_produksi', $row->kapasitas_produksi),
		'tbs_masuk' => set_value('tbs_masuk', $row->tbs_masuk),
		'produksi_cpo' => set_value('produksi_cpo', $row->produksi_cpo),
		'produksi_karnel' => set_value('produksi_karnel', $row->produksi_karnel),
        'content' => 'nilai/nilai_form'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_nilai', TRUE));
        } else {
            $data = array(
		'nama_dmu' => $this->input->post('nama_dmu',TRUE),
		'jumlah_karyawan' => $this->input->post('jumlah_karyawan',TRUE),
		'shiff_kerja' => $this->input->post('shiff_kerja',TRUE),
		'kapasitas_produksi' => $this->input->post('kapasitas_produksi',TRUE),
		'tbs_masuk' => $this->input->post('tbs_masuk',TRUE),
		'produksi_cpo' => $this->input->post('produksi_cpo',TRUE),
		'produksi_karnel' => $this->input->post('produksi_karnel',TRUE),
	    );

            $this->Nilai_model->update($this->input->post('id_nilai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nilai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Nilai_model->get_by_id($id);

        if ($row) {
            $this->Nilai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nilai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_dmu', 'nama dmu', 'trim|required');
	$this->form_validation->set_rules('jumlah_karyawan', 'jumlah karyawan', 'trim|required');
	$this->form_validation->set_rules('shiff_kerja', 'shiff kerja', 'trim|required');
	$this->form_validation->set_rules('kapasitas_produksi', 'kapasitas produksi', 'trim|required');
	$this->form_validation->set_rules('tbs_masuk', 'tbs masuk', 'trim|required');
	$this->form_validation->set_rules('produksi_cpo', 'produksi cpo', 'trim|required');
	$this->form_validation->set_rules('produksi_karnel', 'produksi karnel', 'trim|required');

	$this->form_validation->set_rules('id_nilai', 'id_nilai', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "nilai.xls";
        $judul = "nilai";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Dmu");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Karyawan");
	xlsWriteLabel($tablehead, $kolomhead++, "Shiff Kerja");
	xlsWriteLabel($tablehead, $kolomhead++, "Kapasitas Produksi");
	xlsWriteLabel($tablehead, $kolomhead++, "Tbs Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Produksi Cpo");
	xlsWriteLabel($tablehead, $kolomhead++, "Produksi Karnel");

	foreach ($this->Nilai_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_dmu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_karyawan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->shiff_kerja);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kapasitas_produksi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tbs_masuk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->produksi_cpo);
	    xlsWriteNumber($tablebody, $kolombody++, $data->produksi_karnel);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=nilai.doc");

        $data = array(
            'nilai_data' => $this->Nilai_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('nilai/nilai_doc',$data);
    }

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-20 00:08:09 */
/* http://harviacode.com */