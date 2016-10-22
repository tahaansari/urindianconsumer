<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


	class Main extends CI_Controller{
		
		function __construct(){

			parent::__construct();
		}

		public function index(){
			
			$this->load->view('index');
		}

		public function login()
		{
			$this->load->view('login');
		}
		
		public function signup()
		{
			// redirect("/index");

			$this->load->view('signup');
		}

		public function wreview()
		{
			// redirect("/index");

			$this->load->view('wreview');
		}

		public function rreview()
		{
		    $data['data'] = $this->main_model->get_data();
			$this->load->view('rreview',$data);
		}

		public function get_categories(){

			$cat_id = $this->input->post('cat_id');
			$data['data'] = $this->main_model->get_categories($cat_id);
			echo json_encode($data);
		}

		public function get_make(){

			$cat_id = $this->input->post('cat_id');
			$data['data'] = $this->main_model->get_make($cat_id);
			echo json_encode($data);


		}

		public function get_model(){

			$make_id = $this->input->post('make_id');
			$data['data'] = $this->main_model->get_model($make_id);
			echo json_encode($data);

		}

		public function product()
		{
			// redirect("/index");
			$data['data'] = $this->main_model->get_reviews();
			$this->load->view('product',$data);
		}

		public function products()
		{
			$cat_id = $this->input->get('cat_id');
			$data['data'] = $this->main_model->get_products($cat_id);
			$this->load->view('products',$data);
		}

		public function get_products_bymake(){

			$make_id = $this->input->post('make_id');
			$data['data'] = $this->main_model->get_products_bymake($make_id);
			echo json_encode($data);
		}

		public function get_final_product(){

			$product_id = $this->input->post('product_id');
			$data['data'] = $this->main_model->get_final_product($product_id);
			echo json_encode($data);

		}

		public function readmore()
		{
			// redirect("/index");

			$this->load->view('readmore');
		}


		public function features()
		{
			// redirect("/index");

			$this->load->view('features');
		}


		public function pricing()
		{
			// redirect("/index");

			$this->load->view('pricing');
		}


		public function download()
		{
			// redirect("/index");

			$this->load->view('download');
		}


		public function blog()
		{
			// redirect("/index");

			$this->load->view('blog');
		}


		public function blogsingle()
		{
			// redirect("/index");

			$this->load->view('blog-single');
		}

		public function blogcategory()
		{
			// redirect("/index");

			$this->load->view('blog-category');
		}

		public function blogarchive()
		{
			// redirect("/index");

			$this->load->view('blog-archive');
		}

		public function about()
		{
			// redirect("/index");

			$this->load->view('about');
		}

		public function contact()
		{
			// redirect("/index");

			$this->load->view('contact');
		}

		


		public function reset_password(){


			$this->load->view('reset-password');

		}

		public function admin(){


			$this->load->view('admin/login');

		}

		public function success(){


		}

		public function catgory($cat_name=NULL) {
			if ($cat_name==NULL) {
				redirect('main/rreview');
				exit();
			}

			$category_products = $this->db->query("SELECT * FROM `tbl_category` WHERE `cat_name`='$cat_name'");

			// if ()

			$this->load->view('site/single-category', $data);
		}



		
		




	}



?>