<?php
    session_start();
    if(!empty($_POST['name']) && !empty($_POST['psswd']) && !empty($_POST['gender']) && !empty($_POST['addr']) && !empty($_POST['cllg']) && !empty($_POST['affr'])){
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $database = "misc";
        $conn = mysqli_connect($servername, $username, $password, $database);
        $nam = $_POST['name'];
        $psswd = $_POST['psswd'];
        $gdr = $_POST['gender'];
        $addr = $_POST['addr'];
        $cllg = $_POST['cllg'];
        $tc_flag = $_POST['affr'];
        $sql = 'INSERT INTO persons (name,password,gender,address,college,tcflag)
        VALUES ("'.$nam.'","'.$psswd.'","'.$gdr.'","'.$addr.'","'.$cllg.'","'.$tc_flag.'")';
        
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $_SESSION['message'] = "data sucessfully stored";
        header("Location:index.php");
    }else{
        $_SESSION['message'] = "some feilds are missing kindly fill those feilds";
        header("Location:index.php");
    }
?>
