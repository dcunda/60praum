<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

    <div class="produtos">
        <div class="produtoroupa">
                <img src="./content/<?php echo $moletons [$id]['imagem']?>" height="600px">

            </div>


            <div class="detalhe">
                <h2><?php echo $moletons[$id]['nome'];?></h2>
                <h5>R$ <?php echo $moletons [$id]['preco']?></h5>
                <p><?php echo $moletons [$id]['descricao']?></p>
                <button>Comprar</button>
            </div>


    </div>
    

<?php
// include do footer
include_once './includes/_footer.php';
?>