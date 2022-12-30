<?php include 'baglanti.php';
$veri=$db->prepare("SELECT * FROM login where id=:id");
$veri->execute(array(
  'id'=>$_GET['id']
));
$veriler=$veri->fetch(PDO::FETCH_ASSOC)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullaniciyi Duzenle </title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<H1 class="h1 m-3 text-warning"> Kullaniciyi Duzenle</H1>
<form action="anasayfa.php" method="post">
<div style="border-radius: 10px;" class="row bg-secondary p-3  g-1 m-5">

  <div class="col-sm-2">
    <input type="text" value="<?php echo $veriler ['isim']; ?>" id="isim"  name="isim" required class="form-control" placeholder="isim" >
  </div>
  <div class="col-sm-3">
    <input type="text" value="<?php echo $veriler ['soyisim']; ?>"  id="soyisim"   name="soyisim" required  class="form-control" placeholder="soyisim" >
  </div>
  <div class="col-sm-3">
    <input type="email" value="<?php echo $veriler ['email']; ?>"  id="email"   name="email" required  class="form-control" placeholder="email">
  </div>
  <div class="col-sm-2">
    <input type="text" value="<?php echo $veriler ['parola']; ?>"   id="parola"  name="parola" required  class="form-control" placeholder="parola" >
  </div>
  <div class="col-sm-2">
    <input type="hidden" value="<?php echo $veriler ['id'] ?>" name="id">
    <button style="border: none;" name="duzenle" id="kayit-ol" type="submit" class="btn btn-success">Duzenle</button>
  </div>
</div>
</form>











<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





