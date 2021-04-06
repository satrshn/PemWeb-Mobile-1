<!DOCTYPE html>
<html>
  <body>
    <div class="judul" style="text-align: center;">
    <h2> Pemrograman Web Modul 1 </h2>
    <p><b>Satria Shano</b></p >
    <p><b>11191068</b></p>
    </div>
  </body>
</html>
<?php
    $listnama= ["Sutrisno", "Mirsa Handayani", "Satria Shano", "Nabila Salsabila Shano"];
    function hurufkonsonan($nama) {
        $all = strlen($nama);
        $a = substr_count($nama, "a");
        $i = substr_count($nama, "i");
        $u = substr_count($nama, "u");
        $e = substr_count($nama, "e");
        $o = substr_count($nama, "o");   
        
        $jumlah = $all - ($a + $i + $u + $e + $o);

        return $jumlah;
    }
    function hurufvocal($nama) {
        $a = substr_count($nama, "a");
        $i = substr_count($nama, "i");
        $u = substr_count($nama, "u");
        $e = substr_count($nama, "e");
        $o = substr_count($nama, "o");   
        
        $jumlah = ($a + $i + $u + $e + $o);

        return $jumlah;
    }
?>
<?php foreach ($listnama as $listnama) : ?>
    <?php 
    echo "<ul>";
    echo "<li> Nama : $listnama </li>";
    echo "<li> Jumlah Kata : " .str_word_count($listnama) ."</li>";
    echo "<li> Jumlah Huruf : " .strlen($listnama);
    echo "<li> Kebalikan : " .strrev($listnama);
    echo "<li> Jumlah Huruf Konsonan : " .hurufkonsonan($listnama);
    echo "<li> Jumlah Huruf Vocal : " .hurufvocal($listnama); 
    echo "</ul>";
    ?>
<?php endforeach; ?>