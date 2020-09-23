<?php
 include_once "database.php";

 if(isset($_POST["insert"]))
 {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $a_id=$_POST['a_id'];
      $query = "UPDATE images SET imag='$file' WHERE a_id='$a_id'";

      if(mysqli_query($conn, $query))
      {
           echo '<script>alert("Image updated into Database")</script>';
        header("location:r_album.php");
      }
      else {
        echo "Enter the correct Album ID";

      }

 }
 ?>
 <!DOCTYPE html>
 <html>
      <body>
           <br /><br />
           <div class="container" style="width:500px;">
                <h3 align="center">Update Image</h3>
                <br />
                <form method="post" enctype="multipart/form-data">
                     <p>Enter Album ID<input type="number" name="a_id" ></p>
                     <input type="file" name="image" id="image" />
                     <br />
                     <input type="submit" name="insert" id="insert" value="Insert" />
                </form>
                <br />
                <br />
                <table class="table table-bordered">

                         <center><a href="r_album.php">Back</a></center>

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
