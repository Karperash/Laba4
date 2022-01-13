<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>
    <p></p>
    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Вычислить наибольшую выручку от продажи трех видов товаров, если известны: цена товара; количество проданных товаров каждого вида.</h1>

    </main>
   

 <form action="result.php" method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="tovar1" placeholder="Количество товара вида 1">
      <input type="text" class="form-control" name="tovar2" placeholder="Количество товара вида 2">
      <input type="text" class="form-control" name="tovar3" placeholder="Количество товара вида 3">      
    </div>
    
    <div class="col">
      <input type="text" class="form-control" name="price1" placeholder="Цена товара">
      <input type="text" class="form-control" name="price2" placeholder="Цена товара">
      <input type="text" class="form-control" name="price3" placeholder="Цена товара">
    </div>
  </div>
  <p></p>
  <button type="submit" name="submit" class="btn btn-primary">Посчитать</button>  
 </form>   
<footer class="footer">

    </footer>
</body>


</html>
