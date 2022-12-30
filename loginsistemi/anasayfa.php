<?php
include 'baglanti.php';
if(isset($_POST['kayit-ol'])){
  $insert=$db->prepare("INSERT INTO login set 
  isim=:isim,
  soyisim=:soyisim,
  email=:email,
  parola=:parola
  
  ");
  $vericek=$insert->execute(array(
    "isim"=>$_POST['isim'],
    'soyisim'=>$_POST['soyisim'],
    'email'=>$_POST['email'],
    'parola'=>$_POST['parola']
  ));
  if($vericek){
    Header("Location:tablo.php?kullaniciekle=true");
  }
  else{
    Header("Location:tablo.php?kullaniciekle=false");
  }
}


if(isset($_POST['duzenle'])){
  $duzenle =$db->prepare("UPDATE login set
  
  isim=:isim,
  soyisim=:soyisim,
  email=:email,
  parola=:parola

  WHERE id ={$_POST['id']}
  
  
  ");
 $update=$duzenle->execute(array(

  "isim"=> $_POST['isim'],
  'soyisim'=> $_POST['soyisim'],
  'email'=> $_POST['email'],
  'parola'=> $_POST['parola']

 ));
if($update){
  Header("Location:tablo.php?kullaniciduzenle=true");
}
else{
  Header("Location:tablo.php?kullaniciduzenle=false");
}

}
if(isset($_GET['kullanicisil'])){
  $kullanicisil=$db->prepare("DELETE FROM login where id=:id");
  $kullanicisil->execute(array(
  'id'=>$_GET['id']
  ));
  if($kullanicisil){
    Header("Location:tablo.php?kullanicisil=true");
  }
  else{
    Header("Location:tablo.php?kullanicisil=false");
  }
}





?>