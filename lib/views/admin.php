<?php  
echo '
<h1> Admin Page </h1>

<p> Below is the content </p>
<hr>

<form action="/action_page.php" method="get">

';
require PARTIALS."/form.name.php";
require PARTIALS."/form.password.php";

echo '<input type="submit" value="Submit">';

// once submitted, show user name in top right corner
// they can change products
// add news stories

?>
 


