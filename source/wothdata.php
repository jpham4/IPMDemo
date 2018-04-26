<?php include ('authenticate.php');
// if (!isLoggedIn()) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: login.php');
// }
//setting header to json
header('Content-Type: application/json');

//query to get data from the table
// $query = sprintf("SELECT userid, facebook, twitter, googleplus FROM followers");

if (isset($_SESSION['user'])){
$userID = $_SESSION['user']['id'];
}else {
$userID = '0';
}



//$userID = mysqli_query("SELECT id FROM Account WHERE user_type='users'" .$_SESSION['id']);
$query = sprintf("SELECT date_posted, worth from portfolioHistory where portfolioID = ".$userID);

//execute query
$result = $db->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$db->close();

//now print the data
print json_encode($data);
// print (String)$userID;
// print "hellooooo";
// print (int)$userID;
?>