<?php
$koneksi = mysqli_connect("0.0.0.0:3306","root","root","Portfolio");
$hasil = mysqli_query($koneksi,"SELECT * FROM user");
$result = mysqli_query($koneksi, "SELECT * FROM about
");