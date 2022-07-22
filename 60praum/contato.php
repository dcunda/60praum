<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// valida se a variavel POST foi enviada
if (isset($_POST['txtNome'] )) {

    // strtoupper faz o texto ficar maiusculo
    $nome = $_POST['txtNome'];
    echo $nome.'<br>' ;
    
}
if (isset($_POST['txtEmail'] )) {

    // strtoupper faz o texto ficar maiusculo
    $nome = $_POST['txtEmail'];
    echo $nome.'<br>' ; 
}
if(isset($_POST['txtTel'] )) {

    // strtoupper faz o texto ficar maiusculo
    $nome = $_POST['txtTel'];
    echo $nome.'<br>' ;
}
?>

<h1 class="troupas">Faça contato conosco</h1>

<div class="formulario">
    <form action="./contato.php" method="post">
        <ul>
            <li><input type="text" name="txtEmail" id="txtNome" placeholder='Nome' ></li>
            <li><input type="text" name="txtTel" id="txtNome" placeholder='Email' ></li>
            <li><textarea name="txtMensagem" id="txtNome" cols="30" placeholder='Mensagem' rows="10"></textarea></li>
            <li><input id="botao-enviar" type="submit" value="Enviar"></li>
        </ul>
    </form>

</div>



<?php
// include do footer
include_once './includes/_footer.php';
?>