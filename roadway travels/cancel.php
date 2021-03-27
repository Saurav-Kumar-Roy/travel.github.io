<?php
    include_once 'dbc.php';

    $pnrno = $_POST['pnr'];
    $ticketNo = $_POST['tic'];

    $sql = "select STATUS FROM reservation where PNR_NO =".$pnrno." ;";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $status = $row['STATUS'];

    echo "Your reservation is canceled."."<br>";

    if($status=="av"){
        echo "As it was confirmed we took 20% of your total pament.";
    }   
    else{
        echo "Your ticket was not confirmed so no payment was cut.";
    }

    $sql = "insert into cancellation select * from reservation where reservation.PNR_NO=".$pnrno.";";
    mysqli_query($conn,$sql);
    $sql = "delete from ticket where TICKET_NO=".$ticketNo.";";
    mysqli_query($conn,$sql);
    $sql ="delete from reservation where PNR_NO=".$pnrno.";";
    mysqli_query($conn,$sql);
    $sql = "delete from passenger where TICKET_NO=".$ticketNo.";";
    mysqli_query($conn,$sql);
    

    echo '<a href = "index.php">home</a>';
?>
