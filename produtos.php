<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='css/styles.css'>
        <script src="js/script.js"></script>
        <title>Produtos - Full Stack Eletro</title>
    </head>
    <body>

    <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "bancofullstack";

        // Conexão 
        $conn = mysqli_connect($servername, $username, $passoword, $database);

        // Verifica a conexão 
        if(!$conn) {
            die("A conexão com o Banco de Dados falhou: " .mysqli_connect_error());
        }
    ?>
       
    <nav class="menu">
        <a href="index.php"><img src="./imagens/logo.jpg" width="100px" height="100px" alt="Full Stack Eletro"></a>
        <a href="produtos.php">Produtos</a>
        <a href="loja.php">Nossas Lojas</a>
        <a href="contato.php">Contato</a>
    </nav>

        <h2>
            Produtos
        </h2>    
        <hr>
            <aside class="categorias">
                <h3>Categorias</h3>
                    <li onclick="mostrar_todos()">Todos os Produtos (12)</li>
                    <li onclick="mostrar_categoria('panelas')">Panelas Elétricas (2)</li>
                    <li onclick="mostrar_categoria('liquidificadores')">Liquidificadores (2)</li>
                    <li onclick="mostrar_categoria('sanduicheiras')">Sanduicheiras (2)</li>
                    <li onclick="mostrar_categoria('ventiladores')">Ventiladores (2)</li>
                    <li onclick="mostrar_categoria('aspiradores')">Aspiradores de Pó (2)</li>
                    <li onclick="mostrar_categoria('centrifugas')">Centrífugas de Roupas (2)</li>
            </aside>
            
            <div class="secaoprodutos"> 

                <?php
                    $sql = "select * from produtos";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                            
                ?>
                    <div class="produto" style="display:inline-block;" id=<?php echo $rows["categoria"];?>>
                        <img src="<?php echo $rows["img"];?>" width="120px" onclick="aumentar(this)">
                        <br>
                        <p><?php echo $rows["descricao"];?></p><br>
                        <p class="precoa">R$<?php echo $rows["preco_antigo"]; ?></p>
                        <p class="preco">R$<?php echo $rows["preco_atual"]; ?></p>
                        <hr>
                    </div>
                
                <?php
                        } 
                    } else {
                        echo "Nenhum produto cadastrado!";
                    }
                ?>
            </div>

        <footer id="formas-pagamento">
            <h2>
                Formas de Pagamento
            </h2>
            <img src="./imagens/pagamento.jpg" alt="Formas de Pagamento">
        </footer>
    </body>
</html>