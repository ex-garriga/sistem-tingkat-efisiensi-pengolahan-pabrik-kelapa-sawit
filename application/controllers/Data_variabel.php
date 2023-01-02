<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_variabel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_variabel_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_variabel/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_variabel/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_variabel/index.html';
            $config['first_url'] = base_url() . 'data_variabel/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_variabel_model->total_rows($q);
        $data_variabel = $this->Data_variabel_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_variabel_data' => $data_variabel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'data_variabel/data_variabel_list'
        );
        $this->load->view('layoutbackend1', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_variabel_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kode_variabel' => $row->kode_variabel,
		'tipe_variabel' => $row->tipe_variabel,
		'nama_variabel' => $row->nama_variabel,
        'content' => 'data_variabel/data_variabel_read'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_variabel'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_variabel/create_action'),
	    'id' => set_value('id'),
	    'kode_variabel' => set_value('kode_variabel'),
	    'tipe_variabel' => set_value('tipe_variabel'),
	    'nama_variabel' => set_value('nama_variabel'),
        'content' => 'data_variabel/data_variabel_form'        
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
		'kode_variabel' => $this->input->post('kode_variabel',TRUE),
		'tipe_variabel' => $this->input->post('tipe_variabel',TRUE),
		'nama_variabel' => $this->input->post('nama_variabel',TRUE),
	    );

            $this->Data_variabel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_variabel'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_variabel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_variabel/update_action'),
		'id' => set_value('id', $row->id),
		'kode_variabel' => set_value('kode_variabel', $row->kode_variabel),
		'tipe_variabel' => set_value('tipe_variabel', $row->tipe_variabel),
		'nama_variabel' => set_value('nama_variabel', $row->nama_variabel),
        'content' => 'data_variabel/data_variabel_form'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_variabel'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kode_variabel' => $this->input->post('kode_variabel',TRUE),
		'tipe_variabel' => $this->input->post('tipe_variabel',TRUE),
		'nama_variabel' => $this->input->post('nama_variabel',TRUE),
	    );

            $this->Data_variabel_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_variabel'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_variabel_model->get_by_id($id);

        if ($row) {
            $this->Data_variabel_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_variabel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_variabel'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_variabel', 'kode variabel', 'trim|required');
	$this->form_validation->set_rules('tipe_variabel', 'tipe variabel', 'trim|required');
	$this->form_validation->set_rules('nama_variabel', 'nama variabel', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_variabel.xls";
        $judul = "data_variabel";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Variabel");
	xlsWriteLabel($tablehead, $kolomhead++, "Tipe Variabel");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Variabel");

	foreach ($this->Data_variabel_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_variabel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tipe_variabel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_variabel);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=data_variabel.doc");

        $data = array(
            'data_variabel_data' => $this->Data_variabel_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('data_variabel/data_variabel_doc',$data);
    }

}

/* End of file Data_variabel.php */
/* Location: ./application/controllers/Data_variabel.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-19 23:22:44 */
/* http://harviacode.com */