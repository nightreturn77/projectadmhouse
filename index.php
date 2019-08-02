<?php

include('header.php');




?>
<h1 class='text-center'>Bem-vindo <?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];} ?> ao Banco Home</h1>
<p class='text-center'>Este APP WEB serve para você fazer seu estoque pessoal ou simplesmente uma lista de compras.</p>
<h3 class='text-center'>Divirta-se é grátis</h3>
<hr>
<h4 class='font-weight-bold text-center'>Como usar?</h4>
<p>1 - Cadastre-se no painel acima</p>
<p>2 - Faça o login da sua conta</p>
<p>3 - Use o painel acima que estiver escrito o seu LOGIN criado na hora do cadastor</p>
<p>Lá você terá várias opções, Cadastro dos seus produtos e de estabelecimento deles.</p>
<p>Você pode também visualizar, editar e excluir tudo que você cadastrou</p>
<p>Fique a vontade!</p>
<?php 

include('footer.php');

?>