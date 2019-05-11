<?php 
include('database.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BookStore</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <header>

    <div class="overlay">
            <div class="content">
                <img src="ust.png" alt="BookStore">
                <h1>Book Store</h1>
            </div>
            </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="books.php">Katolog<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php">Kitap Ekle</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
    <div class="col-md-12">
        <form action="" method="post">
    
         <table class="table">
        
               <tr>
                   <td>Kitap ismi</td>
                   <td><input type="text" name="KitapAdı" class="form-control" ></td>
                 </tr>

                  <tr>
                   <td>Yazar ismi</td>
                     <td><input type="text" name="YazarAdı" class="form-control" ></td>
                  </tr>
               <tr>
                  <td>Sayfa Sayısı</td>
                     <td><input type="text" name="SayfaSayısı" class="form-control" ></td>
                </tr>
                 <tr>
                     <td>Basım Yılı</td>
                        <td><input type="text" name="BasımYılı" class="form-control" ></td>
                  </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>






<?php 

if ($_POST) { 

    $KitapAdı = $_POST['KitapAdı']; 
    $YazarAdı = $_POST['YazarAdı'];
    $SayfaSayısı = $_POST['SayfaSayısı'];
    $BasımYılı = $_POST['BasımYılı'];
    if ($KitapAdı<>"" && $YazarAdı<>""&&$SayfaSayısı<>"" && $BasımYılı<>"") { 
            if ($baglanti->query("INSERT INTO bookstore (KitapAdı, YazarAdı,SayfaSayısı,BasımYılı) VALUES ('$KitapAdı','$YazarAdı','$SayfaSayısı','$BasımYılı')")) 
            {
               echo "<script> alert('Kitap eklendi')</script>";
            }
            else
            {
                echo "<script> alert('Hata Oluştu')</script>";
            }
    
        }
    
}
?>
</div>
</div>
</body>
<footer class="footer">
    <div class="container-fluid">
        <p class="text-muted" style="color:rgb(102, 150, 223);font-family: Tahoma,Arial;padding-top:5px;text-align: center">Copyright ©2019</p>
    </div>
</footer>
</html>