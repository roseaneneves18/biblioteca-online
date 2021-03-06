<html>
    <html lang="pt">
<head>
  
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <title>Biblioteca Web</title>
</head>

<body class="body1">
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="./Imagens/logo sophia.jpg" />
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li>
                            <a href="">
                                <img src="./img redes social/twi site.png" />
                            </a>
                        </li>
                        <li>
                            <a target="_blanck" href="https://www.facebook.com/seminarioadventistafadba">
                                <img src="./img redes social/face azul site .png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img redes social/whats site.png" />
                            </a>
                        </li>
                        <li>
                            <a target="_blanck" href="https://www.instagram.com/bibliotecafadba/">
                                <img src="./img redes social/insta site.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="">Menu</a>
                    </li>
                    <li>
                        <a thref="./pag/novidades.html">Novidades</a>
                    </li>
                    <li>
                        <a href="./pag/servicos.html">Servi??os</a>
                    </li>
                    <li>
                        <a href="./pag/paginas.html">P??ginas</a>
                    </li>
                    <li>
                        <a href="./pag/Login.php">entrar</a>
                    </li>
                    <li>
                        <a href="./pag/fale_com_nosco.html">Fale com Nosco</a>
                    </li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Search Something" type="text" />
            </div>
        </div>
    </main>
    <div class="col-100">
        <div class="slider-principal">
            <img src="./imgAnimada/man-reading-animate.svg" />

            <img src="./imgAnimada/audiobook-animate.svg" />

            <img src="./imgAnimada/leitoraLogin.svg" />

            <img src="./imgAnimada/hand-holding-pen-animate.svg" />

            <img src="./imgAnimada/leitoraLogin.svg" />

           
        </div>
    </div>
    <div class="col-100">
        <div class="content texto-destaque">
            <body class="body3">

                <style>
                
                  @keyframes blink {
                    0%, 100% {
                      opacity: 1;
                    }
                    50% {
                      opacity: 0;
                    }
                  }
                </style>
                <h2 class="h2Text">"Bem vindo a Bliblioteca Central FADBA"</h2>
                
                 <h1 class="h1Text" >Um Novo Sistema Atualizado Que busca Comprir De Uma Forma Mais Elegante Suas Atividades.</h1>
                
                
                            <p class="pText">Sistema totalmente moderno com um designer incr??vel que vai te levar a um pensamento mais amplo do mundo real Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis. </p>
                <script>
                  function typeWriter(elemento) {
                    const textoArray = elemento.innerHTML.split('');
                    elemento.innerHTML = '';
                    textoArray.forEach((letra, i) => {
                      setTimeout(() => elemento.innerHTML += letra, 75 * i);
                    });
                  }
                
                  // Se estiver tendo problemas com performance, utilize o FOR loop como abaixo no local do forEach
                  // function typeWriter(elemento) {
                  //   const textoArray = elemento.innerHTML.split('');
                  //   elemento.innerHTML = '';
                  //   for(let i = 0; i < textoArray.length; i++) {
                  //     setTimeout(() => elemento.innerHTML += textoArray[i], 75 * i);
                  //   }
                  // }
                
                  const titulo = document.querySelector('h1');
                  typeWriter(titulo);
                
                  typeWriter(document.querySelector('h2'));
                  typeWriter(document.querySelector('p'));
                </script>
                
                </body>

            <div><iframe width="720" height="415" src="https://www.youtube.com/embed/PXwfaWSfJCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

         
        </div>
        <div><p></p></div>
    </div>
    <div class="col-100 bloco-imagens-texto">
       
        <body class="body2">
            <div class="container">
                
                <div class="card">
                    <div class="content">
                        <h2>01</h2>
                        <h3>CARD UM</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum repellat doloribus rerum enim sed sapiente repellendus. Officiis repellendus, porro nihil veritatis commodi consequatur fuga, sit molestias ipsam asperiores illo!
                        </p>
                        <a href="#">mais informa????es</a>
                    </div>
                </div>
                <div class="card">
                <div class="content">
                    <h2>02</h2>
                    <h3>CARD DOIS</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum repellat doloribus rerum enim sed sapiente repellendus. Officiis repellendus, porro nihil veritatis commodi consequatur fuga, sit molestias ipsam asperiores illo!
                    </p>
                    <a href="#">mais informa????es</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2>03</h2>
                    <h3>CARD TR??S</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum repellat doloribus rerum enim sed sapiente repellendus. Officiis repellendus, porro nihil veritatis commodi consequatur fuga, sit molestias ipsam asperiores illo!
                    </p>
                    <a href="#">mais informa????es</a>
                </div>
            </div>
            </div>
            <script type="text/javascript" src="vanilla-tilt.js"></script>
            <script>
            VanillaTilt.init(document.querySelectorAll(".card"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare":1,
            });
            </script>
        </body>

    </div>
   
    <body class="anuncio">
           
        <h1>Not??cias</h1>
        <section class="grid2">
          <div class="video">
            <img src="./img an??ncios/AMENINAQUE site .jpg">
            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam aspernatur pariatur iusto similique deserunt, neque voluptatum eum ullam sit veritatis, ea nihil ducimus ut ipsa, dignissimos quasi! Pariatur, beatae natus..</h2>
          </div>
          <div class="sidebar">
            <div>
              <img src="./img an??ncios/stardust site.jpg">
              <p class="legenda">Legenda</p>
            </div>
            <div>
              <img src="./img an??ncios/O_APANHADOR site.jpg">
              <p class="legenda">Legenda</p>
            </div>
            <div>
              <img src="./img an??ncios/O_APANHADOR site.jpg">
              <p class="legenda">Legenda</p>
            </div>
           
          </div>
        </section>
        
    </body>
    
    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="Exemplo1" title="logo" src="img/../Imagens/fadba-logo.png" />
            </div>
            <div class="col-4">
                <img alt="Exemplo2" title="logo" src="img/../Imagens/fadba-logo.png" />
            </div>
            <div class="col-4">
                
                <img alt="Exemplo2" title="logo" src="img/../Imagens/fadba-logo.png" />
            </div>
            <div class="col-4">
                <img alt="Exemplo4" title="logo" src="img/../Imagens/fadba-logo.png" />
            </div>
        </div>
    </div>


    <footer>
        <div class="col-100 footer">
            <div class="content">
                <div class="col-4">
                    <h3><b>Titulo aqui</b></h3>
                    <p>Lorem Ipsum is simply dummy
                        text of the printing.</p>
                    <p class="clock">25-September 2013<p>
                            <p>Lorem Ipsum is simply dummy
                                text of the printing.</p>
                            <p class="clock">25-September 2013<p>
                </div>
                <div class="col-4">
                    <h3><b>Titulo aqui</b></h3>
                    <p>apps blog blogroll christmas cms coda concert daily design develop dialog drinks envato food fun
                        gallery gift holiday icon illustration ipad iphone journal jquery label link </p>
                </div>
                <div class="col-4">
                    <h3><b>Titulo aqui</b></h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    
                    </p>
                </div>
                <div class="col-4">
                    <h3><b>Titulo aqui</b></h3>
                    <p>
                        Lorem Ipsum is simply dummy
                        of the printing and t
                    </p>
                    <p class="local">FADBA-BA BR<p>
                            <p class="emailico">email@email.com<p>
                                    <p class="telefoneico">890-09880-45590<p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-100 footer-2">
        <div class="content">

            <p>
                Desenvolvido por Guttenbergh Souza 
            </p>
        </div>
    </div>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    
    
</body>
</html>
