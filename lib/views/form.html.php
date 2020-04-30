
<?php
  if($msg = get_session_message('flash')){
     echo "<p>{$msg}</p>";
  }
?>
<h1> Add a product </h1>
<form action='index.php' method='POST'>
 <input type='hidden' name='_method' value='post' />
 <label for='first-name'>First name</label>
 <input type='text' id='first-name' name='fname' />
 <label for='family-name'>Family name</label>
 <input type='text' id='family-name' name='sname' />
 <label for='games'>Games</label>
 <input type='text' id='games' name='games' />

 <input type='submit' value='Create new user' />
</form>


</body>
</html>