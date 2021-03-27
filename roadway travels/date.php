<?php
    include_once 'dbc.php';

    $date = $_POST['date'];

    $sql = "select * from passenger natural join ticket where ticket.JOURNEY_DATE =date('".$date."');";
    $result = mysqli_query($conn,$sql);
    echo '<table border="1">
    <tr>
        <th>'."NAME".'</th>
        <th>'."AGE".'</th>
        <th>'."CONTACTNO".'</th>
    </tr>';

    while($row = mysqli_fetch_assoc($result)){
        echo '
        <tr>
            <td>'.$row['NAME'].'</td>
            <td>'.$row['AGE'].'</td>
            <td>'.$row['CONTACT_NO'].'</td>
        </tr>';
    }

    echo '<a href="index.php">home</a>';
?>


