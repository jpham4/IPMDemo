<?php include ('authenticate.php');
//setting header to json
header('Content-Type: application/json');

//query to get data from the table
// $query = sprintf("SELECT userid, facebook, twitter, googleplus FROM followers");

//$userID = mysqli_query("SELECT id FROM Account WHERE user_type='users'" .$_SESSION['id']);
$query = sprintf("SELECT date_posted, worth from portfolioHistory where portfolioID = 6");

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
