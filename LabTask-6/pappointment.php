
<?php
   include('include/dnav.php');
  
?>





  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Dashbord</title>
  	
  	<style type="text/css" media="screen">
  		.*{
  			padding: 0px;
  			margin: 0px;
  		}
  		.text{
  			font-family: "Montserrat",sans-serif; 
  			padding-left: 40px;
  		}

      .mainbody{
       
        margin-left: 200px;
        color: black;
        padding: 10px;


          
       
      }
  		

      

      
     
  	</style>



  </head>
  <body>

<!-- ======================== Start include side bar====================== -->
  <div align="left" class="sidebar">
  	<?php 
        include('include/psidebar.php');
     ?>
  </div>
 <!-- ========================End include side bar====================== -->

 <!-- ========================Start Dashbord main body====================== -->
<div align="center" class="mainbody">

  <a href="#">My Apointment </a>

  <br>
  <br>

  <table border="1">
    
    <thead>
      <tr>
        <th>id</th>
        <th>doctor name</th>
        <th>doctor email</th>
        <th>date</th>
        <th>phone</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>sium</td>
        <td>sium@gmail.com</td>
        <td>01/02/2021</td>
        <td>01956038514</td>
       
      </tr>
      <tr>
        <td>02</td>
        <td>sium</td>
        <td>sium@gmail.com</td>
        <td>01/02/2021</td>
        <td>01956038514</td>
       
      </tr>
    </tbody>
  </table>



</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <!-- ========================End Dashbord main body====================== -->

  	
  </body>
  </html>


 <?php  
   include('include/footer.php');
?>

