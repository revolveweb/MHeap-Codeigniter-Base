<?php

class MY_Model extends Model {

	private $_table_name = '';

	function set_table($__table){
		$this->_table_name = $__table;
	}

	function get_all($__fields = null){
		if ( !is_null( $__fields ) ) { $this->db->select($__fields); }
		return $this->db->get($this->_table_name)->result();
	}

	function get_one($__criteria, $__fields = null){
		if ( !is_null( $__fields ) ) { $this->db->select($__fields); }
		return $this->db->get_where($this->_table_name, $__criteria)->row();
	}

	function get_where($__criteria, $__fields = null){
		if ( !is_null( $__fields ) ) { $this->db->select($__fields); }
		return $this->db->get_where($this->_table_name, $__criteria)->result();
	}

	function update($__data, $__criteria){
		$this->db->set($__data)
			 ->where($__criteria)
			 ->update($this->_table_name);

		return $this->db->affected_rows();
	}

	function insert($__data){
		$this->db->set($__data)
			 ->insert($this->_table_name);

		return $this->db->insert_id();
	}

	function delete($__criteria){
		$this->db->where($__criteria)
			 ->delete($this->_table_name);
		return $this->db->affected_rows();
	}

}
