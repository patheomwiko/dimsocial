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
            'photoUrl' => $this->input->post('photoUrl', TRUE),
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


    function start_session() { 
        $this->user_data()['is_connected'] = TRUE;
        $this->session->set_tempdata($this->user_data(), NULL, 3000);
    }



    function login() {
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );

        if($this->form_validation->run()) {
            $result = $this->usermodel->get_where_entrepreneur($this->user_login_data());
            if( ! empty($result) ) {
                print_r($result);
                $this->start_session(); 
                echo 'Done ! Is connected : ' . $this->start_session()['is_connected'];
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Failed at form validation !';
        }
    }


    function sign_in() {
         
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );        
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );        
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );
        $this->form_validation->set_rules('', '', '', 
            array(
                '' => '',
                '' => '',
                '' => '',
            )
        );        


        if($this->form_validation->run()) {
            $result = $this->usermodel->add_entrepreneur($this->user_data());
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