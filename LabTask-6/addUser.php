
<?php
   include('include/dnav.php');
  
?>



<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      
      
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter email</label>";  
      } else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter User name</label>";  
      }
      elseif (strlen($_POST['uname']) < 6) {
             $error = "<label class='text-danger'>Your User Name minimum should have 6 letter.</label>"; 
      }

      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter  Password</label>";  
      } elseif (strlen($_POST['pass']) < 6) {
             $error = "<label class='text-danger'>Your password minimum should have 6 digit.</label>"; 
      }

      else if(empty($_POST["cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirme your Password</label>";  
      } 
      else if ($_POST['pass']!= $_POST['cpass']) {
         $error = "<label class='text-danger'>Password not match</label>"; 
      } 

      else if(empty($_POST["address"])){

          $error = "<label class='text-danger'>Enter address</label>";  
      }

       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'     =>     $_POST["email"]  ,
                     'uname'     =>     $_POST["uname"]  ,
                     'pass'     =>     $_POST["pass"]  ,
                     'cpass'     =>     $_POST["cpass"]  ,  
                     'address' =>  $_POST["address"],
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Dashbord</title>
  	
  	<style type="text/css" media="screen">
  	 .box{
                  /* margin: 60px; */
                  
                  height: 170px;
                  width: 375px;
                
              }

              .box2{
                  height: 20px;
                  width: 180px;
              }
              .text-danger{
                color: red;
              }
              .submitbotton{
                background-color:#e72028;
              }
              .submit{
      background-color: #e7665e;
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
<div align="center" class="mainbody">

 <div align="center" class="mainbody">  
           <br />  
           <div align="center" class="container" style="width:500px;">                 
                <form method="post" > 

                <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
             

                 
               
                 <h1> Add User</h1>


                       
                     <form method="post">
                          <div class="box" >
                             
                           
                             
                            <div align="right" >
                               <br>
                 
                              <input type="text" name="name" class="box2" placeholder="Name" style="height: 30px;width:290px;border:2px solid black">
                              <br>
                              <br>
                  
                              <input type="email" name="email" class="box2"  placeholder="Email" style="height: 30px;width:290px;border:2px solid black">
                              <br>
                              <br>

                      
                              <input type="text" name="uname" class="box2"  placeholder="User Name" style="height: 30px;width:290px;border:2px solid black">
                              <br>
                              <br>

                     
                              <input type="password" name="pass" class="box2"  placeholder="Password" style="height: 30px;width:290px;border:2px solid black">
                              <br>
                              <br>

                              
                              <input type="password" name="cpass" class="box2"  placeholder="Confirme password" style="height: 30px;width:290px;border:2px solid black">
                             <br>
                             <br>

                    
                              <input type="text" name="address" class="box2" placeholder="Address " style="height: 30px;width:290px;border:2px solid black">
                              <br>
                              <br>

                                


                              

                          
                              <input class="submit" type="Submit" name="submit" style="height: 40px;width:190px;font-size:15px ;color:white;border:none"> 
                              <input  class="submit" type="reset" name="reset" style="height: 40px;width:100px;font-size:15px ;color:white;border:none">
                              
                             <br>
                             
                              
                               </div> 
                              
                             

                              <?php  
                               if(isset($message))  
                               {  
                                    echo $message;  
                               }  
                               ?>  

                          
                          </div>

                </form>  

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
<br>
<br>
<br>

 <!-- ========================End Dashbord main body====================== -->

  	
  </body>
  </html>


 <?php  
   include('include/footer.php');
?>

