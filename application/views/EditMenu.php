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
        <h2><p align="center"><font face="Tahoma, Geneva, sans-serif" size="+1">.: منو اصلی :.</font></p></h2>
  
       
       <p align="center" >
        <table width="50%" border="0" align="center" >
        
          <tr  align="center" bgcolor="#990000" >
            <td><font size="3" color="#FFFFFF" >ویرایش</font></td>
            <td><font size="3" color="#FFFFFF" >حذف</font></td>
            <td><font size="3" color="#FFFFFF" >نام صفحه</font></td>
          </tr>
          </font>
          <?php
		  
          $i=1;
          foreach($info as $row)
          {
              echo '<font size="2" > <tr align="center" bgcolor="#FFE6E8">
			  	<td>
				<a href="'.base_url().'index.php/welcome/UpdateMenu/'.$row['id_link'].'" target="_self">
					<img src=" '.base_url().'images/edit.jpg " alt="ویرایش"/>
				</a>
				</td>
				<td>
				<a href="'.base_url().'index.php/welcome/delete_link/'.$row['id_link'].'" target="_self">
					<img src=" '.base_url().'images/delete.jpg " alt="حذف"/>
				</a>
				</td>
				<td>'.$row['Name_link'].'</td>
              </tr> </font>';
              $i++;
          }
          ?>
        </table>
        </p>
       
  </div>
</p>

  </div>
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