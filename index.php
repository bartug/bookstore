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
  <a class="navbar-brand" href="#">BookStore</a>
  <button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="books.php">Katolog<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Kitap Ekle</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   <div class="container">
       <div class="row">
        <div class="col-md-6">
               <h2>Kitap Eklemek için:</h2> 
            <a href="login.php"><img src="book-image-png-4.png" class="img-thumbnail"></a>
            
        </div>
        <div class="col-md-6">
               <h2> Kitaplara göz atmak için:   </h2>
                <a href="books.php"><img src="liste.png" class="img-thumbnail"></a>
        </div>
        
           
       </div>
   </div>

</body>
<footer class="footer">
    <div class="container-fluid">
        <p class="text-muted" style="color:rgb(102, 150, 223);font-family: Tahoma,Arial;padding-top:5px;text-align: center">Copyright ©2019</p>
    </div>
</footer>
</html>