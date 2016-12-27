<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model2');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('users2/users_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Users_model2->json();
    }

    public function read($id) 
    {
        $row = $this->Users_model2->get_by_id($id);
        if ($row) {
            $data = array(
		'user_id' => $row->user_id,
		'Name' => $row->Name,
		'Nickname' => $row->Nickname,
		'Email' => $row->Email,
		'Phone_number' => $row->Phone_number,
		'Home_address' => $row->Home_address,
		'Gender' => $row->Gender,
		'Comments' => $row->Comments,
	    );
            $this->load->view('users2/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users2'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('users2/create_action'),
	    'user_id' => set_value('user_id'),
	    'Name' => set_value('Name'),
	    'Nickname' => set_value('Nickname'),
	    'Email' => set_value('Email'),
	    'Phone_number' => set_value('Phone_number'),
	    'Home_address' => set_value('Home_address'),
	    'Gender' => set_value('Gender'),
	    'Comments' => set_value('Comments'),
	);
        $this->load->view('users2/users_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Name' => $this->input->post('Name',TRUE),
		'Nickname' => $this->input->post('Nickname',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Phone_number' => $this->input->post('Phone_number',TRUE),
		'Home_address' => $this->input->post('Home_address',TRUE),
		'Gender' => $this->input->post('Gender',TRUE),
		'Comments' => $this->input->post('Comments',TRUE),
	    );

            $this->Users_model2->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users2'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Users_model2->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users2/update_action'),
		'user_id' => set_value('user_id', $row->user_id),
		'Name' => set_value('Name', $row->Name),
		'Nickname' => set_value('Nickname', $row->Nickname),
		'Email' => set_value('Email', $row->Email),
		'Phone_number' => set_value('Phone_number', $row->Phone_number),
		'Home_address' => set_value('Home_address', $row->Home_address),
		'Gender' => set_value('Gender', $row->Gender),
		'Comments' => set_value('Comments', $row->Comments),
	    );
            $this->load->view('users2/users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users2'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('user_id', TRUE));
        } else {
            $data = array(
		'Name' => $this->input->post('Name',TRUE),
		'Nickname' => $this->input->post('Nickname',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Phone_number' => $this->input->post('Phone_number',TRUE),
		'Home_address' => $this->input->post('Home_address',TRUE),
		'Gender' => $this->input->post('Gender',TRUE),
		'Comments' => $this->input->post('Comments',TRUE),
	    );

            $this->Users_model2->update($this->input->post('user_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users2'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Users_model2->get_by_id($id);

        if ($row) {
            $this->Users_model2->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users2'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users2'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Name', 'name', 'trim|required');
	$this->form_validation->set_rules('Nickname', 'nickname', 'trim|required');
	$this->form_validation->set_rules('Email', 'email', 'trim|required');
	$this->form_validation->set_rules('Phone_number', 'phone number', 'trim|required');
	$this->form_validation->set_rules('Home_address', 'home address', 'trim|required');
	$this->form_validation->set_rules('Gender', 'gender', 'trim|required');
	$this->form_validation->set_rules('Comments', 'comments', 'trim|required');

	$this->form_validation->set_rules('user_id', 'user_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Users2.php */
/* Location: ./application/controllers/Users2.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-12-21 13:19:49 */
/* http://harviacode.com */