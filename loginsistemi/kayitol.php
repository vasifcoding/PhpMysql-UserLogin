
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayit Ol</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<H1 class="h1 m-3 text-warning">Kayit Olma Sayfasi</H1>
<form action="anasayfa.php" method="post">
<div style="border-radius: 10px;" class="row bg-secondary p-3  g-1 m-5">

  <div class="col-sm-2">
    <input type="text" id="isim"  name="isim" required class="form-control" placeholder="isim" >
  </div>
  <div class="col-sm-3">
    <input type="text" id="soyisim"   name="soyisim" required  class="form-control" placeholder="soyisim" >
  </div>
  <div class="col-sm-3">
    <input type="email" id="email"   name="email" required  class="form-control" placeholder="email">
  </div>
  <div class="col-sm-2">
    <input type="text"  id="parola"  name="parola" required  class="form-control" placeholder="parola" >
  </div>
  <div class="col-sm-2">
    <button style="border: none;" name="kayit-ol" id="kayit-ol" type="submit" class="btn btn-danger">Kayit Ol</button>
  </div>
</div>
</form>










<script src="anasayfa.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





