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
            <div class="coluna col8">
                <?php

if($_GET['acao'] == 'remover'){
    $idProduto = $_GET['id'];

    $sql = "DELETE FROM produto WHERE id = " . $idProduto;

    $result = executar_sql($conexao, $sql);

    if($result === TRUE){
        echo "Cadastro excluído com sucesso!";
    }
}

?>

<h1>Listagem de Produtos</h1>

<table class="table">
    
    <tr>
        <td>id</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Descrição</td>
        <td>Imagem</td>
        <td></td>
        <td></td>
    </tr>

    <?php       

        $sql = "SELECT * FROM produto";

        $result = executar_sql($conexao, $sql);     

        if ($result) {
            
            while ($row = $result->fetch_object()) {

                ?>


                <tr>
                    <td><b><?= $row->id ?></b></td>
                    <td><?= $row->nome ?></td>
                    <td><?= $row->valor ?></td>
                    <td><?= $row->descricao ?></td>
                    <td><img width='50px' height='50px' src='<?= $caminho_img.$row->imagem ?>' /></td>
                    <td><a href="?pg=alterar&id=<?= $row->id ?>">Alterar</a></td>
                    <td><a href="?pg=listar&acao=remover&id=<?= $row->id ?>" onclick="return confirm('Desejar remover este item?');">Remover</a></td>
                <tr>

                <?php

                // $str = "<tr>";               

                // $str .= "<td>" . $row->id . "</td>";             
                // $str .= "<td>" . $row->nome . "</td>";               
                // $str .= "<td>" . $row->valor . "</td>";              
                // $str .= "<td>" . $row->descricao . "</td>";              
                // $str .= "<td><img width='30px' height='30px' src='" . $caminho_img.$row->imagem . "' /></td>";   

                // $str .= "</tr>"; 

                // echo $str;                       


                // printf ("<tr>
                //  <td>%s</td>
                //  <td>%s</td>
                //  <td>%s</td>
                //  <td>%s</td>
                //  <td><img width='30px' height='30px' src='%s' /></td>", 
                //  $row->id, 
                //  $row->nome, 
                //  $row->valor, 
                //  $row->descricao, 
                //  $caminho_img.$row->imagem);
            }
            
            $result->close();
        }

    ?>
    

</table>
                
                
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
