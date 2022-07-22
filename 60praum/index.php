<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<div class="wall"></div>

<h1>Menu</h1>

<div class="container">
    <div class="row">
        <?php
        // laço de repetição
        for ($i=0; $i < 8; $i++) {      
        ?>  
            
            <div class="camisas">
                <a href="produto-detalhe.php?id=<?php echo $i?>"><img src="./content/<?php echo $produtos[$i]['imagem']?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produtos[$i]['nome']?></h5>
                        <p class="card-text">R$ <?php echo $produtos[$i]['preco']?></p>
                        
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