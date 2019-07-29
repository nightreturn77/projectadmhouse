<?php

include('header.php');




?>
<h1 class='text-center'>Bem-vindo <?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];} ?> ao Banco Home</h1>
<p class='text-center'>Este APP WEB serve para você fazer seu estoque pessoal ou simplesmente uma lista de compras.</p>
<h3 class='text-center'>Divirta-se é grátis</h3>
<hr>
<h4 class='font-weight-bold text-center'>Como usar?</h4>
<?php 

include('footer.php');

?>