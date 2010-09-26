<?php

function MY_Model extends Model(){

	function get_all($__table){
		return $this->db->get($__table)->result();
	}

	function get_one($__table, $__criteria){
		return $this->db->get_where($__table, $__criteria)->row();
	}

	function get_where($__table, $__criteria){
		return $this->db->get_where($__table, $__criteria)->result();
	}

	function update($__table, $__data, $__criteria){
		$this->db->set($__data)
			 ->where($__criteria)
			 ->update($__table);

		return $this->db->affected_rows();
	}

	function insert($__table, $__data){
		$this->db->set($__data)
			 ->insert($__table);

		return $this->db->insert_id();
	}

	function delete($__table, $__criteria){
		$this->db->where($__criteria)
			 ->delete($__table);
		return $this->db->affected_rows();
	}

}
