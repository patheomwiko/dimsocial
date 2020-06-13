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
     * $table_user
     *
     * @var string
     */
    private $table_user = 'users';

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
     * get_user()
     *
     * @return void
     */
    public function get_user() {
        return $this->db->get($this->table_user); 
    }

    /**
     *  get_where_user
     *
     * @param [type] $data
     * @return void
     */
    public function get_where_user($data) {
        return $this->db->where($data)->get($this->table_user)->result();
    } 

    /**
     * get_where_user_id($id)
     *
     * @param [type] $id
     * @return void
     */
    public function get_where_user_id($id) {
        return $this->db->where('id', $id)->get($this->table_user)->result();
    } 

    /**
     * get_desc_user()
     *
     * @return void
     */
    public function get_desc_user() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_user); 
    }


    /**
     * get_where_desc_user($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc_user($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_user);
    }


    /**
     * count_user()
     *
     * @return integer
     */
    public function count_user() : int {
        return $this->db->count_all($this->table_user);
    }


    /**
     * add_user($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add_user($data) : bool { 
        $arr = array($data['email']);
        if( ! $this->db->where_not_in('email', $arr) == TRUE) {
            $this->db->insert($this->table_user, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }

    /**
     * replace_user($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function replace_user($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_user, $data);
    }

    /**
     * update_user($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_user($data) : bool {
        return $this->db->update($this->table_user, $data, array('id' => $data['id']));
    }

    /**
     *  delete_user($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_user($id) : bool {
        return $this->db->delete($this->table_user, array('id' => $id));  
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
 