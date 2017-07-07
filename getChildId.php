<?PHP
include_once("connection.php");

//echo "this is getPoints.php";



if(isset($_POST['txtUserId'])){
    
   //echo "in if statement";
   // echo $_POST['txtUserName'];

    //$userName = ($_POST['txtUserName']);
    //$password = ($_POST['txtPassword']);
    $txtUserId = ($_POST['txtUserId']);
    //$points = intval($_POST['txtPoints']);
    //echo "hello world";
    
    $query = "SELECT ChildID FROM `children` WHERE ParentID = $txtUserId";
    
    $result = mysqli_query($conn, $query);
    //$stringResult = (string)$result;
    
    //if ($result > 0)
    //{
        while ($row = $result->fetch_assoc()) 
        {
    printf ("%d,\n", $row["ChildID"]);
       // echo $row["CurrentPoints"];
        }
   // }
   // else
   // {
      //  echo $result;
   // }
    
    

    
}    
?>