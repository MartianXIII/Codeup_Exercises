<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Contacts</title>
  </head>
  <body>
    <h3>Search the Contact Database</h3>
    <p>You may seach by first or last name</p>
    <form method="post" action="search.php?go" id="searchform">
      <input type="text" name="name">
      <input type="submit" name="submit" value="Search">
    </form>
    <<?php
    //HACK:
    if(isset($_POST['submit'])){//dis Supper Global Array POST
    if(isset($_GET['go'])){
    if(preg_match("^/[A-Za-z]+/", $_POST['name'])){
      $name=$_POST['name'];
    }

    } else {
      echo "<p>Please insert a search query</p>";
    }
    }
    ?>
  </body>
</html>
