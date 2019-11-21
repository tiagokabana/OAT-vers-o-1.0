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
            
    <?php

$idProduto = $_GET['id'];

if (isset($_POST['enviar'])) {


	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$img = $_FILES['imagem'];
	$descricao = $_POST['descricao'];

	$img_nome = $img["name"];	

	$sql = "UPDATE produto SET nome='$nome',valor='$valor',descricao='$descricao'";

	if ($img_nome != ''){

		$sql .= ",imagem='$img_nome'";

		//Mover imagem para pasta escolhida
		rename($img['tmp_name'], $caminho_img.$img_nome);

	}

	$sql .= " WHERE id = " . $idProduto;	

	executar_sql($conexao, $sql);

}

$sql = "SELECT * FROM produto WHERE id = " . $idProduto;

$result = executar_sql($conexao, $sql);

$produto = null;

if (!($produto = $result->fetch_object())) {

	echo "Problema ao buscar produto.";

}

?>

<h1>Formulário de Alteração</h1>

<form action="" class="form-group" method="POST" enctype="multipart/form-data">
<p>Nome: <input type="text" name="nome" value="<?= $produto->nome ?>" id="nome" class="form-control">         
</p>
<p>Valor: <input type="number" name="valor" value="<?= $produto->valor ?>" class="form-control" id="valor">
</p>
<p>Imagem: <input type="file" class="form-control" name="imagem" id="imagem">
<span><img width='100px' src="<?= $caminho_img.$produto->imagem ?>" /></span>
</p>
<p>Descrição: <textarea name="descricao" placeholder="Insira uma descrição breve do produto..." id="descricao" class="form-control" rows="5" cols="50"><?= $produto->descricao ?></textarea></p>
<p><input type="submit" name="enviar" class="btn btn-primary" value="Enviar"> <input type="reset" name="resetar" class="btn btn-danger" value="Resetar"></p>
</form>


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
                        <img src="../img/irb.jpg" />
                        <h4>IRB iracing Brasil</h4>
                        <p>Campeonatos de automobilismo virtual<br><a href="https://www.iracingbrasil.com.br/">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <img src="../img/f1bc.jpg" />
                        <h4>F1BC</h4>
                        <p>Campeonatos de automobilismo virtual <br><a href="https://www.f1bc.com/">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <img src="../img/fbav.jpg" />
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










