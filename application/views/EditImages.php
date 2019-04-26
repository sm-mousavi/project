<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>مدیر سایت</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<script type="text/javascript" src="js/cuf_run.js"></script>
<link href="<?php echo base_url() ?>style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
 
      
      <div align="center">
        <h2><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: جدول آلبوم تصاویر :.</font></p></h2>
   <p align="center" >
   
   <table width="50%" border="0"  align="center">
        
        <font size="4">
          <tr align="center" bgcolor="#990000"  >
            <td><font size="3" color="#FFFFFF" >حذف</font></td>
            <td><font size="3" color="#FFFFFF" >عرض</font></td>
            <td><font size="3" color="#FFFFFF" >طول</font></td>
            <td><font size="3" color="#FFFFFF" >نام عکس</font></td>
            <td><font size="3" color="#FFFFFF" >عکس</font></td>
          </tr>
          </font>
          <?php
          $i=1;
          foreach($info11 as $row)
          {
              echo '<font size="2" > <tr align="center" bgcolor="#FFE6E8">
				<td>
				<a href="'.base_url().'index.php/welcome/delete_data_image/'.$row['id'].'" target="_self">
					<img src=" '.base_url().'images/delete.jpg " alt="حذف"/>
				</a>
				</td>
                <td>'.$row['width'].'</td>
				<td>'.$row['height'].'</td>
				<td>'.$row['Name'].'</td>
				<td><p><img src=" '.base_url().'img/'.$row['Name'].'" width="110" height="70" /></p></td>
              </tr> </font>';
              $i++;
          }
          ?>
        </table>
   
   </p>
    <p align="center" >
        <p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: آپلود عکس :.</font></p>
        
  <form action="<?php echo base_url(); ?>/index.php/Welcome/save_pic" enctype="multipart/form-data" method="POST" role="form">
  <table  table cellspacing="2" cellpadding="2" border="0" align="center" >
 				 <tr>
				<td align="center"><input type="text" name="update_height"/></td>
				<td align="center" bgcolor="#990000"><font size="2" color="#FFFFFF" >:طول</font></td>
				</tr>
				<tr>
                <td align="center"><input type="text" name="update_width" /></td>
				<td align="center" bgcolor="#990000"><font size="2" color="#FFFFFF" >:عرض</font></td>
				</tr>
                <tr>
                <td align="center"><input type="file" name="PicFileName" size="20" value="<?php echo set_value('PicFileName')?>"/></td>
    			<td align="center"><input type="submit" value="آپلود" /></td>
                </tr>
    
  </table>
  </form>
	<p >&nbsp;</p>
    
    
   
        
</p>
      </div>
     
    </div>
    <div class="sidebar">
     
    </div>
    <div class="clr"></div>
  </div>
     <div class="fbg">
    <div class="col c1">
      
      
    </div>
    <div class="col c2">
      
      
    </div>
    <div class="col c3">
      
      
      
    </div>
    <div class="clr">
    <p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1" color="#000000">.: ‌دسترسی سریع :. </font></p>
    
     <p align="center" >
     <?php
		   $i=1;
		   foreach($info as $row)
		   {
				echo'
				<a href="'.base_url().'index.php/welcome/show_menu/'.$row['id_link'].'" target="_self">
				 <span>  .: '.$row['Name_link'].' :.  </span>
				</a>';
				$i++;
		   }
	   ?>
    <a href="<?php echo base_url() ?>index.php/welcome/user">  .:  ثبت نام  :.  </a>
        <a href="<?php echo base_url() ?>index.php/welcome/albom">  .:  آلبوم تصاویر :.   </a>
        </p>
    
    
    <p align="center"></p>
    
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<div  align="center">
<p ><font color="#FF7D7D" size="2"> www.Iranian.ir  .: از انتخابتون متشکریم :.   .: در صورت تمایل ما رو به دوستان خود معرفی کنید :.  </font></p>
</div></body>

</html>