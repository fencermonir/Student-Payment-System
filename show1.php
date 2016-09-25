    <?php
        include 'db.php';

          $sql = "SELECT * FROM cash";
          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
          echo '<center><table>';
          echo  '<tr>';
          echo   '<th>ID</th>';
          echo    '<th>Amount</th>';
          
         
          echo   '</tr>';


            while($row = mysqli_fetch_assoc($result))
            {
                  echo '<tr>';
                    echo '<td>';
                      echo $id=$row["id"];
                    echo '</td>';
                    echo '<td>';
                        echo $amount=$row["amount"];
                    echo '</td>';
					
                   echo '<td>';
                   $update_link="update.php?id=$id&amount=$amount";
                   $delete_link="delete.php?id=$id&amount=$amount";
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
