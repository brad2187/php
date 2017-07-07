<?PHP
include_once("connection.php");

//echo "this is update.php";

if(
   isset($_POST['txtUserName']) && isset($_POST['txtPoints'])){
    
   

    $userName = ($_POST['txtUserName']);
    $points = intval($_POST['txtPoints']);
    //$pointsRead = intval($_POST['txtPointsRead']);
    //echo "hello world";
    
    //echo "l";
   // echo $userName;
    
    $query2 = "UPDATE users
        SET CurrentPoints = CurrentPoints - $points
        WHERE Username = '$userName'";
    
    $result2 = mysqli_query($conn, $query2);
    
   // $result = mysqli_query($conn, $query);

    
    
    $query = "UPDATE users
        SET totalPoints = totalPoints - $points
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "UPDATE users
        SET pointsUntilNextLevel = pointsUntilNextLevel + $points
        WHERE Username = '$userName'";
    
    
    
    $result = mysqli_query($conn, $query);


    
    
    if($result2 > 0){
        echo $query2;
        echo "success";
        exit;
    }
    else{
        echo $query;
        exit;
    }
}    
?>
