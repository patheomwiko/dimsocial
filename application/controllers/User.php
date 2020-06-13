<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    /**
     * user_data()
     *
     * @return array
     */
    private function user_data() : array { 
        return array (
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'address' => $this->input->post('address', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'site' => $this->input->post('site', TRUE),
            'gender' => $this->input->post('gender', TRUE),
            'bio' => $this->input->post('bio', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'password' => $this->input->post('password', TRUE),
            'is_connected' => FALSE
        );
    }


    /**
     * user_login_data()
     *
     * @return array
     */
    function user_login_data() : array {
        return array (
            'email' => $this->input->post('email', TRUE),
            'password' => $this->input->post('password', TRUE)
        );
    }

 
	public function logout() {
		$this->session->unset_userdata($this->user_login_data()); 
		$this->session->sess_destroy();
        redirect(base_url().'home');
	}
    
	public function upload_image() {

        if(isset($_FILES['imageUrl']['name']))
        {

            if($_FILES['imageUrl']['name'] != '') 
            {
				$output = '';
				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'gif|png|jpg|jpeg';
				$this -> load -> library('upload', $config);
				$this -> upload -> initialize($config);
	
	
                for ($i=0; $i < count($_FILES['imageUrl']['name']); $i++) 
                { 
					$_FILES['file']['name'] = $_FILES['imageUrl']['name'][$i];
					$_FILES['file']['type'] = $_FILES['imageUrl']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['imageUrl']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['imageUrl']['error'][$i];
					$_FILES['file']['size'] = $_FILES['imageUrl']['size'][$i];
				
                    if($this -> upload -> do_upload('file')) 
                    {
						$data = $this -> upload -> data();
						$output .= '
						<div class="col-md-8">
							<img src="'.base_url().'upload/'.$data["file_name"].'" class="img-responsive img-thumbnail"/>
						</div>
						';
					}
				}
				
				echo $output;
			}
		}
	
	}


    function login() 
    {

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'xss_clean' => 'Le  %s champs contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );

        $this->form_validation->set_rules('password', 'mot de passe', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'xss_clean' => 'Le  %schamps contient des caractères inapropriés.'
            )
        );

        if($this->form_validation->run()) {
            $err = array();
            // print_r($this->user_login_data());
            $result = $this->UserModel->get_where_user($this->user_login_data());
            if( ! empty($result) ) { 
                $this->session->set_tempdata($this->cast_object_to_array($result[0]), NULL, 3000);  
                redirect(base_url() . 'home');
            } else {
                $this->load->view('login');
            }
        } else {
            // redirect(base_url() . 'home/login');
            $this->load->view('login');
        }
    }


    /**
     * cast_object_to_array($obj)
     *
     * @param [Object] $obj
     * @return array
     */
    private function cast_object_to_array($obj) : array {
        $arr = array();
        if (is_object($obj)) {
            foreach ($obj as $key => $value) {
                $arr[$key] = $value;
                // array_push($arr, $value);
            }
        } else {
            $arr = NULL;
        }
        return $arr;
    }


    function my_account() {
        $id = $this->uri->segment(3);
        $user = $this->UserModel->get_where_user($id);
        if( ! empty($user) ) {
            $this->load->view('my_account', $user);
        } else {
            echo 'Error, user not found';
        }
    }

    function sign_in() {
         
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );
        
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );
        
        $this->form_validation->set_rules('confirm', 'confirmation', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );
 
        $this->form_validation->set_rules('name', 'nom', 'required|trim|max_length[45]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('address', 'addresse', 'required|trim|max_length[255]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('gender', 'gender', 'required', 
            array(
                'required' => 'Le champs %s est obligatoire.'
            )
        );

        $this->form_validation->set_rules('bio', 'bio', 'required|trim|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );       

        $this->form_validation->set_rules('photo', 'photo', 'required|trim|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );  

        $this->form_validation->set_rules('phone', 'phone', 'required|trim|max_length[15]|min_length[10]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  %s champs contient des caractères inapropriés.'
            )
        );

        if($this->form_validation->run()) {
            $result = $this->UserModel->add_entrepreneur($this->user_data());
            if($result == TRUE) {
                echo 'Account is created !';
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Failed at form validation !';
        }

    }

}