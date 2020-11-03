<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel='stylesheet' type='text/css' href='css/styles.css'>
    </head>

    <body style="text-align:center">
        
    <nav class="menu">
        <a href="index.php"><img src="./imagens/logo.jpg" width="100px" height="100px" alt="Full Stack Eletro"></a>
        <a href="produtos.php">Produtos</a>
        <a href="loja.php">Nossas Lojas</a>
        <a href="contato.php">Contato</a>
    </nav>

        <h2>
            Contato
        </h2>
        <hr>
        
        <div class="contatos">
                <div class="contato">
                <p>E-mail: contato@fullstackeletro.com.br</p>
            </div>

            <div class="contato">
                <p>Whatsapp: (11)99506-3569</p>
            </div>     
        </div>   

        <h3> Peça o seu produto: </h3>

        <!-- Formulário -->

        <form method='post' name='pedidos'> 
            Nome:<br> 
            <input type="text" name="nome" style="width:500px"><br> 

            Endereço:<br> 
            <input type="text" name="endereco" style="width:500px"><br> 
            
            Telefone:<br> 
            <input type="number" name="telefone" style="width:500px"><br> 
           
            Produto:<br> 
            <select name="produto" style="width:500px">
                <option value=""></option>
                <option value="Panela">Panela Eletrica de Arroz Mondial</option>
                <option value="Panela 2">Panela Eletrica de Arroz Mondial PE-10 700W</option>
                <option value="Liquidificador">Liquidificador Mondial com Filtro Turbo L900FB com 5 Velocidades</option>
                <option value="Liquidificador 2">Liquidificador Mondial Turbo L-1000 RI com 12 Velocidades</option>
                <option value="Sanduicheira">Sanduicheira e Grill Britania Crome 2P</option>
                <option value="Sanduicheira 2">Sanduicheira Britania Bello Pane</option>
                <option value="Ventilador">Ventilador de Mesa Mondial - 3 Velocidades</option>
                <option value="Ventilador 2">Ventilador de Coluna Malory - 3 Velocidades</option>
                <option value="Aspirador">Aspirador de Po Britania Faciclean</option>
                <option value="Aspirador 2">Aspirador de Po Vertical Philco</option>
                <option value="Centrifuga">Centrifuga de Roupas Britania 12Kg</option>
                <option value="Centrifuga 2">Centrifuga de Roupas Mueller Super 5 kg</option>
            </select><br>  

            Quantidade:<br> 
            <input type="number" name="quantidade" style="width:500px"><br><br>
            <input type="submit" name="submit" value="Enviar" style="width:500px"><br><br>
        </form> 

        <!-- Fim Formulário -->

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

        if(isset($_POST['nome']) && isset($_POST['endereco']) && ($_POST['telefone']) && isset($_POST['produto']) && ($_POST['quantidade'])){ 
                
            $nome = $_POST['nome']; 
            $endereco = $_POST['endereco']; 
            $telefone = $_POST['telefone']; 
            $produto = $_POST['produto'];  
            $quantidade = $_POST['quantidade']; 

            $sql = "insert into pedidos (nome, endereco, telefone, produto, quantidade) values('$nome', '$endereco', '$telefone', '$produto', '$quantidade')"; 
            $result = $conn->query($sql); 
            
            if($result){ 
                echo "Pedido efetuado com sucesso!"; 
            }
            else{ 
                echo "Houve um erro, pedido não efetuado!";
            }             
        }
    ?> 

    <br>
        <footer id="formas-pagamento">
            <h2>
                Formas de Pagamento
            </h2>
            <img src="./imagens/pagamento.jpg" alt="Formas de Pagamento">
        </footer>
    </body>
</html>