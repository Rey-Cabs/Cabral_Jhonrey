<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: User_Model
 * 
 * Automatically generated via CLI.
 */
class User_Model extends Model {
    protected $table = 'adventurer';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
    public function page($q, $records_per_page = null, $page = null) {
            if (is_null($page)) {
                return $this->db->table($this->table)->where_null('deleted_at')->get_all();
            } 
            else {
                $query = $this->db->table($this->table);
                $query->where_null('deleted_at');
                
                // Build LIKE conditions
               if (!empty($q)) {
                $query->like('id', '%'.$q.'%')
                      ->or_like('Name', '%'.$q.'%')
                      ->or_like('Level', '%'.$q.'%')
                      ->or_like('Class', '%'.$q.'%');
         }
            $query->order_by('id', 'ASC');

                // Clone before pagination
                $countQuery = clone $query;

                $data['total_rows'] = $countQuery->select_count('*', 'count')->get()['count'];

                $data['records'] = $query->pagination($records_per_page, $page)->get_all();
                return $data;
            }
            
        }
        public function restore_page($q, $records_per_page = null, $page = null) {
    if (is_null($page)) {
        return $this->db->table($this->table)->where_not_null('deleted_at')->get_all();
    } else {
        $query = $this->db->table($this->table);

        $query->where_not_null('deleted_at');
        // Build LIKE conditions
        if (!empty($q)) {
            $q = trim($q);
            $query->where("(id LIKE '%".$q."%' 
                        OR `Name` LIKE '%".$q."%' 
                        OR `Level` LIKE '%".$q."%' 
                        OR `Class` LIKE '%".$q."%')");
        }
        $query->order_by('id', 'ASC');

        // Clone before pagination
        $countQuery = clone $query;
        $data['total_rows'] = $countQuery->select_count('*', 'count')->get()['count'];

        $data['records'] = $query->pagination($records_per_page, $page)->get_all();

        return $data;
    }
}

}