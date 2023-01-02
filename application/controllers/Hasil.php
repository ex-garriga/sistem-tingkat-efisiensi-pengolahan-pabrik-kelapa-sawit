<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'hasil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'hasil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'hasil/index.html';
            $config['first_url'] = base_url() . 'hasil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Hasil_model->total_rows($q);
        $hasil = $this->Hasil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'hasil_data' => $hasil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'hasil/hasil_list'
        );
        $this->load->view('layoutbackend1', $data);
    }

    public function read($id) 
    {
        $row = $this->Hasil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_hasil' => $row->id_hasil,
		'nama_dmu' => $row->nama_dmu,
		'efisiensi' => $row->efisiensi,
		'status' => $row->status,
        'content' => 'hasil/hasil_read'
	    );
            $this->load->view('layoutbackend1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hasil/create_action'),
	    'id_hasil' => set_value('id_hasil'),
	    'nama_dmu' => set_value('nama_dmu'),
	    'efisiensi' => set_value('efisiensi'),
	    'status' => set_value('status'),
        'content' => 'hasil/hasil_form'
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
		'efisiensi' => $this->input->post('efisiensi',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Hasil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('hasil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Hasil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hasil/update_action'),
		'id_hasil' => set_value('id_hasil', $row->id_hasil),
		'nama_dmu' => set_value('nama_dmu', $row->nama_dmu),
		'efisiensi' => set_value('efisiensi', $row->efisiensi),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('hasil/hasil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_hasil', TRUE));
        } else {
            $data = array(
		'nama_dmu' => $this->input->post('nama_dmu',TRUE),
		'efisiensi' => $this->input->post('efisiensi',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Hasil_model->update($this->input->post('id_hasil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('hasil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Hasil_model->get_by_id($id);

        if ($row) {
            $this->Hasil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('hasil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_dmu', 'nama dmu', 'trim|required');
	$this->form_validation->set_rules('efisiensi', 'efisiensi', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_hasil', 'id_hasil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "hasil.xls";
        $judul = "hasil";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Efisiensi");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Hasil_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_dmu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->efisiensi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=hasil.doc");

        $data = array(
            'hasil_data' => $this->Hasil_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('hasil/hasil_doc',$data);
    }

}

/* End of file Hasil.php */
/* Location: ./application/controllers/Hasil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-20 00:30:25 */
/* http://harviacode.com */