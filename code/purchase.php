<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link rel="stylesheet" type="text/css" href="../style/purchase.css">
</head>
<body background="../img/purchase.jpg">
    <h1>PURCHASE FORM</h1>
    <hr>
    <form action="../php/namalain.php" method="post">
    <div class="container">
        <div class="buyer">
            <div class="filled">
                <input type="text" class="input" placeholder="Name" name="nama">
                <input type="text" class="input" placeholder="Address" name="alamat">
                <input type="text" class="input" placeholder="Amount" name="jumlah">
                <input type="text" class="input" placeholder="Payment" name="pembayaran">
            </div>
            <div class="Massage">
                <textarea placeholder="Massage for Us"></textarea>
            </div>
        </div>
    </div>
    <div class="btn" s>
        <input type="submit" placeholder="Submit" class="button">
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