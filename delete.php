
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="master.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
        <div class="form-style-2">
          <div class="form-style-2-heading">Provide your information</div>

          <form action="" method="post">
              <label for="field1"><span>Name</span>
                <input type="text" class="input-field" name="std_name" value="<?php echo $_GET['id'];?>"/>
              </label>
              <label for="field2"><span>ID</span>
                <input type="text" class="input-field" name="std_id" value="<?php echo $_GET['amount'];?>" readonly/>
              </label>
              <label>
                <span>&nbsp;</span><input type="submit" value="Update" />
              </label>
          </form>

        </div>
  </body>
</html>
