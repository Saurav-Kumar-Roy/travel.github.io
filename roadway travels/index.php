<!DOCTYPE html>
<html>
<head>
    <title>homepage</title>
</head>
<body>
    <p> welcome to roadway travles.</p><br>
    <a href="purchess.php">purchess or book ticket</a><br><br>
    
    <form action ="cancel.php" method ="POST">
        <h2>Cancel a ticket:</h2><br>
        Enter your PNR_NO : 
        <input type="number" name = "pnr" placeholder="PNR_NO"><br>
        Enter your Ticket_NO:
        <input type="number" name = "tic" placeholder="Ticket_NO">
        <button type="submit" name = "cancel">cancel</button><br><br>
    </form>

    <form action = "details.php" method = "POST">
        <h2>show details:</h2><br>
        Enter your PNR_NO : 
        <input type="number" name = "pnr" placeholder="PNR_NO"><br>
        Enter your Ticket_NO:
        <input type="number" name = "tic" placeholder="Ticket_NO"><br>
        Enter your BUS_NO:
        <input type="number" name = "bus" placeholder="BUS_NO">
        <button type="submit" name = "check">check</button><br><br>
    </form>

    <form action= "date.php" method = "POST">
        Enter date to check travellers:
        <input type="date" name = "date" placeholder="date">
        <button type="submit" name = "check">check</button><br><br>
    </form>
    
    <a href="cancelaton.php">canceled reservation</a> <br>

</body>
</html>
