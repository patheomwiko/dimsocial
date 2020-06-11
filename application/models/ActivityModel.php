<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityModel extends CI_Model {

    /**
     * PROJECT
     * =======
     * 
     * IDProject,
     * IDEntrepreneur,
     * title,
     * description,
     * date,
     * view,
     * like,
     * comment
     */

    /**
     * $table_activity
     *
     * @var string
     */
    private $table_activity = 'activities';
    
    /**
     * $table_category
     *
     * @var string
     */
    private $table_category = 'categories';
    
    /**
     * $done
     *
     * @var boolean
     */
    private $done = FALSE;



    /*
    | -------------------------------------------------------------------
    | PROJECTS QUERIES
    | -------------------------------------------------------------------
    */


    /**
     * get()
     *
     * @return void
     */
    public function get_project() {
        return $this->db->get($this->table_activity); 
    }

    /**
     * get_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_project($id) {
        return $this->db->where('id', $id)->get($this->table_activity);
    } 

    /**
     * get_desc()
     *
     * @return void
     */
    public function get_desc_projects() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_activity); 
    }


    /**
     * get_where_desc($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc_projects($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_activity);
    }


    /**
     * count_projects()
     *
     * @return integer
     */
    public function count_projects() : int {
        return $this->db->count_all($this->table_activity);
    }



    /**
     * add($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add_project($data) : bool { 
        $arr = array($data['description']);
        if( ! $this->db->where_not_in('description', $arr) == TRUE) {
            $this->db->insert($this->table_activity, $data);
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
    public function replace_project($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_activity, $data);
    }

    /**
     * update($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_project($data) : bool {
        return $this->db->update($this->table_activity, $data, array('id' => $data['id']));
    }

    /**
     *  delete($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_project($id) : bool {
        return $this->db->delete($this->table_activity, array('id' => $id));  
    }


    /*
    | -------------------------------------------------------------------
    | CATEGORIES QUERIES
    | -------------------------------------------------------------------
    */

    /**
     * get_category()
     *
     * @return void
     */
    public function get_category() {
        return $this->db->get($this->table_category); 
    }

    /**
     * get_where_category($id)
     *
     * @param [int] $id
     * @return void
     */
    public function get_where_category($id) {
        return $this->db->where('id', $id)->get($this->table_category);
    } 

    /**
     * get_desc_categories()
     *
     * @return void
     */
    public function get_desc_categories() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_category); 
    }


    /**
     * count_categories()
     *
     * @return integer
     */
    public function count_categories() : int {
        return $this->db->count_all($this->table_category);
    }

    /**
     * get_category_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_category_where($id) {
        return $this->db->where('id_category', $id)->get($this->table_activity);
    }

}