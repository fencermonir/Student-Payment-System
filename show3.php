    <?php
        include 'db.php';
       

          $sql = "SELECT * FROM s_form";
          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
		 echo '<center><table>';
          echo  '<tr>';
          echo   '<th>First Name</th>';
          echo    '<th>Last Name</th>';
          echo    '<th>Id No</th>';
          echo    '<th>Email</th>';
        //  echo    '<th>Phone</th>';
          echo    '<th>Intake</th>';
         // echo    '<th>Dept</th>';
         // echo    '<th>Password</th>';
          echo    '<th>Action</th>';

          
          echo   '</tr>';


            while($row = mysqli_fetch_assoc($result))
            {
                  echo '<tr>';
                    echo '<td>';
                      echo $fn=$row["fn"];
                    echo '</td>';
                    echo '<td>';
                        echo $ln=$row["ln"];
                    echo '</td>';
					echo '<td>';
                      echo $id=$row["id"];
                    echo '</td>';
					echo '<td>';
                      echo $em=$row["em"];
                    echo '</td>';
					//echo '<td>';
                       $ph=$row["ph"];
                  //  echo '</td>';
					echo '<td>';
                      echo $inn=$row["inn"];
                    echo '</td>';
					//echo '<td>';
                      $de=$row["de"];
                   // echo '</td>';
					//echo '<td>';
                       $pass=$row["pass"];
                    //echo '</td>';
                  echo '<td>';
                   $update_link="update.php?fn=$fn&ln=$ln&id=$id&em=$em&ph=$ph&inn=$inn&de=$de&pass=$pass";
                   $delete_link="delete.php?fn=$fn&ln=$ln&id=$id&em=$em&ph=$ph&inn=$inn&de=$de&pass=$pass";
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
	 