<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preorder</title>
    <link rel="stylesheet" type="text/css" href="../style/preorder.css">
</head>
<body background="../img/preorder.jpg">
    <h1>PRE ORDER FORM</h1>
    <hr>
    <form action="../php/namalain2.php" method="post">
    <div class="container">
        <div class="buyer">
            <div class="filled">
                <input type="text" class="input" placeholder="Name" name="nama">
                <input type="text" class="input" placeholder="Address" name="alamat">
                <input type="text" class="input" placeholder="Amount" name="jumlah">
                <input type="text" class="input" placeholder="Payment" name="pembayaran">
            </div>
            <div class="datetime">
                <input type="date" class="input" placeholder="Date" name="tanggal">
                <input type="time" class="input" placeholder="Time" name="waktu">
                <a href="../code/schedule.php">Check Avaibility</a>
            </div>
    </div>
    <div class="btn">
        <!-- <a href="#" class="button">SUBMIT</a> -->
        <input type="submit" placeholder="SUBMIT" class="button">
    </div>
    </form>
    <div class="logonama">
        <tr>
        <td>
            <img src="../img/logo.png" style="width: 60px; height: 45px;">
        </td>
        </tr>
    </div>
</body>
</html>