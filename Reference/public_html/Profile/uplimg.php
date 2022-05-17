<?php
$response = 0;
if(isset($_FILES['photo']['name'])) {
   $filename = $_FILES['photo']['name'];
   $location = 'images/'.$filename;
   if(move_uploaded_file($_FILES['photo']['tmp_name'],$location)) {
         $response = "Image was added";
   } 
}
echo $response;
?>