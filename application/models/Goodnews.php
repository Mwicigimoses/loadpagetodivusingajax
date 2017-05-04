<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Goodnews extends CI_Model{
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->model('goodnews'); 

        }


				public function blog(){
                $this->db->order_by("no","desc");
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

         

    public function add_blog($add_blog)
            { 
                $insert = $this->db->insert('blog', $add_blog); 
        
            if ($insert){
                $arr_return = array(
                'res' => true,
                'dt' => 'Listing Type added successfully.');
                }

            else {
                $arr_return = array(
                'res' => false,
                'dt' => 'Could not add listing type successfully. Please try again.'
                );
                }
            return $arr_return;
                }
              


    public function add_sermon($add_sermon)
            { 
                $insert = $this->db->insert('sermon', $add_sermon); 
        
            if ($insert){
                $arr_return = array(
                'res' => true,
                'dt' => 'Listing Type added successfully.');
                }

            else {
                $arr_return = array(
                'res' => false,
                'dt' => 'Could not add listing type successfully. Please try again.'
                );
                }
            return $arr_return;
                }

                
    public function add_keephopealive($add_keephopealive)
            { 
                $insert = $this->db->insert('keephopealive', $add_keephopealive); 
        
            if ($insert){
                $arr_return = array(
                'res' => true,
                'dt' => 'Listing Type added successfully.');
                }

            else {
                $arr_return = array(
                'res' => false,
                'dt' => 'Could not add listing type successfully. Please try again.'
                );
                }
            return $arr_return;
                }
              }
