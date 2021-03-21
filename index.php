<?php
    include_once('viacep.php');
    $address = getAddress();
?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="title"> Digite o CEP </div>
            <form action="." method="post">
                <!--<p>Digite o CEP para encontrar o endereço.</p>-->
                <div class="row">
                    <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep ?>">
                </div>
                <input type="submit">
                <div class="row">
                    <label for="logradouro">Rua</label>
                    <input type="text" placeholder="Rua" name="rua" value="<?php echo $address->logradouro ?>">
                </div>
                <div class="row">
                    <label for="bairro">Bairro</label>
                    <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro ?>">
                </div>
                <div class="row">
                    <label for="localidade">Cidade</label>
                    <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade ?>">
                </div>
                <div class="row">
                    <label for="uf">Estado</label>
                    <input type="text" placeholder="Estado" name="estado" value="<?php echo $address->uf ?>">
                </div>
            </form>
            <footer>
            Por Lucas Santiago &#169 2021
            </footer>
        </div>
    </main>

</body>
</html>