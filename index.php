<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Pedro">
    <meta name="description" content="Landing page da Loja Rocha Ferragen.">
    <meta name="keywords" content="Ferragem, Rocha Ferragens, Loja">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Rocha Ferragens</title>
</head>
<body>
    <header class="cabecalho">
        <nav>
            <ul class="lista_navegacao">
                <li>
                    <a href="#">Produtos</a>
                    <div class="rastro"></div>
                </li>
                <li>
                    <a href="#">Contato</a>
                    <div class="rastro"></div>
                </li>
                <li>
                    <a href="#">Sobre</a>
                    <div class="rastro"></div>
                </li> 
            </ul><!--navegação principal-->
            <div class="nav_secundaria">
                <div>
                    <input type="checkbox" id="nav">
                    <label class="fechar_nav"for="nav">⨯</label>
                    <label class="abrir_nav"for="nav">☰</label><!--botões com label e checkbox-->
                    <div class="lista_nav_secundaria">
                        <a href="#">Produtos</a>
                        <a href="#">Contato</a>
                        <a href="#">Sobre</a>
                    </div><!--links-->
                </div>
            </div><!--navegação secundaria-->
        </nav><!--navegação-->
        <div class="logo">
            <img src="img/LOGO.png" alt="Logo da Loja">
        </div><!--logo-->
    </header><!--cabeçalho-->
    <main class="conteudo-principal">
        <div class="container_chamada">
            <section class="chamada">
                <h2>Como é bom</h2>
                <h1>comprar aqui!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed felis ante. Donec leo mi, laoreet a sapien at, luctus sagittis tortor. Ut ut tincidunt mauris. Donec id nisi quis velit pharetra hendrerit. Phasellus pulvinar dui non nunc bibendum, sed lobortis purus sollicitudin. Maecenas posuere nec augue quis facilisis. Pellentesque consectetur mattis pellentesque. Mauris ut lacus ligula. Duis dolor magna, molestie vitae eros vitae, rutrum eleifend nisi. Duis sagittis augue nec nisl fringilla, in viverra ipsum rhoncus. Duis at posuere ligula. Etiam aliquam purus non interdum vestibulum. In in nisl diam. Cras lobortis sollicitudin libero at cursus.</p>
                <div class="botao">
                    <button>Cliquei aqui</button>
                    <p>Acesse nossa loja online!</p>
                </div><!--botão-->
            </section><!--chamada-->
            <section class="ferramentas">
                <img src="img/Ferramentas-removebg.png" alt="Ferramentas">
            </section><!--ferramentas-->
        </div><!--container chamada-->
        <div class="container_produto">
            <h2>Produtos</h2><!--titulo conteiner-->
            <div class="produtos">
                <div class="produto_individual">
                    <img src="img/furadeira.png" alt="Imagem furadeira">
                    <div class="conteudo_before">
                        <h2>Furadeira</h2>
                        <p><u>Preço:</u> R$ X,00</p>
                        <p><u>Estoque:</u> X Unidades</p>
                    </div><!--conteudo before-->
                </div><!--produto individual-->
                <div class="produto_individual">
                    <img src="img/lampada.png" alt="Imagem lampada">
                    <div class="conteudo_before">
                        <h2>Lampada</h2>
                        <p><u>Preço:</u> R$ X,00</p>
                        <p><u>Estoque:</u> X Unidades</p>
                    </div><!--conteudo before-->
                </div><!--produto individual-->
                <div class="produto_individual">
                    <img src="img/trena.png" alt="Imagem trena">
                    <div class="conteudo_before">
                        <h2>Trena</h2>
                        <p><u>Preço:</u> R$ X,00</p>
                        <p><u>Estoque:</u> X Unidades</p>
                    </div><!--conteudo before-->
                </div><!--produto individual-->
                <div class="produto_individual">
                    <img src="img/lata_tinta.png" alt="Imagem lata de tinta">
                    <div class="conteudo_before">
                        <h2>Lata de tinta</h2>
                        <p><u>Preço:</u> R$ X,00</p>
                        <p><u>Estoque:</u> X Unidades</p>
                    </div><!--conteudo before-->
                </div><!--produto individual-->
            </div><!--produtos-->
        </div><!--container produto-->
    </main><!--conteúdo principal-->
    <div class="bg_principal">
            <div class="grudenta">
                <img class="bg1"src="img/bg1.png" alt="plano de fundo">
                <img class="bg2" src="img/bg2.png" alt="plano de fundo">
            </div>
    </div><!--bg principal-->
</body>
</html>