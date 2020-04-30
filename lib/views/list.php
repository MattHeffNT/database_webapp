<?php
   //Print the list of products
   if(!empty($list)){
     echo "
     <div class='container-fluid'>

       <h2>Products</h2> <br>
     
     </div>
     
     ";

    // open table html element 
    echo "<table><tr>";
    foreach($list[0] as $key  => $art) {
      //  $productNo = htmlspecialchars($art['ProductNo'],ENT_QUOTES, 'UTF-8');
      //  $cat = htmlspecialchars($art['Category'],ENT_QUOTES, 'UTF-8');
      //  $colour = htmlspecialchars($art['Colour'],ENT_QUOTES, 'UTF-8');
      //  $desc = htmlspecialchars($art['Description'],ENT_QUOTES, 'UTF-8');
      //  $price = htmlspecialchars($art['Price'],ENT_QUOTES, 'UTF-8');
      echo " <th>{$key}</th>";    
   }
   echo "<th> </th>";
   echo "</tr> <tr>";

   foreach($list[0] as $key  => $art) {
    echo " <td> {$art} </td>";    
   }
   echo '<td><a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a></td>';
   echo "</tr>";

  }

  else {
    echo "<h2>List is empty</h2>";
  }

?>