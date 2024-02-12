<?php
$koneksi = mysqli_connect('localhost','root','','db-ukkspp');
if(!$koneksi){
    echo"koneksi anda gagal";
}