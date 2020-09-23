<!DOCTYPE html>
<html>
     <head>
          
<?php

 include_once "database.php";
 if(isset($_POST["insert"]))
 {
      $b_code=$_POST['a_id'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "INSERT INTO images (a_id,imag) VALUES ('$b_code','$file')";

      if(mysqli_query($conn, $query))
      {
           echo '<script>alert("Image Inserted into Database")</script>';
        header("location:r_album.php");
      }
 }
 ?>

</head>
<body>
  <?php
     $a_id=$_GET['a_id'];
   ?>
   <style>
   *{
     font-family:'Roboto Slab';
   }
   h1{
       padding: 10px;
       text-align: center;
       font-size: 40px;
       color: #414141;
   }
   tr,td{
     font-size: 140%;
   }
   tr,td input[type="text"]
   {
     font-size: 100%;
   }

 input[type="submit"]:hover
 {
   background-color: #414141;
   color: red;
 }

 tr,td input[type="submit"]
   {
       border: inline;
       outline: inline;
       height: 50px;
       width: 200px;
       color: black;
       font-size: 18px;
       border-radius: 20px;
   }

   </style>
     <br /><br />
     <div style="width:500px;">
          <h3 align="center">Insert Image</h3>

          <br />
           <form method="post" enctype="multipart/form-data">
             <tr><td>Album ID:</td><td><input type="text" name="a_id" value="<?php echo $a_id; ?>" readonly></td></tr>
                     <input type="file" name="image" id="image" />
                     <br />
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
                </form>
                     <tr>

                </table>
           </div>
      </body>

 </html>
 <script>
 $(document).ready(function(){
      $('#insert').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>
