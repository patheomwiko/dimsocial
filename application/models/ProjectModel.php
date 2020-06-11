<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectModel extends CI_Model {

    /**
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
     * $table
     *
     * @var string
     */
    private $table = 'projects';

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
        return $this->db->get($this->table); 
    }

    /**
     * get_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where($id) {
        return $this->db->where('id', $id)->get($this->table);
    } 

    /**
     * get_desc()
     *
     * @return void
     */
    public function get_desc() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table); 
    }


    /**
     * get_where_desc($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table);
    }


    /**
     * count()
     *
     * @return integer
     */
    public function count() : int {
        return $this->db->count_all($this->table);
    }

    /**
     * get_category_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_category_where($id) {
        return $this->db->where('id_category', $id)->get($this->table);
    }


    /**
     * add($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add($data) : bool { 
        $arr = array($data['description']);
        if( ! $this->db->where_not_in('description', $arr) == TRUE) {
            $this->db->insert($this->table, $data);
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
        return $this->db->replace($this->table, $data);
    }

    /**
     * update($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update($data) : bool {
        return $this->db->update($this->table, $data, array('id' => $data['id']));
    }

    /**
     *  delete($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete($id) : bool {
        return $this->db->delete($this->table, array('id' => $id));  
    }


}