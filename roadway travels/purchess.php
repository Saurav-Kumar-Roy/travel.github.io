<?php
    include_once 'dbc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>purchess</title>
</head>

<body>
    <p>purcheess menu</p>
    <form action = "input.php" method ="POST">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="age" placeholder="age"><br>
        <input type="text" name="sex" placeholder="sex"><br>
        <input type="text" name="contact" placeholder="contact"><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="number" name="busNo" placeholder="busNo"><br>
        <input type="number" name="seatNo" placeholder="number of seat"><br>
        <input type="number" name="ticketNo" placeholder="ticketNo"><br>
        <input type="text" name="src" placeholder="source"><br>
        <input type="text" name="dst" placeholder="destination"><br>
        <input type="text" name="time" placeholder="depart time"><br>
        <input type="number" name="pnrNo" placeholder="pnrNo"><br>
        <input type="text" name="status" placeholder="status"><br>
        <input type="date" name="date" placeholder="journey date"><br>
        <button type="submit" name = "submit">Submilt</button><br><br>
    </form>
    <a href="index.php">home</a><br>

    
    <?php
        $sql = "select * from bus;";
        $result = mysqli_query($conn,$sql);
        echo '<table border="1">
        <tr>
            <th>'."BUS_NO".'</th>
            <th>'."SOURCE".'</th>
            <th>'."DESTINATION".'</th>
            <th>'."COUCH_TYPE".'</th>
            <th>'."FAIR".'</th>
        </tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '
            <tr>
                <td>'.$row['BUS_NO'].'</td>
                <td>'.$row['SOURCE'].'</td>
                <td>'.$row['DESTINATION'].'</td>
                <td>'.$row['COUCH_TYPE'].'</td>
                <td>'.$row['FAIR'].'</td>
            </tr>';
        }
    ?>

</body>
</html>