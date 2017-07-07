<?PHP
include_once("connection.php");

//echo "this is getNamesById.php";



if(isset($_POST['txtUserId0'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId0']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT FName, LName, UserId FROM `users` WHERE UserId = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%s %s, %s,\n", $row["FName"], $row["LName"], $row["UserId"]);
       // echo $row["CurrentPoints"];
        }
}  
if(isset($_POST['txtUserId1'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId1']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT FName, LName, UserId FROM `users` WHERE UserId = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%s %s, %s,\n", $row["FName"], $row["LName"], $row["UserId"]);
       // echo $row["CurrentPoints"];
        }
}
    
    if(isset($_POST['txtUserId2'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId2']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT FName, LName, UserId FROM `users` WHERE UserId = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%s %s, %s,\n", $row["FName"], $row["LName"], $row["UserId"]);
       // echo $row["CurrentPoints"];
        }
    }
        
        if(isset($_POST['txtUserId3'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId3']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT FName, LName, UserId FROM `users` WHERE UserId = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%s %s, %s,\n", $row["FName"], $row["LName"], $row["UserId"]);
       // echo $row["CurrentPoints"];
        }
        }
            
            if(isset($_POST['txtUserId4'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId4']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT FName, LName, UserId FROM `users` WHERE UserId = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%s %s, %s,\n", $row["FName"], $row["LName"], $row["UserId"]);
       // echo $row["CurrentPoints"];
        }
    
}  

?>