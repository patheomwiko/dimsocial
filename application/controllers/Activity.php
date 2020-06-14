<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

    /**
     * activity_data()
     *
     * @return array
     */
    private function activity_data() : array 
    {
        return array
        (
            'name' => $this->input->post('name', TRUE),
            'domaine' => $this->input->post('domaine', TRUE),
            'description' => $this->input->post('description', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'date' => date("Y-m-d h:i:sa")
        );
    }


    
	public function upload_image() {

        if(isset($_FILES['imageUrl']['name']))
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $this -> load -> library('upload', $config);
            $this -> upload -> initialize($config);

            if( ! $this -> upload -> do_upload('imageUrl'))  {
                echo $this->upload->display_errors();
            } else {
                $data = $this -> upload -> data();
                echo '<img src="'.base_url().'upload/'.$data["file_name"].'" class="img-responsive img-thumbnail"/>';
            }
		}
	}

    function publish_article() {
        
    }

    function publish_activity() 
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'xss_clean' => 'Le  %schamps contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        
        if($this->form_validation->run()) 
        {
            $result = $this->activitymodel->add_activity($this->activity_data());
            if($result == TRUE) {
                echo 'Activity is added !';
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Failed at form validation !';
        }

    }


    function remove_activity() {
        $id = $this->uri->segment(4);
        $result = $this->activitymodel->delete_activity($id);
        if($result == TRUE) { 
            echo 'Activity deleted !';
        } else {
            echo 'Activity failed !';
        }
    }


    function update_activity() {
        
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
    
        if($this->form_validation->run()) 
        {
            $result = $this->activitymodel->update_activity($this->activity_data());
            if($result == TRUE) 
            {
                echo 'Activity is added !';
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Failed at form validation !';
        }
    }


    function get_activity($id) {
        $id = $this->uri->segment(4);
        $result = $this->activitymodel->get_activity_where($id);
        if( ! empty($result) ) {
            print_r($result);
        } else {
            echo 'Fail to get activity ID : ' . $id;
        }
    }

}