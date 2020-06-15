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
            'domain' => $this->input->post('domain', TRUE),
            'description' => $this->input->post('description', TRUE),
            'experience' => $this->input->post('experience', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'id_user' => $this->session->id
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
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('domain', 'domaine', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('experience', 'expérience', 'required|trim');
        $this->form_validation->set_rules('imageUrl', 'imageUrl', 'required|trim');

        // $this->form_validation->set_rules('name', 'name', 'required|trim|max_length[255]|min_length[3]|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
        //         'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('category', 'categorie', 'required|trim|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('description', 'description', 'required|trim|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('experience', 'expérience', 'required|trim|numeric|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('imageUrl', 'imageUrl', 'required|trim|max_length[255]|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );
        
        if($this->form_validation->run()) 
        {
            $err = array(
                'form_none_validated' => 'Vériifez les informations saisies',
                'already_exist' => 'Le donnée existe déjà',
            );
            $result = $this->ActivityModel->add_activity($this->activity_data());
            if($result == TRUE) { 
                $this->load->view('index');
            } else {
                $this->load->view('publish_activity', $err);
            }
        } else {
            echo 'Failed at form validation !';
            $this->view_activity();
        }

    }

    function show_all_domain() {
        $domain = $this->uri->segment(3);
        $domains = $this->ActivityModel->get_all_domain_where_id($domain);
        if($domains != NULL || ! empty($domains)) {
            echo 'TRUE';
        } else {
            echo 'FALSE';
        }
    }


    /**
     * get_domain()
     *
     * @return array
     */
    function get_domain() : array {
        $id = $this->uri->segment(3);
        $data['domain'] = $this->ActivityModel->get_where_domain($id);
        return $data;
    }

    
	public function view_activity()
	{
        $data['user'] = $this->UserModel->get_user_where_id($this->session->id);
		$data['activity'] = $this->ActivityModel->get_where_activity($this->session->id);
		$data['categories'] = $this->ActivityModel->get_categories();
		$this->load->view('publish_activity', $data);
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
        
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
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