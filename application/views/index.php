<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>صنایع و هنرهای دستی اصفهان</title>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
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
		   foreach($info as $row)
		   {
		       ?>
                <li>
                    <a href="<?php echo base_url() . 'index.php/welcome/show_menu/' . $row['id_link']; ?>" target="_self">
                        <span><?php echo $row['Name_link']; ?></span>
                    </a>
                </li>
            <?php
		   }
	   ?>
        <li><a href="<?php echo base_url() ?>index.php/welcome/user">ثبت نام </a></li>
        <li><a href="<?php echo base_url() ?>index.php/welcome/albom">گالری تصاویر محصولات </a></li>

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
  <div class="mainbar">
      <div class="article" >

      <?php
			  $i=1;
			  foreach($query as $row)
			  {
				   if($row['title']!= '')
					echo  '<h2><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">'.$row['title'].'</font></p></h2>
					<p>&nbsp;</p>
					';

					if($row['title2']!= '')
					echo  '<p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">'.$row['title2'].'</font></p>
					<p>&nbsp;</p>
					';

					echo '
				   <p  align="right">'.$row['description'].'</p>';

					if($row['image']!= '')
						echo '<p align="center"><img src=" '.base_url().'images/'.$row['image'].'" width="'.$row['Width'].'" height="'.$row['height'].'" alt=""/></p>
						<p>&nbsp;</p>';

				  $i++;
  				}
  	?>
         </div>

      <div class="article">
        <div class="clr"></div>
        <p align="center" class="post-data"><img src="<?php echo base_url() ?>images/images-10.jpg" width="100" height="75" alt=""/><img src="<?php echo base_url() ?>images/images-7.jpg" width="100" height="75" alt=""/><img src="<?php echo base_url() ?>images/images-3.jpg" width="100" height="75" alt=""/><img src="<?php echo base_url() ?>images/images-2.jpg" width="100" height="75" alt=""/><img src="<?php echo base_url() ?>images/images-8.jpg" width="100" height="75" alt=""/></p>
      </div>
    </div>

    <div class="sidebar">
      <div class="gadget">
        <h2 class="star"><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: لینک‌ها :. </font></h2>
        <div class="clr"></div>
        <ul class="sb_menu">
        <?php
		   $i=1;
		   foreach($info as $row)
		   {
				echo'
				<li class="active">
            <div align="right"><a href="'.base_url().'index.php/welcome/show_menu/'.$row['id_link'].'" target="_self">
				 <span> '.$row['Name_link'].'</span>
				</a></div>
          </li>';
				$i++;
		   }
	   ?>
        <li class="active">
            <div align="right"><a href="<?php echo base_url() ?>index.php/welcome/user">ثبت نام </a></div>
        </li>
        <li class="active">
        <div align="right"><a href="<?php echo base_url() ?>index.php/welcome/albom">آلبوم تصاویر </a></div>
        </li>
        </ul>
      </div>

      <div class="gadget">
        <h2 class="star"><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: ‌مطالب مرتبط :. </font></h2>
        <div class="clr"></div>
        <ul class="ex_menu">

        <?php
		   $i=1;
		   foreach($info2 as $row)
		   {
				echo'
				   <li>
					<div >
					  <div align="right"><a href="'.base_url().'index.php/welcome/handicraft/'.$row['id_link2'].'" target="_self">
					  
						 <span> '.$row['Name_link2'].'</span>
						</a></div>
					</div>
				  </li>';
				$i++;
		   }
	   ?>


        </ul>
      </div>


      <div class="gadget">
        <h2 class="star"><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: ورود به سایت :. </font></h2>
        <div class="clr"></div>
        <p align="center"><font size="2">برای ورود به سایت لطفا نام کاربری و پسورد خود را وارد کنید </font>
       <form action="<?php echo base_url()?>index.php/welcome/search_user/"  method="POST">
       <table  cellspacing="2" cellpadding="2" border="0" align="center">
       <tr>
          <td align="right"><input type="text" name="username" /></td>
          <td align="right">:نام کاربری</td>
        </tr>
        <tr>
          <td align="right"><input type="password" name="password" /></td>
          <td align="right"> :رمز ورود</td>
        </tr>
        <tr>
          <td align="right"><input type="submit" value="ورود" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="right"><?php echo validation_errors(); ?></td>
          </tr>
          <tr><td align="right"><a href="<?php echo base_url() ?>index.php/welcome/user"><font size="2" color="#000000"> در سایت عضو نیستید؟ </font></a></td></tr>

       </table>
       <p  align="center" class="spec"><font size="4" color="#FF0000">
	   <?php

			$UN= $this->session->userdata('username');
			if ($UN !='')
			{
				echo  $this->session->userdata('username');
				echo '<a href="'.base_url().'index.php/welcome/log_out/"> خروج  </a>';
				$this->session->set_userdata('Not_username', '');
			}
			$N= $this->session->userdata('Not_username');
			if ($N !='')
			{
				echo  $this->session->userdata('Not_username');
				$this->session->set_userdata('username', '');
			}
		?>
        </font></p>
        </form>
      </div>


    </div>

    <div class="clr"></div>
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
</div>
<!-- END PAGE SOURCE -->
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