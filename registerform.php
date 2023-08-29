<?php
include('./include/conn.php');

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $er_no = $_POST['er_no'];
   $course = $_POST['course'];
   $branch = $_POST['branch'];
   $collage = $_POST['collage'];
   $photo = $_FILES['photo'];

   $photo_name = $_FILES['photo']['name'];
   $photo_size = $_FILES['photo']['size'];
   $photo_tmp = $_FILES['photo']['tmp_name'];
   $photo_type = $_FILES['photo']['type'];

   $file_ext = explode('.', $photo_name);
   $file_ext_check = strtolower(end($file_ext));
   $valid_file_ext = array('png', 'jpg', 'jpeg');

   if (in_array($file_ext_check, $valid_file_ext)) {

      $photo_store = "photo/" . $photo_name;

      move_uploaded_file($photo_tmp, $photo_store);



      //    $query = "INSERT INTO 'registerform'('sr_no', 'unique_id', 'name', 'gender', 'contact', 'email', 'er_no', 'course', 'branch', 'collage','photo') VALUES (NULL, NULL, '$name',
      //   '$gender', '$contact', '$email', '$er_no', '$course', '$branch', '$collage','$photo_name')";

      $query = "INSERT INTO `registerform`(`sr_no`, `unique_id`, `name`, `gender`, `contact`, `email`, `er_no`, `course`, `branch`, `collage`, `photo`) VALUES (NULL,'NULL','$name','$gender','$contact','$email','$er_no','$course','$branch','$collage','$photo_name')";

      $result = mysqli_query($conn, $query);



      if ($result) {
?>
         <script>
            alert('Register Succesfully');
            window.location = '';
         </script>


<?php
      } else {

         echo "fail";
      }
   }
}
mysqli_close($conn);


?>