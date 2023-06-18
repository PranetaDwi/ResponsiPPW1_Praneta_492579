<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/sch.css">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
<hr>
<h1>TABEL JADWAL PERTEMUAN</h1>
<hr>
<form action="" method="GET">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-secondary" type="submit">SORT</button>
  </div>
  <select class="custom-select" id="inputGroupSelect03" name="sort_date">
    <option selected>Choose...</option>
    <option value="ascending" <?php if (isset($_GET['sort_date']) && $_GET['sort_date'] == "ascending") {echo "selected";}?>>Ascending</option>
    <option value="descending" <?php if (isset($_GET['sort_date']) && $_GET['sort_date'] == "descending") {echo "selected";}?>>Decesding</option>
  </select>
</div>
</form>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">DATE</th>
      <th scope="col">TIME</th>
    </tr>
  </thead>
    <?php 

        $conn = mysqli_connect("localhost", "root", "", "managemen_jahit");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $sort_date="";
        if (isset($_GET['sort_date'])){
          if($_GET['sort_date']=="ascending"){
            $sort_date="ASC";
          } elseif ($_GET['sort_date']=="descending"){
            $sort_date="DESC";
          }
        }
        $jadwalp = mysqli_query($conn, "select * from jadwal_pertemuan ORDER BY tanggal $sort_date");
        $no=1;
        foreach ($jadwalp as $value){
            echo"
            <tr>
                <td>$no</td>
                <td>".$value['tanggal']."</td>
                <td>".$value['waktu']."</td>
            </tr>
            ";
            $no++;
        }   
    ?>
</body>
</html>