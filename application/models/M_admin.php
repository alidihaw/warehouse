<?php
class M_admin extends CI_Model  {

    public function __contsruct(){
        parent::Model();
    }
	
	//CONFIGURATION TABEL IDENTITAS
	public function insert_identitas($data){
        $this->db->insert("identitas",$data);
    }
    
    public function update_identitas($where,$data){
        $this->db->update("identitas",$data,$where);
    }

    public function delete_identitas($where){
        $this->db->delete("identitas", $where);
    }

	public function get_identitas($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("identitas");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_identitas($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("identitas");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_identitas($where="", $like=""){
        $this->db->select("*");
        $this->db->from("identitas");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}
	
		
	public function identitaswebsite(){
        $data = "";
		$where['identitas_id'] = 1;
		$this->db->select("*");
        $this->db->from("identitas");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	//CONFIGURATION TABEL BARANG
	public function insert_barang($data){
        $this->db->insert("master_barang",$data);
    }
    
    public function update_barang($where,$data){
        $this->db->update("master_barang",$data,$where);
    }

    public function delete_barang($where){
        $this->db->delete("master_barang", $where);
    }

	public function get_barang($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("master_barang");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_barang($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("master_barang");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_barang($where="", $like=""){
        $this->db->select("*");
        $this->db->from("master_barang");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}
//CONFIGURATION TABEL LIMIT STOCK
	public function insert_limitstock($data){
        $this->db->insert("limitstock",$data);
    }
    
    public function update_limitstock($where,$data){
        $this->db->update("limitstock",$data,$where);
    }

    public function delete_limitstock($where){
        $this->db->delete("limitstock", $where);
    }

	public function get_limitstock($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("limitstock");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_limitstock($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("limitstock");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_limitstock($where="", $like=""){
        $this->db->select("*");
        $this->db->from("limitstock");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}

	//CONFIGURATION TABEL SUPPLIER
	public function insert_supplier($data){
        $this->db->insert("supplier",$data);
    }
    
    public function update_supplier($where,$data){
        $this->db->update("supplier",$data,$where);
    }

    public function delete_supplier($where){
        $this->db->delete("supplier", $where);
    }

	public function get_supplier($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("supplier");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_supplier($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("supplier");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_supplier($where="", $like=""){
        $this->db->select("*");
        $this->db->from("supplier");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}

	//CONFIGURATION TABEL CUSTOMER
	public function insert_customer($data){
        $this->db->insert("customer",$data);
    }
    
    public function update_customer($where,$data){
        $this->db->update("customer",$data,$where);
    }

    public function delete_customer($where){
        $this->db->delete("customer", $where);
    }

	public function get_customer($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("customer");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_customer($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("customer");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_customer($where="", $like=""){
        $this->db->select("*");
        $this->db->from("customer");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}

	//CONFIGURATION TABEL TRANSAKSI
	public function insert_transaksi($data){
        $this->db->insert("transaksi_barang",$data);
    }
    
    public function update_transaksi($where,$data){
        $this->db->update("transaksi_barang",$data,$where);
    }

    public function delete_transaksi($where){
        $this->db->delete("transaksi_barang", $where);
    }

	public function get_transaksi($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("transaksi_barang");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_transaksi($select, $sidx, $sord, $limit, $start, $where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("transaksi_barang");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_transaksi($where="", $like=""){
        $this->db->select("*");
        $this->db->from("transaksi_barang");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
	}
	
	//CONFIGURATION TABLE ADMIN
	public function insert_admin($data){
        $this->db->insert("admin",$data);
    }
    
    public function update_admin($where,$data){
        $this->db->update("admin",$data,$where);
    }

    public function delete_admin($where){
        $this->db->delete("admin", $where);
    }

	public function get_admin($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("admin a");
		$this->db->join('admin_level al', 'a.admin_level_kode = al.admin_level_kode', 'left');
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_admin($select, $sidx,$sord,$limit,$start,$where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("admin a");
		$this->db->join('admin_level al', 'a.admin_level_kode = al.admin_level_kode', 'left');
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
	}
	
	public function grid_all_admin2($select, $sidx,$sord,$limit,$start,$where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("admin");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_admin($where="", $like=""){
        $this->db->select("*");
        $this->db->from("admin");		
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
    }
	
	//CONFIGURATION TABLE ADMIN LEVEL
	public function insert_admin_level($data){
        $this->db->insert("admin_level",$data);
    }
    
    public function update_admin_level($where,$data){
        $this->db->update("admin_level",$data,$where);
    }

    public function delete_admin_level($where){
        $this->db->delete("admin_level", $where);
    }

	public function get_admin_level($select, $where){
        $data = "";
		$this->db->select($select);
        $this->db->from("admin_level");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

    public function grid_all_admin_level($select, $sidx,$sord,$limit,$start,$where="", $like=""){
        $data = "";
        $this->db->select($select);
        $this->db->from("admin_level");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $this->db->order_by($sidx,$sord);
        $this->db->limit($limit,$start);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0){
            $data=$Q->result();
        }
        $Q->free_result();
        return $data;
    }

    public function count_all_admin_level($where="", $like=""){
        $this->db->select("*");
        $this->db->from("admin_level");		
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
        $Q=$this->db->get();
        $data = $Q->num_rows();
        return $data;
    }
	
	// CONFIGURATION COMBO BOX WITH DATABASE
	public function combo_box($table, $name, $value, $name_value, $pilihan, $js='', $label='', $width=''){
		echo "<select name='$name' id='$name' onchange='$js' class='form-control input-sm' style='width:$width'>";
		echo "<option value=''>".$label."</option>";
		$query = $this->db->query($table);
		foreach ($query->result() as $row){
			if ($pilihan == $row->$value){
				echo "<option value='".$row->$value."' selected>".$row->$name_value."</option>";
			} else {
				echo "<option value='".$row->$value."'>".$row->$name_value."</option>";
			}
		}
		echo "</select>";
	}
	
	//CONFIGURATION CHECKBOX ARRAY WITH DATABASE
	public function checkbox($table, $name, $value, $name_value, $pilihan=''){
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row){
			$ceked = (array_search($row->tag_id, $array_tag) === false)? '' : 'checked';
			echo "<input type='checkbox' name='$name' id='".$row->$value."' value='".$row->$value."' ".$ceked."/><label for='".$row->$value."' style='display: inline-block'>".$row->$name_value."</label><br />";
		}
	}
	
	//CONFIGURATION CHECKBOX ARRAY WITH DATABASE
	public function checkbox_status($table, $name, $value, $name_value, $pilihan=''){
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row){
			$ceked = (array_search($row->status_perkawinan_kode, $array_tag) === false)? '' : 'checked';
			echo "<input type='checkbox' name='$name' id='".$row->$value."' style='display: inline-block;' value='".$row->$value."' ".$ceked."/><label for='".$row->$value."' style='display: inline-block; margin-right: 10px;'>".$row->$name_value."</label>";
		}
	}
	
	//CONFIGURATION LIST ARRAY WITH DATABASE AND EXPLODE
	public function listarray($table, $name, $value, $name_value, $pilihan=''){
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row){
			if (array_search($row->tag_id, $array_tag) === false) {
			} else {
			echo $row->$name_value.", ";
			}
		}
	}
	
	//CONFIGURATION LIST ARRAY WITH DATABASE AND EXPLODE
	public function tagsberita($table, $name, $value, $name_value, $pilihan=''){
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row){
			if (array_search($row->tag_id, $array_tag) === false) {
			} else {
			echo "<a href='".site_url()."news/tags/".$row->tag_id."' class='tag'>".$row->$name_value."</a> ";
			}
		}
	}
}