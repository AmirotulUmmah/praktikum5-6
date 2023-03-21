<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>PRAKTIKUM FORM</title>
  </head>
  <body>
    <form action="index.php"method="post">
        <fieldset>
            Nama    : <br/>
            <input type="text" name="nama"><br/>
            Nilai   : <br/>
            <input type="text" name="nilai"><br/>
            <br/>
            <input type="submit">
        </fieldset>
    </form>
  </body>
  <?php
  $nama = $_POST['nama']; 
  if ($nama==" ") { 
    header("location:formindex.php?nama=" . cek($nama)); 
    }
  function cek($val) { 
    if ($val == "") { 
        $val = "0"; 
    } return $val; 
    }
    if(isset($_POST['nama'])){
      if(isset($_POST['nilai'])){
        echo 'Selamat datang : '.$_POST['nama'];
        echo '<br/>';
        echo 'Nilai : '.$_POST['nilai'];
        echo '<br/>';
      }
      if($_POST['nilai'] <= 100 && $_POST['nilai'] >=81)
        {
            echo "Nilai : A";
            echo "<br>";
            echo "Predikat : Pertahankan ya!";
        }
        else if($_POST['nilai'] <= 80 && $_POST['nilai'] >=71)
        {
            echo "Nilai : AB";
            echo "<br>";
            echo "Predikat : Sangat hebat";
        }
        else if($_POST['nilai'] <=70 && $_POST['nilai'] >= 66)
        {
            echo "Nilai : B";
            echo "<br>";
            echo "Predikat : Sudah bagus";
        }
        else if($_POST['nilai'] <=65 && $_POST['nilai'] >= 60)
        {
            echo "Nilai : BC";
            echo "<br>";
            echo "Predikat : Baik";
        }
        else if($_POST['nilai'] <=60 && $_POST['nilai'] >=56)
        {
            echo "Nilai : C";
            echo "<br>";
            echo "Predikat : Cukup baik";
        }
        else if($_POST['nilai'] <=55 && $_POST['nilai'] >= 41)
        {
            echo "Nilai : D";
            echo "<br>";
            echo "Predikat : Di tingkatkan lagi)";
        }
        else
        {
            echo "Nilai : E";
            echo "<br>";
            echo "Predikat : Tidak boleh tidak semangat";
        }
  }
  ?>
  </html>