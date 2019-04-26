<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		$data['query']= $this->data_model->select_pages();
		$this->load->view('index',$data);
	}
	
	
	public function user()
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		$this->load->view('user',$data);
	}
	
	
	public function albom()
	{
		$data['info']= $this->data_model->select_link();
		$data['info3']= $this->data_model->select_image();
		$this->load->view('albom',$data);
	}
	
	
	
	public function show_menu($link)
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		$m=$data['query']= $this->data_model->select_pages2($link);
		if($m)
			$this->load->view('index',$data);
		else
		{
			echo "<script>alert('No Page')</script>";
			redirect('/welcome/index','refresh');
		}
	}
	
	public function show_menu2($link)
	{
		if ($this->session->userdata('user_access_level')==2 or $this->session->userdata('user_access_level')==1 )
		{
			$data['info']= $this->data_model->select_link();
			$data['info2']= $this->data_model->select_link2();
			$m=$data['query2']= $this->data_model->select_pages4($link);
			if($m)
				$this->load->view('handicraft',$data);
			else
			{
				echo "<script>alert('No Page')</script>";
				$this->load->view('handicraft',$data);
			}
		}
		else
		{
			$this->session->set_userdata('welcome', ' .: Ebteda bayad ozve site shavid :.');
			$this->load->view('user',$data);
			
		}
	}
	
	
	
	public function handicraft($link)
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		$data['query2']= $this->data_model->select_pages4($link);
		
		if ($this->session->userdata('user_access_level')==2 or $this->session->userdata('user_access_level')==1 )
		{
				$this->load->view('handicraft',$data);
		}
		else
		{
			$this->session->set_userdata('welcome', ' .: Ebteda bayad ozve site shavid :.');
			$this->load->view('user',$data);
			
		}
	}
	
	
	public function admin()
		{
			if(isset($_POST['limit']) and $_POST['limit']!='')
						$limit=$_POST['limit'];
					else
						$limit=20;
			$data['info2']= $this->data_model->select_link2();
			$data['query']= $this->data_model->select_pages();
			$data['info']= $this->data_model->select_link();
			$data['info4']=$this->data_model->select_all($limit);
			if ($this->session->userdata('user_access_level')==1) 
			{
					$this->load->view('admin',$data);
					$this->load->view('EditUser',$data);
			}
			else
			{
				echo "<script>alert('No Page')</script>";
				redirect('/welcome/index','refresh');
			}
		}
	
		public function EditPages()
		{
			$data['info']= $this->data_model->select_link();
			$data['query10']= $this->data_model->select_pages_admin();
			if ($this->session->userdata('user_access_level')==1) 
			{
					$this->load->view('admin',$data);
					$this->load->view('EditPages',$data);
			}
			else
				$this->load->view('index',$data);
		}
	
	
	
	public function InsertPages()
		{
			$data['info']= $this->data_model->select_link();
			$data['info2']= $this->data_model->select_link2();
			$data['query']= $this->data_model->select_pages();
			if ($this->session->userdata('user_access_level')==1) 
			{
					$this->load->view('admin',$data);
					$this->load->view('InsertPages',$data);
				
			}
			else
				$this->load->view('index',$data);
		}
	
	
	
	
	public function EditHandicraft()
		{
			$data['info']= $this->data_model->select_link();
			$data['query15']= $this->data_model->select_pages2_admin();
			if ($this->session->userdata('user_access_level')==1) 
			{
					$this->load->view('admin',$data);
					$this->load->view('EditHandicraft',$data);
			}
			else
				$this->load->view('index',$data);
		}
	
	
	
	public function InsertHandicraft()
		{
			$data['info']= $this->data_model->select_link();
					$data['info2']= $this->data_model->select_link2();
					$data['query']= $this->data_model->select_pages();
			if ($this->session->userdata('user_access_level')==1) 
			{
					$this->load->view('admin',$data);
					$this->load->view('InsertHandicraft',$data);
			}
			else
				$this->load->view('index',$data);
		}
	
	
	
	
	public function UpdatePages($link)
	{		
		$data['info']= $this->data_model->select_link();
		$m=$data['query11']= $this->data_model->select_pages_admin3($link);
		if($m)
		{
			$this->load->view('admin',$data);
			$this->load->view('UpdatePages',$data);
		}
		else
		{
			echo "<script>alert('No Page')</script>";
			redirect('/welcome/EditPages','refresh');
		}
		
	}
	
	
		public function UpdateHandicraft($link)
		{		
			$data['info']= $this->data_model->select_link();
			$m=$data['query16']= $this->data_model->select_pages2_admin3($link);
			if($m)
			{
				$this->load->view('admin',$data);
				$this->load->view('UpdateHandicraft',$data);
			}
			else
			{
				echo "<script>alert('No Page')</script>";
				redirect('/welcome/EditHandicraft','refresh');
			}
		}
	
	
	public function show_menu_image($link)
	{		
		$data['info']= $this->data_model->select_link();
		$data['info11']= $this->data_model->select_image();
		$m=$data['query12']= $this->data_model->select_image2($link);
		if($m)
			{
				$this->load->view('admin',$data);
				$this->load->view('EditImages',$data);
			}
			else
			{
				echo "<script>alert('No Page')</script>";
				redirect('/welcome/EditImages','refresh');
			}
	}
	
	/*
	public function show_menu_admin2($link)
	{			
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		$data['query']= $this->data_model->select_pages2($link);
		$data['query2']= $this->data_model->select_pages3();
		$data['info10']= $this->data_model->select_pages_admin();
		$data['query10']= $this->data_model->select_pages2($link);
		$data['query11']= $this->data_model->select_pages_admin3($link);
		$this->load->view('admin',$data);
		$this->load->view('EditPages',$data);
	}
	*/
	
	
	
	public function EditImages()
		{
			if ($this->session->userdata('user_access_level')==1) 
			{
					$data['info']= $this->data_model->select_link();
					$data['info11']= $this->data_model->select_image();
					$data['query12']= $this->data_model->select_image3();
					$this->load->view('admin',$data);
					$this->load->view('EditImages',$data);
				
			}
		}
		
	
	
		public function EditMenu()
		{
			if ($this->session->userdata('user_access_level')==1) 
			{
					$data['info']= $this->data_model->select_link();
					$data['query']= $this->data_model->select_link4();
					$this->load->view('admin',$data);
					$this->load->view('EditMenu',$data);
			}
		}
		
		
		public function InsertMenu()
		{
			if ($this->session->userdata('user_access_level')==1) 
			{
					$data['info']= $this->data_model->select_link();
					$this->load->view('admin',$data);
					$this->load->view('InsertMenu',$data);
				
			}
		}
		
		
		public function EditMenuHandicraft()
		{
			if ($this->session->userdata('user_access_level')==1) 
			{
					$data['info']= $this->data_model->select_link();
					$data['info2']= $this->data_model->select_link2();
					$data['query20']= $this->data_model->select_link5();
					$this->load->view('admin',$data);
					$this->load->view('EditMenuHandicraft',$data);
				
			}
		}
		
		
		public function InsertMenuHandicraft()
		{
			if ($this->session->userdata('user_access_level')==1) 
			{
					$data['info']= $this->data_model->select_link();
					$this->load->view('admin',$data);
					$this->load->view('InsertMenuHandicraft',$data);
			}
		}
		
		
	
	public function UpdateMenu($link)
	{
		$m=$data['query']= $this->data_model->select_link3($link);
		$data['info']= $this->data_model->select_link();
		if($m)
			{
				$this->load->view('admin',$data);
				$this->load->view('UpdateMenu',$data);
			}
			else
			{
				echo "<script>alert('No Page')</script>";
				redirect('/welcome/EditMenu','refresh');
			}
	}
	
	
	public function UpdateMenuHandicraft($link)
	{
		$m=$data['query20']= $this->data_model->select_link6($link);
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		if($m)
			{
				$this->load->view('admin',$data);
				$this->load->view('UpdateMenuHandicraft',$data);
			}
			else
			{
				echo "<script>alert('No Page')</script>";
				redirect('/welcome/EditMenuHandicraft','refresh');
			}
	}
	
	
	public function search_user()
	{
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', "Username", 'trim|required|min_length[6]|max_length[20]|alpha_numeric');
			$this->form_validation->set_rules('password', "Password", 'trim|required|min_length[6]|max_length[20]|alpha_numeric');
		
			//$this->form_validation->set_message('alpha_farsi',"??? ?? ??????? %s ");
			//$this->form_validation->set_message('reng',"??? ?? ?????? %s ");
			//$this->form_validation->set_message('xss_clean','Error %s ');
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('alpha','just alpha %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('exact_length',' just 11 %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			$this->form_validation->set_message('valid_email','valid_email %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
   

    if($this->form_validation->run() == FALSE)
    {
      redirect('/welcome/index');
    }
	
    else
    {  
		$data=$this->data_model->check_user($_POST);
		if($data)
		{
			$this->session->set_userdata('username', $data['FName']);
			$this->session->set_userdata('user_access_level',$data['access_level']);
			if($data['access_level']==1)
				redirect('/welcome/admin/');
			elseif($data['access_level']==2)
				redirect('/welcome/index');
		}
		else
		{
			$this->session->set_userdata('Not_username', ' Invalid username or password');
			redirect('/welcome/index');
		}
		
	}
		
	}
	
	
	
	public function insert_data()
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		
		    $this->load->library('form_validation');
			
			$this->form_validation->set_rules('FName', 'FName', 'trim|required|min_length[2]|max_length[30]');
			$this->form_validation->set_rules('LName', 'LName', 'trim|required|min_length[2]|max_length[40]');
			$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('Phone', 'Phone', 'trim|required|numeric|exact_length[11]');
			$this->form_validation->set_rules('Address', 'Address', 'trim|required|min_length[5]|max_length[100]');
			$this->form_validation->set_rules('City', 'City', 'trim|required|min_length[2]|max_length[20]');
			$this->form_validation->set_rules('UserName', 'UserName', 'trim|required|min_length[6]|max_length[20]|alpha_numeric');
			$this->form_validation->set_rules('Pass', 'Pass', 'trim|required|min_length[6]|max_length[20]|alpha_numeric');
			$this->form_validation->set_rules('Pass2', 'Pass2', 'matches[Pass]');
			
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('alpha','just alpha %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('exact_length',' just 11 %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			$this->form_validation->set_message('alpha_numeric','numeric and alpha %s ');
			$this->form_validation->set_message('valid_email','valid_email %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
   

    if($this->form_validation->run() == FALSE)
    {
		$this->load->view('user',$data);
    }
    else
    {  
		$my_data=array();
		$my_data['FName']=$_POST['FName'];
		$my_data['LName']=$_POST['LName'];
		$my_data['Email']=$_POST['Email'];
		$my_data['Phone']=$_POST['Phone'];
		$my_data['Address']=$_POST['Address'];
		$my_data['City']=$_POST['City'];
		$my_data['UserName']=$_POST['UserName'];
		$my_data['Pass']=MD5($_POST['Pass']);
		$my_data['access_level']=2;
		$this->data_model->insert_user($my_data);
		$this->session->set_userdata('welcome', ' .: Welcome :.');
		redirect('/welcome/user');
	}
	
	}
	
	
	public function log_out()
		{
			$this->session->unset_userdata('user_access_level');
			$this->session->unset_userdata('username');
			redirect('/welcome/index');
		}
	
	
	
	
	
	public function update_data_pages($id)
	{
		
		if ($this->session->userdata('user_access_level')==1) 
				{
					$my_data=array();
					$my_data['id']=$id;
					$my_data['title']=$_POST['update_title'];
					$my_data['title2']=$_POST['update_title2'];
					$my_data['description']=$_POST['update_description'];
					$my_data['image']=$_POST['update_image'];
					$my_data['Width']=$_POST['update_Width'];
					$my_data['height']=$_POST['update_height'];
					$this->data_model->update_pages($my_data,$id);
					
						
					$data['info']= $this->data_model->select_link();
					$data['query10']= $this->data_model->select_pages_admin();
					redirect('/welcome/EditPages');
				}
		
	}
	
	
	
	public function update_data_pages2($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{
					$my_data=array();
					$my_data['id']=$id;
					$my_data['title']=$_POST['update_title'];
					$my_data['title2']=$_POST['update_title2'];
					$my_data['description']=$_POST['update_description'];
					$my_data['image']=$_POST['update_image'];
					$my_data['Width']=$_POST['update_Width'];
					$my_data['height']=$_POST['update_height'];
					$this->data_model->update_pages2($my_data,$id);
					
					$data['info']= $this->data_model->select_link();
					$data['query15']= $this->data_model->select_pages2_admin();
					redirect('/welcome/EditHandicraft');
				}
	}
	
	
	public function update_link($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{
					$my_data=array();
					$my_data['id_link']=$id;
					$my_data['Name_link']=$_POST['update_Name_link'];
					$this->data_model->update_link($my_data,$id);
					
					$data['info']= $this->data_model->select_link();
					redirect('/welcome/EditMenu');
				}
			
	}
	
	
	public function update_link2($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{
					$my_data=array();
					$my_data['id_link2']=$id;
					$my_data['Name_link2']=$_POST['update_Name_link2'];
					$this->data_model->update_link2($my_data,$id);
					
					$data['info']= $this->data_model->select_link();
					$data['info2']= $this->data_model->select_link2();
					redirect('/welcome/EditMenuHandicraft');
				}
	}
	
	
	public function insert_data_pages()
	{
		$data['info']= $this->data_model->select_link();
		
		    $this->load->library('form_validation');
			
			$this->form_validation->set_rules('title', 'title', 'trim|min_length[2]');
			$this->form_validation->set_rules('title2', 'title2', 'trim|min_length[2]');
			$this->form_validation->set_rules('description', 'description', 'trim|min_length[5]');
			$this->form_validation->set_rules('Width', 'Width', 'trim|numeric');
			$this->form_validation->set_rules('height', 'height', 'trim|numeric');
			$this->form_validation->set_rules('image', 'image', 'trim');
			
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
   

			if($this->form_validation->run() == FALSE)
			{
					if ($this->session->userdata('user_access_level')==1) 
				{
					$this->load->view('admin',$data);
					$this->load->view('InsertPages',$data);
				}
				
			}
			else
			{  
				if ($this->session->userdata('user_access_level')==1) 
				{
						$PicName=random_string('alnum', 9);
						$config['upload_path']= './images/';
						$config['allowed_types']= 'jpg';
						$config['max_size']= 200000000;
						$config['file_name']=$PicName;
												
						$this->upload->initialize($config);
						
						if ( ! $this->upload->do_upload('PicFileName'))
						   {
							   echo 'error upload...';
						   }   
						$pic_s= $config['file_name']=$PicName;
						$p=$pic_s.'.jpg'; 
						
						$my_data=array();
						$my_data['id_link']=$_POST['id_link'];
						$my_data['title']=$_POST['title'];
						$my_data['title2']=$_POST['title2'];
						$my_data['description']=$_POST['description'];
						$my_data['Width']=$_POST['Width'];
						$my_data['height']=$_POST['height'];
						$my_data['image']=$p;
						
						$this->data_model->insert_pages($my_data);
						
						$this->session->set_userdata('Add', ' .: Add :.');
						redirect('/welcome/InsertPages');
				}
			}
	
	}
	
	
	
	public function insert_link()
	{
		$data['info']= $this->data_model->select_link();
		
		    $this->load->library('form_validation');
			
			$this->form_validation->set_rules('Name_link', 'Name_link', 'trim|min_length[2]');
			$this->form_validation->set_rules('title', 'title', 'trim|min_length[2]');
			$this->form_validation->set_rules('title2', 'title2', 'trim|min_length[2]');
			$this->form_validation->set_rules('description', 'description', 'trim|min_length[5]');
			$this->form_validation->set_rules('Width', 'Width', 'trim|numeric');
			$this->form_validation->set_rules('height', 'height', 'trim|numeric');
			
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
			if($this->form_validation->run() == FALSE)
			{
					if ($this->session->userdata('user_access_level')==1) 
				{
					$this->load->view('admin',$data);
					$this->load->view('InsertMenu',$data);
				}
				
			}
			else
			{  
				if ($this->session->userdata('user_access_level')==1) 
				{
						$PicName=random_string('alnum', 9);
						$config['upload_path']= './images/';
						$config['allowed_types']= 'jpg';
						$config['max_size']= 200000000;
						$config['file_name']=$PicName;
												
						$this->upload->initialize($config);
						
						if ( ! $this->upload->do_upload('PicFileName'))
						   {
							   echo 'error upload...';
						   }   
						$pic_s= $config['file_name']=$PicName;
						$p=$pic_s.'.jpg'; 
						
						$Name_link=$_POST['name'];
						$title=$_POST['title'];
						$title2=$_POST['title2'];
						$description=$_POST['description'];
						$Width=$_POST['Width'];
						$height=$_POST['height'];
						$image=$p;
						
						$this->data_model->insert_menu($Name_link,$title,$title2,$description,$Width,$height,$image);
					
					$this->session->set_userdata('Add', ' .: Add :.');
					redirect('/welcome/InsertMenu');
				}
			}
	
	}
	
	
	
	public function insert_link2()
	{
		$data['info']= $this->data_model->select_link();
				
		    $this->load->library('form_validation');
			
			
			$this->form_validation->set_rules('id_link2', '??', 'trim|numeric|xss_clean');
			$this->form_validation->set_rules('title', 'title', 'trim|min_length[2]');
			$this->form_validation->set_rules('title2', 'title2', 'trim|min_length[2]');
			$this->form_validation->set_rules('description', 'description', 'trim|min_length[5]');
			$this->form_validation->set_rules('Width', 'Width', 'trim|numeric');
			$this->form_validation->set_rules('height', 'height', 'trim|numeric');
			
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
   

			if($this->form_validation->run() == FALSE)
			{
					if ($this->session->userdata('user_access_level')==1) 
				{
					$this->load->view('admin',$data);
					$this->load->view('EditMenu',$data);
				}
				
			}
			else
			{  
				if ($this->session->userdata('user_access_level')==1) 
				{
					$PicName=random_string('alnum', 9);
						$config['upload_path']= './images/';
						$config['allowed_types']= 'jpg';
						$config['max_size']= 200000000;
						$config['file_name']=$PicName;
												
						$this->upload->initialize($config);
						
						if ( ! $this->upload->do_upload('PicFileName'))
						   {
							   echo 'error upload...';
						   }   
						$pic_s= $config['file_name']=$PicName;
						$p=$pic_s.'.jpg'; 
						
						$Name_link2=$_POST['name2'];
						$title=$_POST['title'];
						$title2=$_POST['title2'];
						$description=$_POST['description'];
						$Width=$_POST['Width'];
						$height=$_POST['height'];
						$image=$p;
						
						$this->data_model->insert_menu2($Name_link2,$title,$title2,$description,$Width,$height,$image);
						
					$this->session->set_userdata('Add', ' .: Add :.');
					redirect('/welcome/InsertMenuHandicraft');
				}
			}
	
	}
	
	
	public function insert_data_pages2()
	{
		$data['info']= $this->data_model->select_link();
		$data['info2']= $this->data_model->select_link2();
		
		   $this->load->library('form_validation');
						
			$this->form_validation->set_rules('title', 'title', 'trim|min_length[2]');
			$this->form_validation->set_rules('title2', 'title2', 'trim|min_length[2]');
			$this->form_validation->set_rules('description', 'description', 'trim|min_length[5]');
			$this->form_validation->set_rules('Width', 'Width', 'trim|numeric');
			$this->form_validation->set_rules('height', 'height', 'trim|numeric');
			$this->form_validation->set_rules('image', 'image', 'trim');
			
			$this->form_validation->set_message('required', 'Invalid %s ');
			$this->form_validation->set_message('min_length','min_length %s  %s ');
			$this->form_validation->set_message('max_length','max_length %s  %s ');
			$this->form_validation->set_message('numeric','just numeric %s ');
			
			$this->form_validation->set_error_delimiters('<li class="pure-button _error">', '</li>');
   
   

			if($this->form_validation->run() == FALSE)
			{
					if ($this->session->userdata('user_access_level')==1) 
				{
					$this->load->view('admin',$data);
					$this->load->view('EditHandicraft',$data);
				}
				
			}
			else
			{  
				if ($this->session->userdata('user_access_level')==1) 
				{
						$PicName=random_string('alnum', 9);
						$config['upload_path']= './images/';
						$config['allowed_types']= 'jpg';
						$config['max_size']= 200000000;
						$config['file_name']=$PicName;
												
						$this->upload->initialize($config);
						
						if ( ! $this->upload->do_upload('PicFileName'))
						   {
							   echo 'error upload...';
						   }   
						$pic_s= $config['file_name']=$PicName;
						$p=$pic_s.'.jpg';
						
						
						$my_data=array();
						$my_data['id_link2']=$_POST['id_link2'];
						$my_data['title']=$_POST['title'];
						$my_data['title2']=$_POST['title2'];
						$my_data['description']=$_POST['description'];
						$my_data['Width']=$_POST['Width'];
						$my_data['height']=$_POST['height'];
						$my_data['image']=$p;
						
						
						$this->data_model->insert_pages2($my_data);
						
						$this->session->set_userdata('Add', ' .: Add :.');
						redirect('/welcome/InsertHandicraft');
				}
			}
	
	}
	
	
	
	
	
	
	public function delete_data_pages($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{		
					$this->data_model->delete_pages($id);
					
					$this->session->set_userdata('Delete', ' .: Delete :.');
						
					$data['info']= $this->data_model->select_link();
					$data['query10']= $this->data_model->select_pages_admin();
					$data['query11']= $this->data_model->select_pages_admin4();
					redirect('/welcome/EditPages');
				}	
	}
	
	
	
	
	public function delete_data_pages2($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{	
					$this->data_model->delete_pages2($id);
					
					$this->session->set_userdata('Delete', ' .: Delete :.');
						
					$data['info']= $this->data_model->select_link();
					$data['query15']= $this->data_model->select_pages2_admin();
					$data['query16']= $this->data_model->select_pages2_admin4();
					redirect('/welcome/EditHandicraft');
				}	
	}
	
	
	
	public function delete_data_user($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{
					if(isset($_POST['limit']) and $_POST['limit']!='')
							$limit=$_POST['limit'];
					else
							$limit=10;
					$data['info']= $this->data_model->select_link();
					$data['info4']=$this->data_model->select_all($limit);
					
					$this->data_model->delete_user($id);
					redirect('/welcome/admin');
				}	
	}
	
	
	public function delete_link($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{	
					$this->data_model->delete_link($id);
					
					$this->session->set_userdata('Delete', ' .: Delete :.');
						
					$data['info']= $this->data_model->select_link();
					$data['query']= $this->data_model->select_link4();
					redirect('/welcome/EditMenu');
				}	
	}
	
	
	public function delete_link2($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{	
					$this->data_model->delete_link2($id);
					
					$this->session->set_userdata('Delete', ' .: Delete :.');
						
					$data['info']= $this->data_model->select_link();
					$data['info2']= $this->data_model->select_link2();
					$data['query20']= $this->data_model->select_link5();
					redirect('/welcome/EditMenuHandicraft');
				}	
	}
	
	
	
	public function delete_data_image($id)
	{
		if ($this->session->userdata('user_access_level')==1) 
				{	
					$this->data_model->delete_image($id);
					
					$this->session->set_userdata('Delete', ' .: Delete :.');
						
					$data['info']= $this->data_model->select_link();
					$data['info11']= $this->data_model->select_image();
					$data['query12']= $this->data_model->select_image3();
					redirect('/welcome/EditImages');
				}
	}
	
	function save_pic()
	{ 	  
		$PicName=random_string('alnum', 9);
		$config['upload_path']= './img/';
		$config['allowed_types']= 'jpg';
		$config['max_size']= 200000000;
		$config['file_name']=$PicName;
								
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('PicFileName'))
		   {
			   echo 'error upload...';
		   }   
		$pic_s= $config['file_name']=$PicName;
		$my_data=array();
		$my_data['Name']=$pic_s.'.jpg';
		$my_data['height']=$_POST['update_height'];
		$my_data['width']=$_POST['update_width'];
		$result = $this->data_model->insert_image($my_data);
		
					
		$data['info']= $this->data_model->select_link();
		$data['info11']= $this->data_model->select_image();
		$data['query12']= $this->data_model->select_image3();
		redirect('/welcome/EditImages');
	}
	
	
	
	
	
	
	
	
}
