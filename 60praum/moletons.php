<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1 class="troupas">Moletons</h1>

<div class="container">
    <div class="row">
        <?php
        // laço de repetição
        foreach ($moletons as $key => $value) {
        
        ?>    
        <div class="camisas">
        <a href="produto-moletons.php?id=<?php echo $key?>"><img src="./content/<?php echo $value['imagem']?>" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['nome']?></h5>
                <p class="card-text">R$ <?php echo $value['preco']?></p>
                
            </div>
        </div>
        <?php
        }
        ?>


    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>