   <?php
      if(isset($_POST['paid'])){
      if(isset($_POST['admin'])){
          
          $update_query="UPDATE signup SET paid='PAID' WHERE s_roll='$db_user'";
              $res=mysqli_query($connection,$update_query);
      }
      }
          else{
              $update_query="UPDATE signup SET paid='NOT PAID' WHERE s_roll='$db_user'";
               $res=mysqli_query($connection,$update_query);
          }
      
      
      
      ?>
      
     
    
   
  