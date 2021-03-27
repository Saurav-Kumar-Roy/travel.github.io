<?php
    include_once 'dbc.php';

    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $busNo = $_POST['busNo'];
    $seatNo = $_POST['seatNo'];
    $ticketNo = $_POST['ticketNo'];
    $pnrNo = $_POST['pnrNo'];
    $status = $_POST['status'];
    $date = $_POST['date'];
    $src = $_POST['src'];
    $des = $_POST['dst'];
    $time = $_POST['time'];
    
    $sql = "insert into reservation values('$pnrNo','$seatNo','$address','$contact','$status');";
    mysqli_query($conn,$sql);

    $sql = "insert into ticket values ('$ticketNo','$age','$sex','$src','$des','$time',date('$date'));";
    mysqli_query($conn,$sql);

    $sql = "insert into passenger values('$ticketNo','$name','$age','$sex','$contact');";
    mysqli_query($conn,$sql);

    header ("location: index.php?submit=successfull");


?>