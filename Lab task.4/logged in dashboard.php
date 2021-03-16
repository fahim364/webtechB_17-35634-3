
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
          background-image:url('');
           background-size: 100% 100% ;
           background-repeat: no-repeat;

         
       
      }
  		

      .button{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left: 70px;
        border: 3px solid black; 

        
      }
      .button1 {
        background-color: #e72028;
        font-family: "Montserrat",sans-serif;
 
      }

      
     
  	</style>



  </head>
  <body>

<!-- ======================== Start include side bar====================== -->
  <div align="left" class="sidebar">
  	<?php 
        include('include/sidebar.php');
     ?>
  </div>
 <!-- ========================End include side bar====================== -->

 <!-- ========================Start Dashbord main body====================== -->
<div  class="mainbody">

     
     
      <br>
    

    


      <div align=center>
        <h1> Admin Dashbord</h1>

         <br>
         <br>
          <br>
         <br>
         <br>
         <br>
       
      <a href="#"><button class="button button1" >Admin [ 4 ]</button></a> 
      <a href="#"><button class="button button1" >Doctor [ 20 ]</button></a> 
      <a href="#"><button class="button button1" >Patient [ 150 ]</button></a>
      <a href="#"><button class="button button1" >pharmacist [ 420 ]</button></a>

    
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
    
   
</div>
 <!-- ========================End Dashbord main body====================== -->

  	
  </body>
  </html>


 <?php  
   include('include/footer.php');
?>

