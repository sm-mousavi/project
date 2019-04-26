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
        <h2><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: کاربران عضو :.</font></p></h2>
        <p align="right"><font color="#750000">
        <form  action="<?php echo base_url() ?>index.php/welcome/admin/" method="POST">
        <input type="submit" value="نمایش" />
        <input type="text" name="limit" id="limit" />
        
        <label>
        <font color="#640000">:تعداد کاربران</font></label>
        
        </form>
        </font></p>
        <p align="center" >
        <table width="100%" border="0"  align="center">
        
        <font size="4">
          <tr align="right" bgcolor="#990000"  >
            <td align="center"><font size="3" color="#FFFFFF" >حذف</font></td>
            <td><font size="3" color="#FFFFFF" >آدرس</font></td>
            <td><font size="3" color="#FFFFFF" >شهر</font></td>
            <td ><font size="3" color="#FFFFFF" >ایمیل</font></td>
            <td><font size="3" color="#FFFFFF" >تلفن</font></td>
            <td><font size="3" color="#FFFFFF" >نام کاربری</font></td>
            <td><font size="3" color="#FFFFFF" >نام خانوادگی</font></td>
            <td><font size="3" color="#FFFFFF" >نام</font></td>
          </tr>
          </font>
         
          
          <?php
          $i=1;
          foreach($info4 as $row)
          {
			  if($row['access_level']=='2')
			  {
				  echo '<font size="2" > <tr align="center" bgcolor="#FFE6E8">
					<td align="center">
					<a href="'.base_url().'index.php/welcome/delete_data_user/'.$row['id'].'" target="_self">
					<img src=" '.base_url().'images/delete.jpg " alt="حذف"/>
					</a>
					</td>
					<td>'.$row['Address'].'</td>
					<td>'.$row['City'].'</td>
					<td>'.$row['Email'].'</td>
					<td>'.$row['Phone'].'</td>
					<td>'.$row['UserName'].'</td>
					<td>'.$row['LName'].'</td>
					<td>'.$row['FName'].'</td>
				  </tr> </font>';
			  }
              $i++;
          }
          ?>
        </table>
        </p>
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