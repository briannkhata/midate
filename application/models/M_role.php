<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_role extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
		function get_roles(){
		    $this->db->order_by('role_id','DESC');
			$query = $this->db->get('tbl_roles');
			return $query->result_array();
		}

		function get_permisions(){
			//$this->db->group_by('module');
		  $this->db->order_by('order_by','ASC');
			$query = $this->db->get('tbl_permissions');
			return $query->result_array();
		}

		function get_permision_rights($role_id,$module){
		  $this->db->where('tbl_permission_roles.role_id',$role_id);
 		  $this->db->where('tbl_permissions.module',$module);
 		  $this->db->where('tbl_permissions.permission !=','_list');
 		  $this->db->where('tbl_permissions.permission !=','_edit');
 		  $this->db->where('tbl_permissions.permission !=','_delete');
 		  $this->db->where('tbl_permissions.permission !=','_view');
 		  $this->db->where('tbl_permissions.permission !=','_approve');
 		  $this->db->where('tbl_permissions.permission !=','_disburse');
 		  $this->db->where('tbl_permissions.permission !=','_pay');
		  $this->db->group_by('tbl_permission_roles.permission');
		  $this->db->order_by('tbl_permissions.order_by');
  		$this->db->join('tbl_permission_roles','tbl_permissions.permission = tbl_permission_roles.permission');
			$query = $this->db->get('tbl_permissions');
			return $query->result_array();
		}

		function get_permision_rights2($role_id,$module){
		  $this->db->where('tbl_permission_roles.role_id',$role_id);
 		  $this->db->where('tbl_permissions.module',$module);
 		  $this->db->where('tbl_permissions.permission !=','_list');
 		  $this->db->where('tbl_permissions.permission !=','_add');
		  $this->db->group_by('tbl_permission_roles.permission');
		  $this->db->order_by('tbl_permissions.order_by');
  		$this->db->join('tbl_permission_roles','tbl_permissions.permission = tbl_permission_roles.permission');
			$query = $this->db->get('tbl_permissions');
			return $query->result_array();
		}

		function get_sub_permisions($module){
		  $this->db->order_by('order_by','ASC');
 			$this->db->where('module',$module);
			$query = $this->db->get('tbl_permissions');
			return $query->result_array();
		}

		function get_sub_permisionsX($role_id,$module){
			$this->db->where('role_id',$role_id);
		  //$this->db->group_by('module','module');
			$query = $this->db->get('tbl_permission_roles');
			return $query->result_array();
		}

		function get_modules(){
		  $this->db->order_by('module_id','ASC');
			$query = $this->db->get('tbl_modules');
			return $query->result_array();
		}

		function get_sub_modulesXX($parent){
		  $this->db->order_by('order_by','ASC');
 		  $this->db->where('parent',$parent);
			$query = $this->db->get('tbl_modules');
			return $query->result_array();
		}

		function get_sub_modules($role_id,$parent){
		  $this->db->order_by('tbl_modules.order_by');
 		  $this->db->group_by('tbl_modules.module');
 		  $this->db->where('tbl_modules.parent',$parent);
 		  $this->db->where('tbl_permission_roles.role_id',$role_id);
   		$this->db->join('tbl_permission_roles','tbl_modules.module = tbl_permission_roles.module');
			$query = $this->db->get('tbl_modules');
			return $query->result_array();
		}

		
		function get_permissions0($role_id){
				$data = [];
      	$db = $this->db->select('permission_id')
        ->from('tbl_permission_roles')
        ->where('role_id',$role_id)
        ->get()->result_array();
          if(count($db) > 0)
          {
            foreach($db as $row)
            { $data[] = $row['permission_id']; }
          }
        $this->db->select('*');
        if(!empty($data))
        $this->db->where_not_in('permission_id',$data);
        $this->db->group_by('module');
        return $query = $this->db->get('tbl_permissions')->result_array();
		}


		function get_permision_roles($role_id){
			$this->db->group_by('tbl_permission_roles.permission_id');
			$this->db->group_by('tbl_permission_roles.role_id');
   		$this->db->where('tbl_permission_roles.role_id',$role_id);
   		$this->db->join('tbl_permissions','tbl_permissions.permission_id = tbl_permission_roles.permission_id');
			$query = $this->db->get('tbl_permission_roles');
			return $query->result_array();
		}

		function get_permisions_by_module($role_id,$module){
			$this->db->group_by('permission_id');
			$this->db->group_by('role_id');
   		$this->db->where('role_id',$role_id);
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_permission_roles');
			return $query->result_array();
		}

		function get_main_modules($role_id){
			$this->db->order_by('tbl_modules.module_id');
			$this->db->group_by('tbl_modules.parent');
   		$this->db->where('tbl_permission_roles.role_id',$role_id);
   		$this->db->join('tbl_modules','tbl_modules.module = tbl_permission_roles.module');
			$query = $this->db->get('tbl_permission_roles');
			return $query->result_array();
		}

		function get_permision_roles000($role_id,$module){
			//$this->db->group_by('tbl_permission_roles.module');
   		$this->db->where('tbl_permission_roles.role_id',$role_id);
   		$this->db->where('tbl_modules.module',$module);
   		$this->db->join('tbl_modules','tbl_modules.module = tbl_permission_roles.module');
			$query = $this->db->get('tbl_permission_roles');
			return $query->result_array();
		}

		function get_role_by_id($role_id){
		  $this->db->where('role_id',$role_id);
			$query = $this->db->get('tbl_roles');
			return $query->result_array();
		}

		function get_permision_role_id($role_id,$permission,$module){
   		$this->db->where('role_id',$role_id);
   		$this->db->where('permission',$permission);
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_permission_roles')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['permission_role_id'];
				}
			}else {
				return '';
			}
			
		}

		function get_module_id($module){
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_modules')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['module_id'];
				}
			}else {
				return '';
			}
			
		}

		function get_role($role_id){
   		$this->db->where('role_id',$role_id);
			$query = $this->db->get('tbl_roles')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['role'];
				}
			}else {
				return '';
			}
			
		}

		function get_permission_role($role_id){
   		    $this->db->where('role_id',$role_id);
			$query = $this->db->get('tbl_permission_roles')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['permission_id'];
				}
			}else {
				return '';
			}
			
		}

		function get_permission($permission_id){
   		    $this->db->where('permission_id',$permission_id);
			$query = $this->db->get('tbl_permissions')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['permission'];
				}
			}else {
				return '';
			}
			
		}

		function get_permission_list($role_id,$module){
	    $this->db->where('role_id',$role_id);
	    $this->db->where('module',$module);
	    $this->db->where('permission','_list');
			$query = $this->db->get('tbl_permission_roles')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['permission'];
				}
			}else {
				return '';
			}
			
		}

		function get_permission_title($permission_id){
   		$this->db->where('permission_id',$permission_id);
			$query = $this->db->get('tbl_permissions')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['title'];
				}
			}else {
				return '';
			}
			
		}

		function get_module($permission_id){
   		$this->db->where('permission_id',$permission_id);
			$query = $this->db->get('tbl_permissions')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['module'];
				}
			}else {
				return '';
			}
		}

		function get_title($module){
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_modules')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['title'];
				}
			}else {
				return '';
			}
		}

		function get_link($module){
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_modules')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['link'];
				}
			}else {
				return '';
			}
		}

		function get_icon($module){
   		$this->db->where('module',$module);
			$query = $this->db->get('tbl_modules')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['icon'];
				}
			}else {
				return '';
			}
		}

		function get_has_child($module){
   		    $this->db->where('module',$module);
			$query = $this->db->get('tbl_modules')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['has_child'];
				}
			}else {
				return '';
			}
			
		}

 
}

