<?php
    include_once 'dbc.php';

    echo '<a href="index.php">home</a><br>';

        $sql = "select * from cancellation;";
        $result = mysqli_query($conn,$sql);
        echo '<table border="1">
        <tr>
            <th>'."PNR_NO".'</th>
            <th>'."NO OF SEATS".'</th>
            <th>'."ADDRESS".'</th>
            <th>'."CONTACT NO".'</th>
            <th>'."STATUS".'</th>
        </tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '
            <tr>
                <td>'.$row['PNR_NO'].'</td>
                <td>'.$row['NO_OF_SEATS'].'</td>
                <td>'.$row['ADDRESS'].'</td>
                <td>'.$row['CONTACT_NO'].'</td>
                <td>'.$row['STATUS'].'</td>
            </tr>';
        }
    ?>
'
</body>
</html>