<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>صنایع و هنرهای دستی اصفهان</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url() ?>style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #FFF;
}
</style>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/cuf_run.js"></script>

</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header_block">
    <div class="header_resize">
      
      <div  class="menu_nav">
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
  </div></div>
  <div align="center">
  <p >&nbsp;</p>
  
  
      <?php
			  $i=1;
			  foreach($query2 as $row)
			  {
				   if($row['title']!= '')
					echo  '<p align="center"><font face="Tahoma, Geneva, sans-serif" size="+4">'.$row['title'].'</font></p>
					';
					
					if($row['title2']!= '')
					echo  '<p align="center"><font size="4">'.$row['title2'].'</font></p>
					';
					
					echo '
					<blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <p dir="RTL">&nbsp;</p>
          <blockquote>
            <blockquote>
              <blockquote>
			  
				   <p align="right" dir="RTL">'.$row['description'].'</p>
				   
				    </blockquote>
            </blockquote>
          </blockquote>
         
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
				<p>&nbsp;</p>
				   ';
				   
					if($row['image']!= '')
						echo '
						<p>&nbsp;</p>
						<p align="center"><img src=" '.base_url().'images/'.$row['image'].'" width="'.$row['Width'].'" height="'.$row['height'].'" alt=""/></p>
								<p>&nbsp;</p>';
						
				  $i++;
  				}
  	?>
  
  
  
   
 				
</div>
      <p align="center"><font face="Tahoma, Geneva, sans-serif" size="4">
     <?php
			
			$UN= $this->session->userdata('username');
			if ($UN !='')
			{
				echo $this->session->userdata('username');
				echo '<a href="'.base_url().'index.php/welcome/log_out/">  خروج </a>';
				
			}
		?>
        </font></p>
     
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
		   foreach($info2 as $row)
		   {
				echo'
				<p align="right" ><a href="'.base_url().'index.php/welcome/show_menu2/'.$row['id_link2'].'" target="_self">
				  '.$row['Name_link2'].' 
				</a></p>';
				$i++;
		   }
	   ?>
    </div>
 
 
    <div class="clr">
   
    <p align="center"></p>
    </div>
  </div>
</div>

<div  align="center">
<p ><font color="#FF7D7D" size="2"> www.Iranian.ir  .: از انتخابتون متشکریم :.   .: در صورت تمایل ما رو به دوستان خود معرفی کنید :.  </font></p>
</div>
</body>

</html>