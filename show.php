    <?php
        include 'db.php';

          $sql = "SELECT * FROM c_form";
          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
          echo '<center><table>';
          echo  '<tr>';
          echo   '<th>FuLl Name</th>';
          echo    '<th>Phone Number</th>';
          echo    '<th>Address</th>';
          echo    '<th>E-mail</th>';
          echo    '<th>Message</th>';
         
          echo   '</tr>';


            while($row = mysqli_fetch_assoc($result))
            {
                  echo '<tr>';
                    echo '<td>';
                      echo $name=$row["FN"];
                    echo '</td>';
                    echo '<td>';
                        echo $id=$row["Ph"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["Ad"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["Em"];
                    echo '</td>';
					echo '<td>';
                      echo $name=$row["Me"];
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
