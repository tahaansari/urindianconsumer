<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->ion_auth->logged_in()){
			redirect('adminauth/login');
		}else if(!$this->ion_auth->is_admin()){
			redirect('adminauth/login');
		}
	}
	public function index(){
		// echo CI_VERSION;
		$this->load->view('admin/dashboard');
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin/users.php',$output);
	}

	public function category()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('tbl_category');
		$crud->set_subject('Category');
		$crud->display_as('cat_name','Category Name');
		$crud->display_as('cat_img','Image');
		$crud->required_fields('cat_name,cat_img');

		$crud->set_field_upload('cat_img','assets/uploads/cat_img');

		// $crud->callback_after_upload(array($this,'example_callback_after_upload'));

		$output = $crud->render();
		$this->_example_output($output);
	}

	// public function example_callback_after_upload($uploader_response,$field_info, $files_to_upload)
	// {
	// 	$data = array('cat_img'=>$uploader_response[0]->name);
	// 	$this->db->insert('tbl_category',$data);
	// 	return true;
	// }

	public function product()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('tbl_product');
		$crud->set_subject('Product');
		$crud->display_as('pro_category','Category');
		$crud->display_as('pro_make','Make');
		$crud->display_as('pro_model','Model');
		$crud->display_as('cat_img','Image');

		$crud->required_fields('pro_category','pro_make','pro_model','pro_img');

		$crud->set_field_upload('pro_img','assets/uploads/pro_img');

		$output = $crud->render();

		$this->_example_output($output);
	}


	public function make()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('tbl_make');
		$crud->set_subject('Make');
		$crud->display_as('make_name','Make Name');
		$crud->required_fields('make_name');
		$output = $crud->render();
		$this->_example_output($output);
	}

	

	public function review()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_theme('datatables');
		$crud->set_table('tbl_review');
		$crud->set_subject('Review');

		// $crud->columns('rev_title','rev_description','rev_status');
		// $crud->fields('rev_title','rev_description','rev_status');

		$crud->add_action('Approve', '', 'admin/approve','ui-icon-plus');
		$crud->add_action('Disapprove', '', 'admin/disapprove','ui-icon-plus');


		$crud->display_as('rev_title','Title');
		$crud->display_as('rev_description','Description');

		$crud->required_fields('rev_title','rev_description');

		$output = $crud->render();

		$this->_example_output($output);
	}


	public function approve($id){

		echo "approved id is = "+$id;

	}

	public function disapprove($id){

		echo "disapprove id is = "+$id;	

	}

	public function comment()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_theme('datatables');
		$crud->set_table('tbl_comment');
		$crud->set_subject('Comment');

		$crud->columns('com_description');
		$crud->fields('com_description');

		$crud->required_fields('com_description');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function image()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('tbl_images');
		$crud->set_subject('Image');

		$crud->columns('img_name');
		$crud->fields('img_name');

		$crud->required_fields('img_name');

		$output = $crud->render();

		$this->_example_output($output);
	}



	
}

