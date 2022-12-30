<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <a href="kayitol.php"> <button style="float: right;" class="btn btn-primary m-3 " type="button">Kullanici Ekle</button></a>
<table class="table table-hover">
    <tr>
        <th> isim</th>
        <th> Soyisim</th>
        <th>Email</th>
        <th>Parola</th>
        <th></th>
        <th></th>
    </tr>



<?php
include 'baglanti.php';
$veri=$db->prepare("SELECT * FROM login");
$veri->execute();
while($veriler=$veri->fetch(PDO::FETCH_ASSOC)){
    // echo 'Kullanici ismi : '; echo $veriler ['isim'];
    // echo '<br>';
    // echo 'Soyisim : '; echo $veriler ['soyisim'];
    // echo '<br>';
    // echo 'Email : '; echo $veriler ['email'];
    // echo '<br>';
    // echo 'Parola : '; echo $veriler ['parola'];
    // echo '<br>';
    // echo '<br>';
    // echo '<br>';


?>
    <tr>
        <td class="pt-3"> <?php echo $veriler ['isim'] ?> </td>
        <td  class="pt-3"> <?php echo $veriler ['soyisim']  ?> </td>
        <td  class="pt-3"> <?php echo $veriler ['email']  ?> </td>
        <td  class="pt-3"> <?php echo $veriler ['parola']  ?> </td>
        <td > <a href="kullaniciduzenle.php?id=<?php echo $veriler['id']; ?>"> <button class="btn btn-success text-center" type="submit">Duzenle</button></a></td>
        <td> <a href="anasayfa.php?kullanicisil&id=<?php echo $veriler ['id'] ?>"> <button class="btn btn-danger text-center" type="submit">Sil</button></a></td>
    </tr>
    <?php }?> 
</table>
</div>






<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>