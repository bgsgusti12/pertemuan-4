<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>awesome nav</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <input type="checkbox" name="" id="chk1" />
      <div class="logo"><h1>web master</h1></div>
      <div class="search-box">
        <form action="">
          <input type="text" name="search" id="srch" placeholder="search" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <ul>
        <li><a href="home.php?modul=home">home</a></li>
        <li><a href="product.php?modul=product">product</a></li>
        <li><a href="blog.php?modul=blog">blog</a></li>
        <li><a href="contact.php?modul=contact">contact</a></li>
        <li></li>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </ul>
      <div class="menu">
        <label for="chk1">
          <i class="fa fa-bars"></i>
        </label>
      </div>
    </header>
    <div id="mid">
        <div id="test" style=" border: 3px solid;"></div>
    </div>
  </body>
</html>
