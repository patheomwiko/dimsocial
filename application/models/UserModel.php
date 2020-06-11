<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    /**
     * IDEntrepreneur,
     * name,
     * email,
     * address,
     * phone,
     * gender,
     * bio,
     * site,
     * photoUrl,
     * password,
     * state,
     */

     
    /**
     * $table_entrepreneur
     *
     * @var string
     */
    private $table_entrepreneur = 'entrepreneurs';

    /**
     * $done
     *
     * @var boolean
     */
    private $done = FALSE;


    /**
     * get()
     *
     * @return void
     */
    public function get() {
        return $this->db->get($this->table_entrepreneur); 
    }

    /**
     * get_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where($id) {
        return $this->db->where('id', $id)->get($this->table_entrepreneur);
    } 

    /**
     * get_desc()
     *
     * @return void
     */
    public function get_desc() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_entrepreneur); 
    }


    /**
     * get_where_desc($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_entrepreneur);
    }


    /**
     * count()
     *
     * @return integer
     */
    public function count() : int {
        return $this->db->count_all($this->table_entrepreneur);
    }


    /**
     * add($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add($data) : bool { 
        $arr = array($data['email']);
        if( ! $this->db->where_not_in('email', $arr) == TRUE) {
            $this->db->insert($this->table_entrepreneur, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }

    /**
     * replace($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function replace($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_entrepreneur, $data);
    }

    /**
     * update($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update($data) : bool {
        return $this->db->update($this->table_entrepreneur, $data, array('id' => $data['id']));
    }

    /**
     *  delete($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete($id) : bool {
        return $this->db->delete($this->table_entrepreneur, array('id' => $id));  
    }


}

}