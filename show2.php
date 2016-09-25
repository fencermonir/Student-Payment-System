    <?php
        include 'db.php';

          $sql = "SELECT * FROM p_form";
          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
          echo '<center><table>';
          echo  '<tr>';
          echo   '<th>check</th>';
          echo    '<th>Amount</th>';
          echo    '<th>Name</th>';
          echo    '<th>Id</th>';
          echo    '<th>Intake</th>';
          echo    '<th>Semester</th>';
          echo    '<th>Program</th>';
         
          echo   '</tr>';


            while($row = mysqli_fetch_assoc($result))
            {
                  echo '<tr>';
                    echo '<td>';
                      echo $name=$row["ch"];
                    echo '</td>';
                    echo '<td>';
                        echo $id=$row["am"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["na"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["id"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["inn"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["se"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["pr"];
                    echo '</td>';
                  echo '<td>';
                   $update_link="update.php?id=$id&name=$name";
                   $delete_link="delete.php?id=$id&name=$name";
                       echo '<a class="up-btn" href="'.$update_link.'">Update</a>
                       <a class="del-btn" href="'.$delete_link.'">Delete</a>';
                    echo '</td>';


                  echo '</tr>';


            }
              echo '</table></center>';
        }
        else
        {
            echo "No result Found.";
        }

        mysqli_close($conn);

      ?>
