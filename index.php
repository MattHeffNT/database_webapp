<?php

DEFINE("LIB",$_SERVER['DOCUMENT_ROOT']."/project/lib");
DEFINE("DB",$_SERVER['DOCUMENT_ROOT']."/project/lib/db");
DEFINE("VIEW",$_SERVER['DOCUMENT_ROOT']."/project/lib/views");
DEFINE("PARTIALS",VIEW."/partials");

require LIB."/views/functions.php";
require LIB.'/db/db.php'; 

// layouts and content

// $layout = 'standard';
// $layout = 'mobile';
$layout = 'home';

// form content would be behind admin

// $content = 'list';
// $content = 'create-user';
// $content = 'form.html';
// $content = 'shit.html';
// $content = 'home.html';

require VIEW."/{$layout}.layout.php";
$query = $_SERVER['QUERY_STRING'];

// home page //
if (!isset($_GET[$query])){
   // echo '<h1>Test </h1>';
   require VIEW. '/Home/index.html';
}

// admin
if(isset($_GET['admin'])){
   
   require VIEW. '/admin.php';

}

// if(isset($_GET['new'])){
//     require LIB.'/form.html.php';
// 	exit();
// }

// Get List View (want to chuck this onto home page in card view maybe)

if(isset($_GET['list'])){
    $errors = array();
    $db = get_db($errors);   
    if(!$db){
       $errors[] = "Can't get database connection.";
       require LIB.'/db_error.html.php';
       exit();
    }
    $list = null; 
    try{
       $query = "SELECT Category,Colour,Description, Price, ProductNo,Size FROM product";
       $statement = $db->prepare($query);
       $statement -> execute();
       $list = $statement->fetchall(PDO::FETCH_ASSOC);
       require VIEW.'/list.php';
   }

   catch(PDOException $e){
    $errors[] = "Problem with query: {$e->getMessage()}.";
    require LIB.'/db_error.html.php';
    exit();

 } 
   exit();
}

// if(isset($_POST['_method']) && $_POST['_method']=='post'){
//    if(!empty($_POST['fname']) && !empty($_POST['sname']) && !empty($_POST['games'])){
//          $db = get_db();  
//          if(!$db){
//             set_session_message("flash","Problem with database - new player cannot be created");
//             header('Location: index.php?new');
//             exit();            
//          }
//          $fname = $_POST['fname'];
//          $sname = $_POST['sname'];
//          $games = $_POST['games'];
//          try{   
//            $query = "INSERT INTO players (fname,sname,games) VALUES (?,?,?)";
//            $statement = $db->prepare($query);
//            $binding = array($fname,$sname,$games);
//            $statement -> execute($binding);
//          }
//          catch(PDOException $e){
//            set_session_message("flash","Problem with database: {$e->getMessage()}");
//            header('Location: index.php?new');
//            exit();

//          }
//          set_session_message("flash","New player has been created.");
//          header('Location: index.php?new');       

//          exit();
//     }
//     else{
//        set_session_message("flash","Unable to create new player. Did you fill out all the fields?");
//        header('Location: index.php?new');
//        exit();
//     }

// }

?>
