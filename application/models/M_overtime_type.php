<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_overtime_type extends CI_Model {
	
		function get_overtime_types(){
			$this->db->where('deleted',0);
			$query = $this->db->get('overtime_types');
			return $query->result_array();
		}

		function get_total_basic_salary_per_month($month,$year){
			$this->db->select_sum('basic_salary');
			$this->db->from('salaries');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_overtime_per_month($month,$year){
			$this->db->select_sum('total_overtime');
			$this->db->from('salaries');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_arrears_per_month($month,$year){
			$this->db->select_sum('amount');
			$this->db->from('arrears');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_bonus_per_month($month,$year){
			$this->db->select_sum('amount');
			$this->db->from('bonus');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_pension_company_per_month($month,$year){
			$this->db->select_sum('pension_company');
			$this->db->from('salaries');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_group_life_per_month($month,$year){
			$this->db->select_sum('gla');
			$this->db->from('salaries');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}
		
		function get_total_broker_per_month($month,$year){
			$this->db->select_sum('broker');
			$this->db->from('salaries');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get();
		}

		function get_total_dependants_bill_per_month($month,$year){
			$this->db->select_sum('d_amount');
			$this->db->from('dependants');
			$this->db->join('employees','employees.employee_id = dependants.employee_id');
			$this->db->join('salaries','employees.employee_id = salaries.employee_id');
			$this->db->where('deduct',1);
			$this->db->where('salaries.month',$month);
			$this->db->where('salaries.year',$year);
			return $query = $this->db->get();
		}



		function get_total_offload_charge_per_month_per_depot($month,$year,$depot_id){
			$this->db->select_sum('charge');
			$this->db->from('offloads');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			$this->db->where('depot_id',$depot_id);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}

		function get_total_dependants_bill($employee_id){
			$this->db->select_sum('d_amount');
			$this->db->from('dependants');
			$this->db->where('employee_id',$employee_id);
			$this->db->where('deduct',1);
			return $query = $this->db->get();
		}

		function get_total_scheme_charge(){
			$this->db->select_sum('charge');
			$this->db->from('employees');
		$this->db->join('membership_types','employees.membership_type_id = membership_types.membership_type_id');
			$this->db->where('membership_types.deleted',0);
			$this->db->where('employees.active',1);
			return $query = $this->db->get();
		}

		function get_total_scheme_charge_by_id(){
			$this->db->select_sum('charge');
			$this->db->from('employees');
		$this->db->join('membership_types','employees.membership_type_id = membership_types.membership_type_id');
			$this->db->where('membership_types.deleted',0);
			$this->db->where('employees.active',1);
			return $query = $this->db->get();
		}


		function get_active_loan_status($employee_id){
			$bonus =	$this->db->get_where('loans',
				array(
					'loan_amount >='=>'loan_balance',
					'deleted'=>0,
					'employee_id'=>$employee_id))->result_array();	
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$loan_rate	=	$row['loan_rate'];
				}
				return $loan_rate;

			}
			else
			{

				return 0;
			}
		}


		function get_staff_bonus_by_month($month,$year,$employee_id){
			$bonus =	$this->db->get_where('bonus',
				array(
					'month'=>$month,
					'year'=>$year,
					'employee_id'=>$employee_id))->result_array();	
			
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$amount	=	$row['amount'];
				}
				return $amount;

			}
			else
			{

				return 0;
			}
		}

		function get_staff_name($employee_id){
			$bonus =	$this->db->get_where('employees',
				array(
				
					'employee_id'=>$employee_id))->result_array();	
			
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$name	=	$row['name'];
				}
				return $name;

			}
			else
			{

				return '';
			}
		}

		function get_staff_arrears_by_month($month,$year,$employee_id){
			$bonus =	$this->db->get_where('arrears',
				array(
					'month'=>$month,
					'year'=>$year,
					'employee_id'=>$employee_id))->result_array();	
			
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$amount	=	$row['amount'];
				}
				return $amount;

			}
			else
			{

				return 0;
			}
		}

		function get_staff_member_type_id($employee_id){
			$bonus =	$this->db->get_where('employees',array('employee_id'=>$employee_id))->result_array();	
			
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$membership_type_id	=	$row['membership_type_id'];
				}
				return $membership_type_id;

			}
			else
			{

				return '';
			}
		}


		function get_membership_charge($membership_type_id){
			$bonus =	$this->db->get_where('membership_types',array('membership_type_id'=>$membership_type_id))->result_array();	
			
			if($bonus)
			{	
				foreach($bonus as $row)
				{
					$charge	=	$row['charge'];
				}
				return $charge;

			}
			else
			{

				return 0;
			}
		}



		
		function get_overtime_hours_by_month($month,$year,$employee_id,$overtime_type_id){
			$overtimes =	$this->db->get_where('overtime',array('month'=>$month,'year'=>$year,'employee_id'=>$employee_id,'overtime_type_id'=>$overtime_type_id))->result_array();	
			
			if($overtimes)
			{	
				foreach($overtimes as $row)
				{
					$hours	=	$row['hours'];
				}
				return $hours;

			}
			else
			{

				return 0;
			}
		}
		
		function get_logged_in_username($user_id){
			$user =	$this->db->get_where('users',array('user_id'=>$user_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$name	=	$row['name'];
				}
				return $name;

			}
			else
			{

				return '';
			}
		}
		
		function get_employee_name($employee_id){
			$user =	$this->db->get_where('employees',array('employee_id'=>$employee_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$name	=	$row['name'];
				}
				return $name;

			}
			else
			{

				return '';
			}
		}
		
		function get_depot_name($depot_id){
			$user =	$this->db->get_where('depot',array('depot_id'=>$depot_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$depot	=	$row['depot'];
				}
				return $depot;

			}
			else
			{

				return '';
			}
		}
		
		function get_depot_by_id($depot_id){
			$user =	$this->db->get_where('depot',array('depot_id'=>$depot_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$depot	=	$row['depot'];
				}
				return $depot;

			}
			else
			{

				return '';
			}
		}
		
		
		function get_bank_name($bank_id){
			$user =	$this->db->get_where('bank',array('bank_id'=>$bank_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$bank	=	$row['bank'];
				}
				return $bank;

			}
			else
			{

				return '';
			}
		}
		
		function get_staff_type_by_id($staff_type_id){
			$user =	$this->db->get_where('staff_types',array('staff_type_id'=>$staff_type_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$staff_type	=	$row['staff_type'];
				}
				return $staff_type;

			}
			else
			{

				return '';
			}
		}
		
		function get_department_by_id($department_id){
			$user =	$this->db->get_where('department',array('department_id'=>$department_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$department	=	$row['department'];
				}
				return $department;

			}
			else
			{

				return '';
			}
		}
		
		function get_taxband_by_id($depot_id){
			$user =	$this->db->get_where('tax_bands',array('tax_band_id'=>$tax_band_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$title	=	$row['title'];
				}
				return $title;

			}
			else
			{

				return '';
			}
		}
		
		function get_benefit_by_id($benefit_id){
			$user =	$this->db->get_where('benefits',array('benefit_id'=>$benefit_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$benefit	=	$row['benefit'];
				}
				return $benefit;

			}
			else
			{

				return '';
			}
		}
		
		function get_employee_by_id($employee_id){
			$user =	$this->db->get_where('employees',array('employee_id'=>$employee_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$name	=	$row['name'];
				}
				return $name;

			}
			else
			{

				return '';
			}
		}
		
		function get_user_by_id($user_id){
			$user =	$this->db->get_where('users',array('user_id'=>$user_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$username	=	$row['username'];
				}
				return $username;

			}
			else
			{

				return '';
			}
		}
		
		function get_employee_id_by_loan_id($loan_id){
			$user =	$this->db->get_where('loans',array('loan_id'=>$loan_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$employee_id	=	$row['employee_id'];
				}
				return $employee_id;

			}
			else
			{

				return '';
			}
		}
		
		function get_employee_id_by_overtime_id($overtime_id){
			$user =	$this->db->get_where('loans',array('overtime_id'=>$overtime_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$employee_id	=	$row['employee_id'];
				}
				return $employee_id;

			}
			else
			{

				return '';
			}
		}
		
		function get_loan_amount($loan_id){
			$user =	$this->db->get_where('loans',array('loan_id'=>$loan_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$loan_amount	=	$row['loan_amount'];
				}
				return $loan_amount;

			}
			else
			{

				return '';
			}
		}
		
		function get_overtime_type_by_id($overtime_type_id){
			$user =	$this->db->get_where('overtime_types',array('overtime_type_id'=>$overtime_type_id))->result_array();	
			if($user)
			{	
				foreach($user as $row)
				{
					$overtime_type	=	$row['overtime_type'];
				}
				return $overtime_type;

			}
			else
			{

				return '';
			}
		}
		
		
		function get_overtime_id_by_month($month,$year,$employee_id,$overtime_type_id){
			$overtimes =	$this->db->get_where('overtime',array('month'=>$month,'year'=>$year,'employee_id'=>$employee_id,'overtime_type_id'=>$overtime_type_id))->result_array();	
			
			if($overtimes)
			{	
				foreach($overtimes as $row)
				{
					$overtime_id	=	$row['overtime_id'];
				}
				return $overtime_id;

			}
			else
			{

				return '';
			}
		}
		
		function get_overtime_deduct_by_month($month,$year,$employee_id){
			$overtimes =	$this->db->get_where('overtime',array('month'=>$month,'year'=>$year,'employee_id'=>$employee_id))->result_array();	
			
			if($overtimes)
			{	
				foreach($overtimes as $row)
				{
					$deduct	=	$row['deduct'];
				}
				return $deduct;

			}
			else
			{

				return '';
			}
		}
		
		function get_overtime_days_absent_by_month($month,$year,$employee_id){
			$overtimes =	$this->db->get_where('overtime',array('month'=>$month,'year'=>$year,'employee_id'=>$employee_id))->result_array();	
			
			if($overtimes)
			{	
				foreach($overtimes as $row)
				{
					$days_absent	=	$row['days_absent'];
				}
				return $days_absent;

			}
			else
			{

				return 0;
			}
		}


		function get_total_overtime_per_staff_per_month($salary_date,$employee_id){
			$this->db->select_sum('amount');
			$this->db->from('overtime');
			$this->db->where('salary_date',$salary_date);
			//$this->db->where('year',$year);
			$this->db->where('employee_id',$employee_id);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}

		function get_total_overtime_per_staff_per_month1($month,$year,$employee_id){
			$this->db->select_sum('amount');
			$this->db->from('overtime');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			$this->db->where('employee_id',$employee_id);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}

		function get_total_loan_per_staff_per_month($salary_date,$employee_id){
			$this->db->select_sum('payment_amount');
			$this->db->from('loan_payments');
			$this->db->where('salary_date',$salary_date);
			$this->db->where('employee_id',$employee_id);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}

		function get_loan_balance($employee_id){
			$this->db->select_sum('loan_balance');
			$this->db->from('loans');
			$this->db->where('employee_id',$employee_id);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}


		function get_total_charge_per_staff_per_month($employee_id){
			$this->db->select_sum('d_amount');
			$this->db->from('dependants');
			$this->db->where('deduct',1);
			$this->db->where('employee_id',$employee_id);
			//$this->db->where('deleted',0);
			return $query = $this->db->get();
		}

		function get_total_charges(){
			$this->db->select_sum('d_amount');
			$this->db->from('dependants');
			$this->db->where('deduct',1);
			$this->db->where('deleted',0);
			return $query = $this->db->get();
		}


		
		function getIndex ($tbl){
		$nextVal = $this->db->get_where('tbl_generator',array('tbl_name'=>$tbl))->row()->next_val;
		$new_id = $nextVal + 1;
		$this->db->where('tbl_name', $tbl);
        $this->db->update('tbl_generator', array('next_val' => $new_id));		
		return $nextVal;
		}
		
		
		function generateRandomString($length = 5){
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

	    function get_pp($id)
		{
			$this->db->select('*');
			$this->db->from('pension_para');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query->row();
		}

	 	function get_leave_type($id){
			$this->db->select('*');
			$this->db->from('leave_types');
			$this->db->where('leave_type_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function delete_leave_type($id){
			$data['deleted'] = 1;
			$this->db->where('leave_type_id',$id);
			$this->db->update('leave_types',$data);
		}
		function delete_leave($id){
			$data['deleted'] = 1;
			$this->db->where('leave_id',$id);
			$this->db->update('leaves',$data);
		}

		function delete_offload($id){
			$data['deleted'] = 1;
			$this->db->where('offload_id',$id);
			$this->db->update('offloads',$data);
		}
	
	#####depot#######
		function depot_add($data)
		{
			$this->db->insert('depot',$data);
			return $this->db->insert_id();
		}
		function get_depot($id)
		{
			$this->db->select('*');
			$this->db->from('depot');
			$this->db->where('depot_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function depot_update($where, $data){
			$this->db->update('depot',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_depot($id){
			$this->db->where('depot_id',$id);
			$this->db->delete('depot');
		}
		
		function delete_salary($id){
			$this->db->where('salary_id',$id);
			$this->db->delete('salaries');
		}
		
		
		#####department#######
		function department_add($data){
			$this->db->insert('department',$data);
			return $this->db->insert_id();
		}
		function get_department($id){
			$this->db->select('*');
			$this->db->from('department');
			$this->db->where('department_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function get_overtime_type($id){
			$this->db->select('*');
			$this->db->from('overtime_types');
			$this->db->where('overtime_type_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		
		function department_update($where, $data)
		{
			$this->db->update('department',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_department($id)
		{
			$this->db->where('department_id',$id);
			$this->db->delete('department');
		}


		function staff_type_add($data){
			$this->db->insert('staff_types',$data);
			return $this->db->insert_id();
		}
		function get_staff_type($id){
			$this->db->select('*');
			$this->db->from('staff_types');
			$this->db->where('staff_type_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		
		function staff_type_update($where, $data)
		{
			$this->db->update('staff_types',$data, $where);
			return $this->db->affected_rows();
		}

		function delete_staff_type($id)
		{
			$this->db->where('staff_type_id',$id);
			$this->db->delete('staff_types');
		}


		function get_bank($id){
			$this->db->select('*');
			$this->db->from('bank');
			$this->db->where('bank_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function get_product($id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where('product_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function get_product_supply($id){
			$this->db->select('*');
			$this->db->from('product_supplies');
			$this->db->where('product_supply_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		
		#####department#######
		function taxband_add($data)
		{
			$this->db->insert('tax_config',$data);
			return $this->db->insert_id();
		}
		function get_taxband($id)
		{
			$this->db->select('*');
			$this->db->from('tax_config');
			$this->db->where('tax_config_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function taxband_update($where, $data)
		{
			$this->db->update('tax_config',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_taxband($id)
		{
			$this->db->where('tax_config_id',$id);
			$this->db->delete('tax_config');
		}
		

	
	#####ARREARS#######
		function arrear_add($data)
		{
			$this->db->insert('arrears',$data);
			return $this->db->insert_id();
		}
		function get_arrear($id)
		{
			$this->db->select('*');
			$this->db->from('arrears');
			$this->db->where('arrear_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function arrear_update($where, $data)
		{
			$this->db->update('arrears',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_arrear($id)
		{
			$this->db->where('arrear_id',$id);
			$this->db->delete('arrears');
		}
		
		
		#####ARREARS#######
		function bonus_add($data)
		{
			$this->db->insert('bonus',$data);
			return $this->db->insert_id();
		}
		function get_bonus($id)
		{
			$this->db->select('*');
			$this->db->from('bonus');
			$this->db->join('employees','employees.employee_id=bonus.employee_id');
			$this->db->where('bonus_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function bonus_update($where, $data)
		{
			$this->db->update('bonus',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_bonus($id)
		{
			$this->db->where('bonus_id',$id);
			$this->db->delete('bonus');
		}
	
	
	
	
	
	function get_scheme_type($id)
		{
			$this->db->select('*');
			$this->db->from('scheme');
			$this->db->where('scheme_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		function get_membership($id)
		{
			$this->db->select('*');
			$this->db->from('membership');
			$this->db->where('membership_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
	
	
	
	
	
	
	
	
	
	
	
	
	

		##### BOOKING FUNCTIONS#######
		
		function get_loan($id)
		{
			$this->db->select('*');
			$this->db->from('loans');
			$this->db->where('loan_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function loan_update($where, $data)
		{
			$this->db->update('loans',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_loan($id)
		{
			$this->db->where('loan_id',$id);
			$this->db->delete('loans');
		}

		function delete_job($id){
			$data['deleted'] = 1;
			$this->db->where('job_id',$id);
			$this->db->update('jobs',$data);
		}

		function get_job($id)
		{
			$this->db->select('*');
			$this->db->from('jobs');
			$this->db->where('job_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		
		###END OF TEST BOOKING FUNCTIONS####
		
		
		
		function scheme_add($data){
			$this->db->insert('health_scheme',$data);
			return $this->db->insert_id();
		}
			function get_scheme($id){
			$this->db->select('*');
			$this->db->from('health_scheme');
			$this->db->join('employees','employees.employee_id=health_scheme.employee_id');
			$this->db->where('health_scheme_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function scheme_update($where, $data){
			$this->db->update('health_scheme',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_scheme($id){
			$this->db->where('health_scheme_id',$id);
			$this->db->delete('health_scheme');
		}
		
		
		
		function schemebill_add($data){
			$this->db->insert('scheme_bill',$data);
			return $this->db->insert_id();
		}
		function get_schemebill($id){
			$this->db->select('*');
			$this->db->from('scheme_bill');
			$this->db->where('scheme_bill_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function schemebill_update($where, $data)
		{
			$this->db->update('scheme_bill',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_schemebill($id)
		{
			$this->db->where('scheme_bill_id',$id);
			$this->db->delete('scheme_bill');
		}
		
		
		###TEST FUNCTIONS#####
		function overtime_add($data)
		{
			$this->db->replace('overtime', $data);
			return $this->db->insert_id();
		}
		
		function delete_overtime($id){
			$this->db->where('overtime_id',$id);
			$this->db->delete('overtime');
		}
		
		
		
		
		function bank_add($data){
			$this->db->insert('bank', $data);
			return $this->db->insert_id();
		}
	
		
		function bank_update($where, $data){
			$this->db->update('bank',$data, $where);
			return $this->db->affected_rows();
		}
	
		function delete_bank($id){
			$this->db->where('bank_id',$id);
			$this->db->delete('bank');
		}
		
		function get_attendance_code($id)
		{
			$this->db->select('*');
			$this->db->from('attendance_codes');
			$this->db->where('attendance_code_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		
		####END OF TEST FUNCTIONS#####
		
		
		####USER FUNCTIONS####
		function user_add($data)
		{
			$this->db->insert('users', $data);
			return $this->db->insert_id();
		}
		function get_user($id)
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id',$id);
			$query = $this->db->get();
			return $query->row();
		}
		function user_update($where, $data)
		{
			$this->db->update('users',$data, $where);
			return $this->db->affected_rows();
		}
		function delete_user($id)
		{
			$this->db->where('user_id',$id);
			$this->db->delete('users');
		}
		####END OF USER FUNCTIONS###
		


		
				
		function get_total_product_cost_per_month($month,$year){
			$this->db->select_sum('total_cost');
			$this->db->from('product_supplies');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get()->row()->total_cost;
		}

		function get_total_product_qty_per_month($month,$year){
			$this->db->select_sum('quantity');
			$this->db->from('product_supplies');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			return $query = $this->db->get()->row()->quantity;
		}

		function get_total_product_qty_per_month_depot($depot_id,$month,$year){
			$this->db->select_sum('quantity');
			$this->db->from('product_supplies');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			$this->db->where('depot_id',$depot_id);
			return $query = $this->db->get()->row()->quantity;
		}

		function get_total_product_cost_per_month_depot($depot_id,$month,$year){
			$this->db->select_sum('total_cost');
			$this->db->from('product_supplies');
			$this->db->where('month',$month);
			$this->db->where('year',$year);
			$this->db->where('depot_id',$depot_id);
			return $query = $this->db->get()->row()->total_cost;
		}


		function get_staff_depot_id($employee_id){
			$depot = $this->db->get_where('employees',array('employee_id'=>$employee_id))->result_array();	
			if($depot)
			{	
				foreach($depot as $row)
				{
					$depot_id	=	$row['depot_id'];
				}
				return $depot_id;

			}
			else
			{

				return '';
			}
		}

		function get_depot_daily_rate($depot_id){
			$depot = $this->db->get_where('depot',array('depot_id'=>$depot_id))->result_array();	
			if($depot)
			{	
				foreach($depot as $row)
				{
					$daily_rate	=	$row['daily_rate'];
				}
				return $daily_rate;

			}
			else
			{

				return 0;
			}
		}
 
}