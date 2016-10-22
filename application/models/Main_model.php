<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data()
        {
                $this->db->select('*');
                $this->db->limit('12');
                $query = $this->db->get('tbl_category');
                return $query->result();
        }

        public function get_categories($cat_id){

                // SELECT tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model FROM tbl_category join tbl_make on tbl_category.cat_id=tbl_make.cat_id JOIN tbl_product on tbl_product.make_id=tbl_make.make_id where tbl_category.cat_id=1

                // $this->db->select('tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model,tbl_product.pro_img');
                // $this->db->from('tbl_category');
                // $this->db->join('tbl_make','tbl_category.cat_id=tbl_make.cat_id');
                // $this->db->join('tbl_product','tbl_product.make_id=tbl_make.make_id');
                // $this->db->where('tbl_category.cat_id',$cat_id);
                // $query = $this->db->get();

                // return $query->result();

                $this->db->select('*');
                $this->db->where('cat_id',$cat_id);
                $query = $this->db->get('tbl_category');

                return $query->result();

        }

        public function get_make($cat_id){

                $this->db->select('make_id,make_name');
                $this->db->where('cat_id',$cat_id);
                $query = $this->db->get('tbl_make');

                return $query->result();

        }

        public function get_model($make_id){

                $this->db->select('pro_id,pro_model');
                $this->db->where('make_id',$make_id);
                $query = $this->db->get('tbl_product');

                return $query->result();
        }

        public function get_products($cat_id){

                // $cat_id
                // SELECT tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model FROM tbl_category join tbl_make on tbl_category.cat_id=tbl_make.cat_id JOIN tbl_product on tbl_product.make_id=tbl_make.make_id where tbl_category.cat_id=1

                $this->db->select('tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model,tbl_product.pro_img');
                $this->db->from('tbl_category');
                $this->db->join('tbl_make','tbl_category.cat_id=tbl_make.cat_id');
                $this->db->join('tbl_product','tbl_product.make_id=tbl_make.make_id');
                $this->db->where('tbl_category.cat_id',$cat_id);
                $this->db->limit('8');

                $query = $this->db->get();
                // return $query->result();

                $this->db->select('make_id,make_name');
                $this->db->from('tbl_make');
                $this->db->where('cat_id',$cat_id);

                $make = $this->db->get();

                $arr['make'] = $make->result();
                $arr['products'] = $query->result();
                
                return $arr;

        }


        public function get_products_bymake($make_id){
                
                $this->db->select('tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model,tbl_product.pro_img');
                $this->db->from('tbl_category');
                $this->db->join('tbl_make','tbl_category.cat_id=tbl_make.cat_id');
                $this->db->join('tbl_product','tbl_product.make_id=tbl_make.make_id');
                $this->db->where('tbl_product.make_id',$make_id);
                $this->db->limit('8');

                $query = $this->db->get();
                return $query->result();

        }


        public function get_final_product($product_id){
                
                $this->db->select('tbl_category.cat_name,tbl_make.make_name,tbl_product.pro_model,tbl_product.pro_img');
                $this->db->from('tbl_category');
                $this->db->join('tbl_make','tbl_category.cat_id=tbl_make.cat_id');
                $this->db->join('tbl_product','tbl_product.make_id=tbl_make.make_id');
                $this->db->where('tbl_product.pro_id',$product_id);
                $this->db->limit('8');

                $query = $this->db->get();
                return $query->result();

        }

        

        public function get_reviews(){

                $this->db->select('*');
                $query = $this->db->get('tbl_review');
                return $query->result();

        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}