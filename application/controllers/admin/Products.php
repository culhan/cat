<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

	/**
	 * [__construct description]
	 */
    public function __construct()
    {
        parent::__construct();

        $this->key_control = 'products';
        $this->data['link'] = $this->key_control; 

        $this->lang->load('admin/global');

        /* Title Page :: Common */
        $this->page_title->push(lang('menu_'.$this->key_control));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_'.$this->key_control), 'admin/'.$this->key_control);

        $this->load->helper("url");
        $this->load->library("pagination");
    }

    /**
     * [index description]
     * @return [type] [description]
     */
	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {

            $config = array();
	        $config["base_url"] = base_url( 'admin/'.$this->key_control.'/index' );
	        $config["total_rows"] = count($this->ion_auth->allData($this->key_control)->result());
	        $config["per_page"] = 5;
	        $config["uri_segment"] = 4;

	        //config for bootstrap pagination class integration
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	        $this->data["links"] = $this->pagination->create_links();

            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            $this->ion_auth->limit($config["per_page"]);
			$this->ion_auth->offset($page);
            $this->data['data'] = $this->ion_auth
            							->selectData('products.id as id, products.name as name, id_categories, categories.name as categories_name')
            							->leftJoin( $this->key_control, 'id_categories', 'categories', 'id' )
            							->allData( $this->key_control )
            							->result();
            /* Load Template */
            $this->template->admin_render('admin/'.$this->key_control.'/index', $this->data);
        }
    }

    /**
     * [create description]
     * @return [type] [description]
     */
	public function create()
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
		{
			redirect('auth', 'refresh');
		}
		
        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_'.$this->key_control.'_create'), 'admin/'.$this->key_control.'/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('name', 'lang:name', 'required|alpha_dash');		

		if ($this->form_validation->run() == TRUE)
		{
			if( !$this->upload() )
			{					
		        return $this->rander_view( (array) $data );
			}

			$id = $this->ion_auth->createData( $this->input->post()+['file'=>$this->data['upload_data']['file_name']], $this->key_control );
			
			if ( $id )
			{
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('admin/'.$this->key_control, 'refresh');
			}
		}
		else
		{
            $this->rander_view();
		}
	}

	/**
	 * [delete description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ( ! $this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        elseif ( ! $this->ion_auth->is_admin())
		{
            return show_error('You must be an administrator to view this page.');
        }
        else
        {
        	$data = $this->ion_auth->getData( $id, $this->key_control )->row();
        	$fileOld = './upload/'.$data->file;
        	if ( file_exists($fileOld) && !empty($data->file) ) {
				unlink($fileOld);
			}
        	$this->ion_auth->deleteData( $id, $this->key_control );
            redirect('admin/'.$this->key_control);
        }
	}

	/**
	 * [edit description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function edit($id)
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin() OR ! $id OR empty($id))
		{
			redirect('auth', 'refresh');
		}

        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_'.$this->key_control.'_edit'), 'admin/'.$this->key_control.'/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('name', 'lang:name', 'required|alpha_dash');

		$data = $this->ion_auth->getData( $id, $this->key_control )->row();
		
		if (isset($_POST) && ! empty($_POST))
		{
			if ($this->form_validation->run() == TRUE)
			{
				
				$dataUpdate = $this->input->post();

				if( $this->fileUploaded() )
				{
					if( !$this->upload() )
					{					
				        return $this->rander_view( (array) $data );
					}

					if( isset($this->data['upload_data']) )
					{	
						$fileOld = './upload/'.$data->file;
						if ( file_exists($fileOld) && !empty($data->file) ) {
							unlink($fileOld);
						}

						$dataUpdate += ['file'=>$this->data['upload_data']['file_name']];
					}
				}

				$update = $this->ion_auth->updateData($id, $dataUpdate, $this->key_control );

				if ($update)
				{
					$this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));          
				}
				else
				{
					$this->session->set_flashdata('message', $this->ion_auth->errors());
				}

				redirect('admin/'.$this->key_control, 'refresh');
			}
		}

        $this->rander_view( (array) $data );
	}

	/**
	 * [rander_view description]
	 * @param  array  $data [description]
	 * @return [type]       [description]
	 */
	public function rander_view( array $data = array() )
	{
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		$this->data['name'] = array(
			'name'  => 'name',
			'id'    => 'name',
			'type'  => 'text',
            'class' => 'form-control',
			'value' => $this->form_validation->set_value('name', isset($data['name']) ? $data['name'] : '' )
		);

		$this->data['data'] = $data;

        $this->data['categories'] = $this->ion_auth->allData('categories')->result();

        /* Load Template */
        $this->template->admin_render('admin/'.$this->key_control.'/form', $this->data);
	}

	public function upload()
	{
		/* Conf */
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 9048;
        $config['file_ext_tolower'] = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picture'))
        {
            /* Data */
            $this->data['error'] = $this->upload->display_errors();

            return false;
        }
        else
        {
            /* Data */
            $this->data['upload_data'] = $this->upload->data();

            return true;
        }

	}

	public function fileUploaded($formField = 'picture')
	{
	    if(empty($_FILES)) {
	        return false;       
	    } 
	    $file = $_FILES[$formField];
	    if(!file_exists($file['tmp_name']) || !is_uploaded_file($file['tmp_name'])){
	        return false;
	    }   
	    return true;
	}
}
