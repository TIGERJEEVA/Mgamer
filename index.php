<!DOCTYPE html>
<?php

function Sql_data($Table){
require 'php/conn.php';
$qury = "SELECT * FROM ".$Table;
$responce=$conn->query($qury);
if ($responce->num_rows > 0) {
    // output data of each row
  $jsonArray = array();
  while($row =$responce->fetch_assoc()){
       $jsonArray[] = $row;
    }
  	return $jsonArray;
  }else {
  	return null;
  }
}
?>
<html>
    <head>
    	   <script src="js/js.cookie.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SwipeScreen</title>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        	<p class="title">SwipeScreenTechnology</p>
        <div>
          <img src="src/logo.png" alt="" />
        </div>

<div id="form">
Token: <input id="input" type="text" name="token">
<button id="button">Click here</button>
</div>
<div id="di">
   <p id="piano">Piano Game</p>
   <p id="piano_T"></p>
   <p id="piano_Ti"></p>
   <p id="piano_Tq"></p>
   </div>
<h3>Welcome to </h3>
<ul id="User_list">
</ul>


<div id="responce"></div>

<script>
	var Admin=<?php echo json_encode(Sql_data("Admin")); ?>;
	var UserInfo=<?php echo json_encode(Sql_data("UserInfo")); ?>;

</script>
<script src="js/index.js"></script>
    </body>
</html>
