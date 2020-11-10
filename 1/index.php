<?php

if( isset($_POST["submit"]) ) {
    function HitungTotal($kehadiran,$uts,$uas,$tugas,$kuis)
    {
        $hasil = ((($kehadiran - 4)*10)*0.1) + ($uts * 0.3) + ($uas * 0.4) + ((($tugas + $kuis)-100)*0.2);
        return $hasil; 
    }

    $nilai = HitungTotal($_POST["kehadiran"],$_POST["uts"],$_POST["uas"],$_POST["tugas"],$_POST["kuis"]);

    if ($nilai>80) {
        $grade= "A";
    }elseif ($nilai>=60 && $nilai<= 80) {
        $grade= "B";
    }elseif ($nilai>=40 && $nilai < 60) {
        $grade= "C";
    }elseif ($nilai>=20 && $nilai < 40) {
        $grade= "D";
    }elseif ($nilai < 20) {
        $grade= "E";
    }

    $total=  "Nim " . $_POST["nim"] . " nilai akhir anda: " . $nilai . " dengan grade " . $grade;
}



?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>Nilai Akhir</title>
    </head>

    <body>
      <div class="container">
      <form method="post" class="mt-4 mb-4">

        <div class="form-group">
          <label for="nim"> <b>NIM</b> </label>
          <input type="nim" name="nim" class="form-control" id="nim" placeholder="11.11.1111"><hr>
        </div>

        <div class="form-group">
          <label for="kehadiran"> <b>Jumlah Kehadiran</b> </label>
          <input type="number" ame="kehadiran" class="form-control" id="kehadiran" placeholder="1 - 14" max="14" />
  
        </div><hr>
        <div class="form-group">
          <label for="uts"> <b>UTS</b> </label>
          <input type="number" min="0" max="100" name="uts" class="form-control" id="uts" placeholder="0 - 100">
        </div>

        <div class="form-group">
          <label for="uas"> <b>UAS</b> </label>
          <input type="number" min="0" max="100" name="uas" class="form-control" id="uas" placeholder="0 - 100">
        </div>

        <div class="form-group">
          <label for="tugas">  <b>Tugas</b> </label>
          <input type="number" min="0" max="100" name="tugas" class="form-control" id="tugas" placeholder="0 - 100">
        </div>

        <div class="form-group ">
          <label for="kuis">  <b>Kuis</b> </label>
          <input type="number" min="0" max="100" name="kuis" class="form-control" id="kuis" placeholder="0 - 100">
        </div> <hr>

        <div class="text-center">
          <button type="submit" class="btn btn-success text-center" name="submit" value="submit" >Hitung Nilai</button>
        </div> <hr> 
      </form>

        <div class="mt-1 text-center">
          <?php echo($total)?> <hr>
        </div>
      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </head>
</html>