<?PHP
include_once("connection.php");

//echo "this is getPoints.php";



if(isset($_POST['txtFirstName']) && isset($_POST['txtLastName']) && isset($_POST['txtPassword'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    $firstName = ($_POST['txtFirstName']);
    $lastName = ($_POST['txtLastName']);
    $password = ($_POST['txtPassword']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT * FROM users
        WHERE FName = '$firstName' and LName = '$lastName' and Password = '$password'";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    while ($row = $result->fetch_assoc()) {
    printf ("%d\n", $row["UserId"]);
       // echo $row["CurrentPoints"];
}
    

    
}    
?>