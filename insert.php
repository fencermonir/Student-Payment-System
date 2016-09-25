<?php

    $student_name=$_POST['std_name'];
    $student_id=$_POST['std_id'];

    //  echo $student_name."<br>";
    //  echo  $student_id;

include 'sql.php';
save($student_name,$student_id);



 ?>
