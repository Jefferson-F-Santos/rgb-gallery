<?php 
  $urlJson = "http://localhost/teste-galeria/images";
  $ch = curl_init($urlJson);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = json_decode(curl_exec($ch));
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/home.css" />
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/media.css">

    <title>Gallery</title>

  </head>
  <body>
    <div class="interface">
      <header>
        <div class="wrapper">
          
          <div class="container-logo">
            <img src="../assets/logo.png" alt="Logotipo" />
          </div>
  
          <div class="container-menu active-none">
            <ul id="list-page">
              <li>Página 1</li>
              <li>Página 2</li>
              <li>Página 3</li>
              <li>Página 4</li>
              <li>Página 5</li>
            </ul>
            <div id="content-tell">
              <img src="../assets/icons/iconTell.svg" alt="Icone de Telefone" />
              <p><span>00</span>0000-0000</p>
            </div>
            <div id="menu-social-media">
              <a href="#"><img src="../assets/icons/iconFacebook.svg" alt="Icone do Facebook"></a>
              <a href="#"><img src="../assets/icons/iconTwitter.svg" alt="Icone do Twitter"></a>
              <a href="#"><img src="../assets/icons/iconFlickr.svg" alt="Icone do Flickr"></a>
            </div>
          </div>

          <div id="content-btn">
            <button id="btn-menu"><img src="../assets/icons/iconMenu.svg" alt="Icone menu"></button>
          </div>

        </div>
      </header>

      <main>
        <div class="wrapper">

          <div id="container-cards">
            
            <?php foreach($result as $item) : ?>
            <div class="content-card">
              <div class="container-img-card">
                <img src="../assets/<?php echo $item->url ?>" alt="<?php echo $item->title ?>" />
              </div>
              <div class="title-and-lt">
                <h2><?php echo $item->title ?></h2>
                <div class="btns-socialMedia">
                  <button class="btn-lt">Tweetar</button>
                  <button class="btn-lt">Curtir</button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
      </main>
      <footer>
        <div class="wrapper">
          <div class="row-top">
            <div id="content-left">
              <div class="content-img">
                <img src="../assets/imageFooter.webp" alt="test" />
              </div>
              <div class="wrapper-text">
                <h1>Pessoa ou Empresa</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. <br /><br/>Ut enim
                  ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur.
                </p>
              </div>
            </div>
            <div id="content-right">
              <h2>Acesse também:</h2>
              <ul>
                <li><img src="../assets/icons/iconFacebook.svg" alt="Icone do Facebook">www.facebook.com</li>
                <li><img src="../assets/icons/iconTwitter.svg" alt="Icone do Twitter">www.twitter.com</li>
                <li><img src="../assets/icons/iconFlickr.svg" alt="Icone do Flickr">www.flickr.com</li>
              </ul>
            </div>
          </div>
          <div id="row-bottom">
            <p class="text-footer">Todos os direitos reservados - &copy; 2020</p>
            <div>
              <span class="text-footer">linha fast</span>
              <span id="text-with-img"
                ><img
                  src="../assets/logo.png"
                  alt="test"
                />comunicacao.com.br</span
              >
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>
