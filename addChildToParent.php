<?PHP
include_once("connection.php");

//echo "this is update.php";

if(
   isset($_POST['txtUserId']) && isset($_POST['txtParentId'])){
    
    
    
    
   

    $userId = intval($_POST['txtUserId']);
    $parentId = intval($_POST['txtParentId']);
    $StudentID = 0;
    //$password = ($_POST['txtPassword']);
    //echo "hello world";
    
    
    
    
    
    $query = "INSERT INTO children (ParentID, StudentID, ChildID) values ($parentId, $StudentID, $userId)";
    
    $result = mysqli_query($conn, $query);

    if($result > 0){
        echo "success";
        exit;
    }
    else{
        echo $query;
        exit;
    }
}    
?>