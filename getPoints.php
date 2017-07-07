<?PHP
include_once("connection.php");

//echo "this is getPoints.php";



if(isset($_POST['txtUserName'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    $userName = ($_POST['txtUserName']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT * FROM users
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    while ($row = $result->fetch_assoc()) {
    printf ("%d, %d, %d\n", $row["CurrentPoints"], $row["pointsUntilNextLevel"], $row["currentLevel"]);
       // echo $row["CurrentPoints"];
}
    

    
}    
?>