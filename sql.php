<?php

      function save($name,$id)
      {
        include('dbcon.php');

        $sql = "INSERT INTO student VALUES ('$name','$id')";

        if (mysqli_query($conn, $sql))
        {
            echo "New record created successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $conn->close();
      }


      function update($name,$id)
      {
        include('dbcon.php');

        $sql = "UPDATE student SET name=$name WHERE id=$id";

        if (mysqli_query($conn, $sql))
        {
            echo "Record updated successfully";
        }
        else
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
      }
      function delete($id,$name)
      {
          include('dbcon.php');
        $sql = "DELETE FROM test WHERE id=$id and name=$name";
          if (mysqli_query($conn, $sql)) {
              echo "Record deleted successfully";
          } else {
              echo "Error deleting record: " . mysqli_error($conn);
          }

          mysqli_close($conn);
      }

?>
