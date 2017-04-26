<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Goodnews extends CI_Model{
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->model('goodnews'); 

        }


				public function blog(){
                $this->db->order_by("no","ascd");
                $query = $this->db->get('blog', 10);
                return $query->result();
           								
           }
                public function keephopealive(){
                $this->db->order_by("no","ascd");
                $query = $this->db->get('keephopealive', 30);
                return $query->result();
            }
             public function sermon(){        
                $this->db->order_by("no","asced");
                $query = $this->db->get('sermon', 10);
                return $query->result();
            }


            public function sermon_count(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('sermon', 1);
                return $query->result();
            }
            public function blog_count(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('blog', 1);
                return $query->result();
            }
            public function keephopealive_count(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('keephopealive', 1);
                return $query->result();
            }

            //Inserting data into the database.
            public function insert_blog($data){
                $insert = $this->db->insert('blog', $data);
                if($insert){
                    $arr_return = array(
                        'res'=>true,
                        'dt'=>'Blog article added succesifully.' 

                        );
                }
                else{
                    $arr_return=array(
                         'res'=>false,
                         'dt'=>'The blog article was not added succesifuly. Please try again.'   


                    );
                }
                return $arr_return;
            }


             public function insert_sermon($data){
                $insert = $this->db->insert('sermon', $data);
                if($insert){
                    $arr_return = array(
                        'res'=>true,
                        'dt'=>'Sermon article added succesifully.' 

                        );
                }
                else{
                    $arr_return=array(
                         'res'=>false,
                         'dt'=>'The Sermon article was not added succesifuly. Please try again.'   


                    );
                }
                return $arr_return;
            }


             public function insert_keephopealive($data){
                $insert = $this->db->insert('keephopealive', $data);
                if($insert){
                    $arr_return = array(
                        'res'=>true,
                        'dt'=>'Keep Hope Alive article added succesifully.' 

                        );
                }
                else{
                    $arr_return=array(
                         'res'=>false,
                         'dt'=>'The Keep Hope Alive article was not added succesifuly. Please try again.'   


                    );
                }
                return $arr_return;
            }


}