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
     * $table_comment
     *
     * @var string
     */
    private $table_comment = 'comments';
    
    /**
     * $done
     *
     * @var boolean
     */
    private $done = FALSE;


    /**
     * get_entrepreneur()
     *
     * @return void
     */
    public function get_entrepreneur() {
        return $this->db->get($this->table_entrepreneur); 
    }

    /**
     * get_where_entrepreneur($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_entrepreneur($id) {
        return $this->db->where('id', $id)->get($this->table_entrepreneur);
    } 

    /**
     * get_desc_entrepreneur()
     *
     * @return void
     */
    public function get_desc_entrepreneur() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_entrepreneur); 
    }


    /**
     * get_where_desc_entrepreneur($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc_entrepreneur($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_entrepreneur);
    }


    /**
     * count_entrepreneur()
     *
     * @return integer
     */
    public function count_entrepreneur() : int {
        return $this->db->count_all($this->table_entrepreneur);
    }


    /**
     * add_entrepreneur($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add_entrepreneur($data) : bool { 
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
     * replace_entrepreneur($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function replace_entrepreneur($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_entrepreneur, $data);
    }

    /**
     * update_entrepreneur($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_entrepreneur($data) : bool {
        return $this->db->update($this->table_entrepreneur, $data, array('id' => $data['id']));
    }

    /**
     *  delete_entrepreneur($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_entrepreneur($id) : bool {
        return $this->db->delete($this->table_entrepreneur, array('id' => $id));  
    }


    /*
    | -------------------------------------------------------------------
    | COMMENTS QUERIES
    | -------------------------------------------------------------------
    */


    /**
     * IDComment
     * IDUser
     * content
     * date
     * state
     */


     /**
      * get_comment()
      *
      * @return void
      */
    public function get_comment() {
        return $this->db->get($this->table_comment); 
    }

    /**
     * get_where_comment($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_comment($id) {
        return $this->db->where('id', $id)->get($this->table_comment);
    } 

    /**
     * get_desc_comment()
     *
     * @return void
     */
    public function get_desc_comment() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_comment); 
    }
    
    /**
     * update_comment($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_comment($data) : bool {
        return $this->db->update($this->table_comment, $data, array('id' => $data['id']));
    }

    /**
     *  delete_comment($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_comment($id) : bool {
        return $this->db->delete($this->table_comment, array('id' => $id));  
    }

}
 