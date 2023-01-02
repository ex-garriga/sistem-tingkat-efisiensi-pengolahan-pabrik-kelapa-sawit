<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_dmu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_dmu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_dmu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_dmu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_dmu/index.html';
            $config['first_url'] = base_url() . 'data_dmu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_dmu_model->total_rows($q);
        $data_dmu = $this->Data_dmu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_dmu_data' => $data_dmu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'data_dmu/data_dmu_list'
        );
        $this->load->view('layoutbackend1', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_dmu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_dmu' => $row->id_dmu,
		'nama_dmu' => $row->nama_dmu,
		'jenis_pabrik' => $row->jenis_pabrik,
		'alamat' => $row->alamat,
        'content' => 'data_dmu/data_dmu_read'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_dmu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_dmu/create_action'),
	    'id_dmu' => set_value('id_dmu'),
	    'nama_dmu' => set_value('nama_dmu'),
	    'jenis_pabrik' => set_value('jenis_pabrik'),
	    'alamat' => set_value('alamat'),
        'content' => 'data_dmu/data_dmu_form'
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
		'jenis_pabrik' => $this->input->post('jenis_pabrik',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Data_dmu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_dmu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_dmu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_dmu/update_action'),
		'id_dmu' => set_value('id_dmu', $row->id_dmu),
		'nama_dmu' => set_value('nama_dmu', $row->nama_dmu),
		'jenis_pabrik' => set_value('jenis_pabrik', $row->jenis_pabrik),
		'alamat' => set_value('alamat', $row->alamat),
        'content' => 'data_dmu/data_dmu_form'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_dmu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_dmu', TRUE));
        } else {
            $data = array(
		'nama_dmu' => $this->input->post('nama_dmu',TRUE),
		'jenis_pabrik' => $this->input->post('jenis_pabrik',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Data_dmu_model->update($this->input->post('id_dmu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_dmu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_dmu_model->get_by_id($id);

        if ($row) {
            $this->Data_dmu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_dmu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_dmu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_dmu', 'nama dmu', 'trim|required');
	$this->form_validation->set_rules('jenis_pabrik', 'jenis pabrik', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

	$this->form_validation->set_rules('id_dmu', 'id_dmu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_dmu.xls";
        $judul = "data_dmu";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Pabrik");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");

	foreach ($this->Data_dmu_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_dmu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_pabrik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=data_dmu.doc");

        $data = array(
            'data_dmu_data' => $this->Data_dmu_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('data_dmu/data_dmu_doc',$data);
    }

}

/* End of file Data_dmu.php */
/* Location: ./application/controllers/Data_dmu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-19 23:48:20 */
/* http://harviacode.com */