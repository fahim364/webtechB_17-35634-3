
<?php
   include('include/nav.php');
  
?>
<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <link rel="stylesheet" type="text/css" href="css/Style.css">
      </head>  
      <body>  

        <br>
        <br>
        <br>
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table  border="1" class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>EMAIL</th>  
                               <th>USER NAME</th>  
                               <th>PASS</th>  
                               <th>CONFIRM pASS</th>   
                               <th>address</th>   
                          </tr> 

                          <?php 
                              include('Controller/view.php');
                           ?> 
                           
                     </table>  
                   </div>
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
      </body>  
 </html> 
  



 <?php  
   include('include/footer.php');
?>

