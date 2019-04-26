<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>مدیر سایت</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="<?php echo base_url() ?>style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/arial.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css"/>

<link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/styles_menu.css' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url() ?>js/menu_jquery.js'></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header_block">
    <div class="header_resize">
      
      <div  class="menu_nav" >
        <ul>
        <?php
		   $i=1;
		   foreach($info as $row)
		   {
				echo'
				<li><a href="'.base_url().'index.php/welcome/show_menu/'.$row['id_link'].'" target="_self">
				 <span> '.$row['Name_link'].'</span>
				</a></li>';
				$i++;
		   }
	   ?>
        <li><a href="<?php echo base_url() ?>index.php/welcome/user">ثبت نام </a></li>
        <li><a href="<?php echo base_url() ?>index.php/welcome/albom">آلبوم تصاویر </a></li>
        </ul>
      </div>
      
      
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="header">
    <div class="logo">
      <h1><a href="#"><small></small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  
  <div class="content">
  <div align="center">
  <div align="center">
        <h2><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: مدیر سایت :.</font></p></h2>
      
   <p align="center">
   <font color="#FF0000" size="+2">
   <?php
			
			$UN= $this->session->userdata('username');
			if ($UN !='')
			{
				echo  $this->session->userdata('username');
				echo '<a href="'.base_url().'index.php/welcome/log_out/"> خروج  </a>';
			}
	?>
        <p align="right">&nbsp;</p>
   </font></p>
   
   
   
    
  
  </div>
      
      
     
      <div id='cssmenu'>
                <ul>
                <li class='active'><a href='<?php echo base_url() ?>index.php/welcome/admin'><span>مدیریت کاربران</span></a></li>
                <li class='has-sub'><a href='<?php echo base_url() ?>index.php/welcome/EditImages'><span>ویرایش گالری تصاویر</span></a></li>
                <li class='has-sub'><a href='#'><span>تنظیمات منوها</span></a>
                      <ul>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/EditMenu'><span>مشاهده منو اصلی</span></a></li>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/InsertMenu'><span>اضافه کردن منو اصلی</span></a></li>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/EditMenuHandicraft'><span></span>مشاهده منو صنایع دستی</a></li>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/InsertMenuHandicraft'><span></span>اضافه کردن منو صنایع دستی</a></li>
                      </ul>
                 </li>
                   <li class='has-sub'><a href='#'><span>مدیریت صفحات اصلی</span></a>
                      <ul>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/EditPages'><span>مشاهده صفحات</span></a></li>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/InsertPages'><span>اضافه کردن مطالب به صفحات</span></a></li>
                      </ul>
                   </li>
                   <li class='has-sub'><a href='#'><span>مدیریت صفحات صنایع دستی</span></a>
                      <ul>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/EditHandicraft'><span>مشاهده صفحات صنایع دستی</span></a></li>
                         <li><a href='<?php echo base_url() ?>index.php/welcome/InsertHandicraft'><span>اضافه کردن مطالب به صفحات صنایع دستی</span></a></li>
                      </ul>
                   </li>
                </ul>
	</div>

  <p align="right">&nbsp;</p>
  <p align="right">&nbsp;</p>
  
  
</div></body>

</html>