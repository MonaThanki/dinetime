<?php  

    include 'Config.php';

 if(isset($_POST["c_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM CATEGORY WHERE ct_id = '".$_POST["c_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  
?>
<?php
           $output .=  "  

               <div class='form-group'>  
                    <label for='i_id'>Category Id</label>
                    <input type='text' class='form-control' name='i_id' id='i_id' value='{$row["ct_id"]}'>                          
               </div>
          
               <div class='form-group'>               
                    <label for='i_name'>Category Name</label>               
                    <input type='text' class='form-control' name='i_name' id='i_name' value='{$row["c_name"]}'>                    
               </div>
              
           ";  

      }  
      $output .= '  
           </table>  
      </div>  
      ';  
?>
<?php
      echo $output; 
 
 }  
 ?>
 