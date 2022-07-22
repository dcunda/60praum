<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

    <div class="produtos">
        <div class="produtoroupa">
                <img src="./content/<?php echo $produtos [$id]['imagem']?>" height="600px">

            </div>


            <div class="detalhe">
                <h2><?php echo $produtos[$id]['nome'];?></h2>
                <h5>R$ <?php echo $produtos [$id]['preco']?></h5>
                <p><?php echo $produtos [$id]['descricao']?></p>
                <button>COMPRAR</button>
            </div>


    </div>
    

<?php
// include do footer
include_once './includes/_footer.php';
?>