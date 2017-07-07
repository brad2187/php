<?PHP
include_once("connection.php");

//echo "this is getPoints.php";



if(isset($_POST['txtUserName']) && isset($_POST['txtPassword'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    $userName = ($_POST['txtUserName']);
    $password = ($_POST['txtPassword']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT * FROM users
        WHERE Username = '$userName' and Password = '$password'";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    while ($row = $result->fetch_assoc()) {
    printf ("%d\n", $row["UserId"]);
       // echo $row["CurrentPoints"];
}
    

    
}    
?>