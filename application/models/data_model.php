<?php
class data_model extends CI_Model {
	
	public function select_link()
	{	
		$query=$this->db->get('link');
		return $query->result_array();
	}
	
	public function select_link2()
	{	
		$query=$this->db->get('link2');
		return $query->result_array();
	}
	
	
	
	public function select_pages()
	{	
		$sql="select * from pages where id_link='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	public function select_pages2($link)
	{	
		$sql="select * from pages where id_link='$link'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
	}
	
	
	
	
	
	public function select_pages3()
	{	
		$sql="select * from pages2 where id_link2='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	public function select_pages4($link2)
	{	
		$sql="select * from pages2 where id_link2='$link2'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
	}
	
	
	
	public function select_link3($link)
	{	
		$sql="select * from link where id_link='$link'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
	}
	
	
	public function select_link4()
	{	
		$sql="select * from link where id_link='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	
	public function select_link6($link)
	{	
		$sql="select * from link2 where id_link2='$link'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
	}
	
		public function select_link5()
	{	
		$sql="select * from link2 where id_link2='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	public function select_image()
	{	
		$sql='select * from images';
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	
	public function insert_user($data)
	{
		$this->db->insert('user',$data);
	}
	
	
	public function check_user($data)
		{
			$sql='select * from user where 
			UserName="'.$data['username'].'" 
			and Pass="'.MD5($data['password']).'" ';
			$query=$this->db->query($sql);
			$this->db->limit(1);
			if($query -> num_rows() == 1)
				return $query->row_array();
			else
				return false;
		}
	
	
	public function select_all($limit)
	{
		$query=$this->db->get('user',$limit);
		return $query->result_array();
	}
	
	
	
	public function select_pages_admin()
	{	
		$query=$this->db->get('pages');
		return $query->result_array();
	}
	
	public function select_pages2_admin()
	{	
		$query=$this->db->get('pages2');
		return $query->result_array();
	}
	
	public function insert_pages($data)
	{
		$this->db->insert('pages',$data);
	}
	
	public function insert_pages2($data)
	{
		$this->db->insert('pages2',$data);
	}
	
	public function select_image2($link3)
	{	
		$sql="select * from images where id='$link3'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
	}
	
	public function select_image3()
	{	
		$sql="select * from images where id='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	
	public function select_pages_admin3($link3)
	{	
		$sql="select * from pages where id='$link3'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
	}
	
	public function select_pages_admin4()
	{	
		$sql="select * from pages where id='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	
	public function select_pages2_admin3($link3)
	{	
		$sql="select * from pages2 where id='$link3'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();
		$this->db->limit(1);
		if($query -> num_rows() == 1)
			return $query->row_array();
		else
			return false;
		
		
	}
	
	public function select_pages2_admin4()
	{	
		$sql="select * from pages2 where id='1'";
		$querys=$this->db->query($sql);
	  	return $querys->result_array();	
		
	}
	
	
	public function update_pages($data,$id)
	{	
		//$this->db->set($data, FALSE);
		//$this->db->where('id_link', $id);
		//$this->db->update('pages');
		
		//$this->db->where('id', $id);
		//$this->db->update('pages', $data);
		
		//$this->db->update('pages', $data, array('id' => $id));
		$this->db->update('pages', $data, "id = $id");
	}
	
	
	
	public function update_pages2($data,$id)
	{
		$this->db->update('pages2', $data, "id = $id");
	}
	
	
	public function update_link($data,$id)
	{
		$this->db->update('link', $data, "id_link = $id");
	}
	
	public function update_link2($data,$id)
	{
		$this->db->update('link2', $data, "id_link2 = $id");
	}
	
	public function insert_menu($Name_link,$title,$title2,$description,$Width,$height,$image)
	{
		if ($Name_link !='')
		{
		$query="INSERT INTO link(id_link,Name_link)VALUES('','$Name_link')";
		$this->db->query($query);
		$selectid=$this->db->insert_id();
		
		$query2="INSERT INTO pages(id,id_link,title,title2,description,image,Width,height)
		VALUES ('','$selectid','$title','$title2','$description','$image','$Width','$height')";
		$this->db->query($query2);
		}
	}
	
	public function insert_menu2($Name_link2,$title,$title2,$description,$Width,$height,$image)
	{
		if ($Name_link2 !='')
		{
		$query="INSERT INTO link2(id_link2,Name_link2)VALUES('','$Name_link2')";
		$this->db->query($query);
		$selectid=$this->db->insert_id();
		
		$query2="INSERT INTO pages2(id,id_link2,title,title2,description,image,Width,height)
		VALUES ('','$selectid','$title','$title2','$description','$image','$Width','$height')";
		$this->db->query($query2);
		}
	}
	
	
	public function delete_pages($data)
	{
		$sql="delete from pages where id='$data'";
		$querys=$this->db->query($sql);
	}
	
	
	public function delete_link($data)
	{
		$sql="delete from link where id_link='$data'";
		$querys=$this->db->query($sql);
		$sql2="delete from pages where id_link='$data'";
		$querys=$this->db->query($sql2);
	}
	
	public function delete_link2($data)
	{
		$sql="delete from link2 where id_link2='$data'";
		$querys=$this->db->query($sql);
		$sql2="delete from pages2 where id_link2='$data'";
		$querys=$this->db->query($sql2);
	}
	
	public function delete_pages2($data)
	{
		$sql="delete from pages2 where id='$data'";
		$querys=$this->db->query($sql);
	}
	
	public function delete_user($data)
	{
		$sql="delete from user where id='$data'
		and access_level='2'";
		$querys=$this->db->query($sql);
	}
	
	
	public function delete_image($data)
	{
		$sql="delete from images where id='$data'";
		$querys=$this->db->query($sql);
	}
	
	public function update_image($data)
	{
		$id=$data['id'];
		$this->db->update('images', $data, "id = $id");
	}
	
	function insert_image($data)
	{
		$this->db->insert('images',$data);
	}



	
}
?>