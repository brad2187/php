<?PHP
include_once("connection.php");

//echo "this is getPoints.php";



if(isset($_POST['txtUserId'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    $userId = ($_POST['txtUserId']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT * FROM users
        WHERE UserId = '$userId'";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    while ($row = $result->fetch_assoc()) {
    printf ("%s,%s,%s, %d, %d, %d, %d\n", $row["FName"], $row["LName"],$row["Username"],$row["CurrentPoints"], $row["totalPoints"],$row["pointsUntilNextLevel"], $row["currentLevel"]);
       // echo $row["CurrentPoints"];
}
    

    
}    
?>