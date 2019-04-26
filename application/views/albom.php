<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>صنایع و هنرهای دستی اصفهان</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url() ?>style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css"/>
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/cuf_run.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<link href="<?php echo base_url() ?>style.css" rel="stylesheet" type="text/css" />
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
      <h1>&nbsp;</h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
    
    <div id="scrollSlider">
    
    <?php
		   $i=1;
		   foreach($info3 as $row)
		   {
			   echo '<img src=" '.base_url().'img/'.$row['Name'].'" width="'.$row['width'].'" height="'.$row['height'].'" alt="'.$row['id'].'"/>';
			   
				$i++;
		   }
	?>
    
    
</div>
    
    
    
     
</div>

<div class="fbg">
    <div class="col c1">
      
      <p>
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/15.jpg" width="58" height="58" alt="" /></a> 
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/4.jpg" width="58" height="58" alt="" /></a> 
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/6.jpg" width="58" height="58" alt="" /></a></p>
      <p> 
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/8.jpg" width="58" height="58" alt="" /></a> 
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/10.jpg" width="58" height="58" alt="" /></a> 
      <a href="<?php echo base_url() ?>index.php/welcome/albom"><img src="<?php echo base_url() ?>img/18.jpg" width="58" height="58" alt="" /></a></p>
      
    </div>
    <div class="col c2">
      
      <p align="center"><font color="#000000">سایت تخصصی صنایع دستی و هنرهای تجسمی</font></p>
      <p align="center"><font color="#000000">در راستای نیل به اهداف متعالی و تحقق ارزشهای ایرانی در سال 95 وارد حرفه صنایع دستی شده و اقدام به طراحی سایت در این رابطه نمودیم. در سال‌های آینده نیز تصمیم به فروش صنایع دستی از طریق همین سایت را نیز خواهیم داشت تا بتوان صنایع دستی ایران را به دنیا بشناسیم و به راحتی توزیع کنیم</font></P>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div class="col c3">
      
      <p align="right"><font face="Tahoma, Geneva, sans-serif" size="+1" color="#000000">.: ‌دسترسی سریع :. </font></p>
      <?php
		   $i=1;
		   foreach($info as $row)
		   {
				echo'
				<p align="right" ><a href="'.base_url().'index.php/welcome/show_menu/'.$row['id_link'].'" target="_self">
				  '.$row['Name_link'].' 
				</a></p>';
				$i++;
		   }
	   ?>
       <p align="right" ><a href="<?php echo base_url() ?>index.php/welcome/user">ثبت نام</a></p>
        <p align="right" ><a href="<?php echo base_url() ?>index.php/welcome/albom">آلبوم تصاویر</a></p>
    </div>
    <div class="clr">
    
   
    </div>
</div>

<div  align="center">
<p ><font color="#FF7D7D" size="2"> www.Iranian.ir  .: از انتخابتون متشکریم :.   .: در صورت تمایل ما رو به دوستان خود معرفی کنید :.  </font></p>
</div>

<script src="<?php echo base_url() ?>assets/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/scrollSlider.jquery.js"></script>
<script>
    $('#scrollSlider').scrollSlider({thumbSize:138});
</script>
</body>
</html>