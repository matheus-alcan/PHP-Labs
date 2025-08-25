<?php
    $cpf = $_POST["cpf"] . "<br>";
    $nome = $_POST["nome"] . "<br>";
    $endereco = $_POST["endereco"] . "<br>";
    $cep = $_POST["cep"] . "<br>";
    $cidade = $_POST["cidade"] . "<br>";
    $estado = $_POST["estado"] . "<br>";
    $sexo_selecionado = $_POST["sexo"] . "<br>";

    if (isset($_POST['email-produtos'])){
        echo "Quer receber e-mails sobre produtos";
    }
    
    if (isset($_POST['email-empresa'])){
        echo "Quer receber notificações sobre empresa";
    }

    $anime_preferido = $_POST['pesquisa'];

    if (!empty($anime_preferido)) {
        echo "Seu anime prefeirdo é: " . $anime_preferido;
    }
    else {
        echo "Você não selecionou";
    }

    $produto = $_POST["produto"] . "<br>";
    $preco = $_POST["preco"] . "<br>";
    $quantidade = $_POST["quantidade"] . "<br>";
    $valor = $_POST[$preco * $quantidade];
    $avista = $valor * 0.9;
    $prazo = $valor * 1.2;
    $parcelado = $valor / 4 ; 

    echo "Dados do Cliente";
    echo "CPF: $CPF";
    echo "Cliente: $nome";
    echo "Endereço: $endereco";
    echo "CEP: $cep";
    echo "Cidade: $cidade";
    echo "Estado: $estado";
    echo "Sexo: $sexo";

    echo "Dados do Pedido";
    echo "Produto: $produto";
    echo "Preço: $preco";
    echo "Quantidade: $quantidade";
    echo "Quantidade da compra: $valor";

    echo "Formas de Pagamento";
    echo "Total a vista: $avista";
    echo "Total a prazo: $prazo";
    echo "Total parcelado: $parcelado";
?>