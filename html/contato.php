<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto Optiva OAT</title>
    <link rel="stylesheet" href="../Css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,320,400,500,600,700,900,1024,1200" rel="stylesheet">
    <link rel="stylesheet" href="../Css/estilo.css">
</head>
<body>
    <div class="header">
        <div class="linha">
            <header>
                <div class="coluna col4">
                    <h1 class="logo">Mundo do Automobilismo Virtual</h1>
                </div>
                <div class="coluna col8">
                    <nav>
                        <ul class="menu inline sem-marcador">
                            <li><a href="../index.php">Página inicial</a></li>
                            <li><a href="simuladores.php">Simuladores</a></li>
                            <li><a href="sobre.php">sobre</a></li>
                            <li><a href="contato.php">Cadastro</a></li>
                            <li><a href="listagem.php">Listagem</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>
    <div class="linha">
        <section>
            <div class="coluna col5 sidebar">
                <h3>Localização</h3>
                <img src="../img/mapa.jpg" />
                <ul class="sem-padding sem-marcador">
                    <li>Rua dos bobos, 0</li>
                    <li>TC - MG</li>
                </ul>
                <h3>Contato Direto</h3>

                <ul class="sem-padding sem-marcador">
                    <li>Fone: <strong>(00) 9 9999-9999</strong></li>
                    <li>E-mail: <strong>AV@exemplo.com</strong></li>
                  
                </ul>
            </div>
            <div class="coluna col7 contato">
                <h2>Cadastro:</h2>
                <form action="?pg=processar<?= $actionEditar ?>" method="POST">
        <div class="form-group">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">         
         </div>
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </section>
    </div>
    <div class="conteudo-extra">
        <div class="linha">
            <div class="coluna col7">
                <section>
                    
                </section>
            </div>
            <div class="coluna col5">
                <h3>Nossos parceiros:</h3>
                <ul class="sem-marcador sem-padding noticias">
                    <li>
                       <a href="https://www.iracingbrasil.com.br/"><img src="../img/irb.jpg" /></a>
                        <h4>IRB iracing Brasil</h4>
                        <p>Campeonatos de automobilismo virtual<br><a href="https://www.iracingbrasil.com.br/">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <a href="https://www.iracingbrasil.com.br/"><img src="../img/f1bc.jpg" /></a>
                        <h4>F1BC</h4>
                        <p>Campeonatos de automobilismo virtual <br><a href="https://www.f1bc.com/">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <a href="https://fbav.com.br"><img src="../img/fbav.jpg" /></a>
                        <h4>FBAV</h4>
                        <p>Campeonatos de automobilismo virtual <br><a href="https://fbav.com.br">Leia mais &raquo;</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="linha">
                <footer>
                    <div class="coluna col12">
                        <span>&copy; 2019 OAT optativa</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
