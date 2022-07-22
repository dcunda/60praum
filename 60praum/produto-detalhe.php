<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

    <div class="produtos">
        <div class="produtoroupa">
                <img src="./content/<?php echo $camisas [$id]['imagem']?>" height="600px">

            </div>


            <div class="detalhe">
                <h2><?php echo $camisas[$id]['nome'];?></h2>
                <h5>R$ <?php echo $camisas [$id]['preco']?></h5>
                <p><?php echo $camisas [$id]['descricao']?></p>
                <button>Comprar</button>
            </div>


    </div>
    

<?php
// include do footer
include_once './includes/_footer.php';
?>