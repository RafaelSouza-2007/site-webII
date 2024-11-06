<?php

$produtos = [
    [
      "status" => "Oferta",
      "imagem" => "https://imgs.casasbahia.com.br/55026772/1xg.jpg",
      "categoria" => "informática, notebook, apple",
      "titulo" => "MacBook Air 13” Apple M1",
      "descricao" => "MacBook Air 13” Apple Chip M1 8GB RAM 256GB SSD Dourado LED macOS Magic Keyboard retroiluminado com Touch ID",
      "preço" => "R$ 12.999,00",
      "preço_com_desconto" => "R$ 8.899,00"
    ],
    [
      "status" => "Oferta",
      "imagem" => "https://imgs.casasbahia.com.br/1526382266/1xg.jpg",
      "categoria" => "informática, notebook, inspiron",
      "titulo" => "Notebook Dell Inspiron 15.6”",
      "descricao" => "Notebook Dell Inspiron 15 i1101-M60S 15.6” Full HD 11ª geração Intel Core i7 16GB 512GB SSD NVIDIA Geforce Windows 11",
      "preço" => "R$ 6.929,00",
      "preço_com_desconto" => "R$ 6.229,00"
    ],
    [
      "status" => "Oferta",
      "imagem" => "https://imgs.casasbahia.com.br/55048484/1g.jpg",
      "categoria" => "informática, notebook, gamer",
      "titulo" => "Notebook Gamer Acer 15.6”",
      "descricao" => "Notebook Gamer Acer NVIDIA GeForce GTX 1650 Core i5-10300H 8GB 512GB SSD Tela Full HD 15.6” Windows 11 Nitro 5",
      "preço" => "R$ 4.559,05",
      "preço_com_desconto" => "R$ 4.059,05"
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Casas Paraíba</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- HTML Bootstrap Navbar para gerar o menu superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="https://www.favicon.cc/logo3d/70218.png" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Ofertas</a>
                    <a href="#" class="nav-item nav-link">Telefonia</a>
                    <a href="#" class="nav-item nav-link">Eletrodomésticos</a>
                    <a href="#" class="nav-item nav-link">Móveis</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Meus Pedidos</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- HTML Bootstrap Navbar para gerar o menu superior -->


    <!-- partial:index.partial.html -->
	<div class="container">
        <!-- Início do foreach para gerar vários cards de produtos dinamicamente-->
        <?php foreach ($produtos as $produto) :?>
            <!-- HTML para gerar um card de um produto-->
            <div class="product-card">
                <div class="badge">
                    <?php echo $produto['status'];?>
                </div>
                <div class="product-tumb">
                    <img src="<?php echo $produto['imagem'];?>" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">
                        <?php echo $produto['categoria'];?>
                    </span>
                    <h4><a href="">
                            <?php echo $produto['titulo'];?>
                        </a></h4>
                    <p>
                        <?php echo $produto['descricao'];?>
                    </p>
                    <div class="product-bottom-details">
                        <div class="product-price"> <small>
                                 <?php echo $produto['preço'];?> </small>
                                  <?php echo $produto['preço_com_desconto'];?>
        </div>
                                 
                                 <div class="product-links">
                                     <a href=""><i class="fa fa-heart"></i></a>
                                     <a href=""><i class="fa fa-shopping-cart"></i></a>          
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                    <!-- Fim do HTML para gerar um card de um produto-->
                    

    <script src='https://use.fontawesome.com/7dd91a0fb4.js'></script>
</body>

</html>
