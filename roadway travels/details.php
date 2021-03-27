<?php
    include_once 'dbc.php';
 
    $pnrno = $_POST['pnr'];
    $ticketNo = $_POST['tic'];
    $busNo = $_POST['bus'];

    $sql = "select * from reservation where PNR_NO=".$pnrno.";";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $seatNo = $row['NO_OF_SEATS'];
    $address =$row['ADDRESS'];
    $contactNo = $row['CONTACT_NO'];
    $status = $row['STATUS'];

    $sql = "select * from ticket where TICKET_NO=".$ticketNo.";";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $age = $row['AGE'];
    $sex = $row['SEX'];
    $source = $row ['SOURCE'];
    $dis = $row ['DESTINATION'];
    $time = $row ['DEP_TIME'];
    $date = $row['JOURNEY_DATE'];

    $sql = "select * from bus where BUS_NO=".$busNo.";";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

   
    $type = $row ['COUCH_TYPE'];
    $fair = $row ['FAIR'];
    

    $sql = "select * from passenger where TICKET_NO=".$ticketNo.";";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row ['NAME'];
    $age = $row ['AGE'];
    $sex = $row ['SEX'];

    $total = $fair*$seatNo;

    echo '<h1>JOURNEY INFO:</h1><br>';
    echo "PNR_NO:".$pnrno."<br>";
    echo "ticket NO:".$ticketNo."<br>";
    echo "bus No:".$busNo."<br>";
    echo "type:".$type."<br>";
    echo "source:".$source."<br>";
    echo "destination:".$dis."<br>";
    echo "date:".$date."<br><br>";

    echo "<h1>PERSONAL INFO:</h1><br>";
    echo "Name:".$name."<br>";
    echo "age:".$age."<br>";
    echo "sex:".$sex."<br>";
    echo "address:".$address."<br>";
    echo "contact No:".$contactNo."<br><br>";
    
    echo "<h1>PAYMENT INFO:</h1><br>";
    echo "Number of seat:".$seatNo."<br>";
    echo "availability:".$status."<br>";
    echo "fari per seat:".$fair."<br>"; 
    echo "total payment:".$total."<br>";


?>
    
    