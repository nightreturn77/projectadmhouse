
<div class="container-fluid" id="backpage">
<table class="table">
<h1 class="mt-4">Lista de Produtos</h1>
<thead>
<tr>
<?php if($_SESSION['tipoUsuario'] == 2){ echo '<th scope="col">Situação</th>';} ?>
<th scope="col">Nome</th>
<th scope="col">Preço</th>
<th scope="col">Validade</th>
<th scope="col">Data da Compra</th>
<th scope="col">Tipo do Produto</th>
<th scope="col">Quantidade</th>
<th scope="col">Medida</th>
<?php if($_SESSION['tipoUsuario'] == 2){ echo '<th scope="col">Id Usuario</th>';} ?>



</tr>
</thead>
<tbody>
<?php

include("connection.php");
//tratando o usuário mestre 


$id = $_SESSION['idUsuario'];
$tipo = $_SESSION['tipoUsuario'];
if($tipo == 1){
$query = "select * from produto where situacao = 'ativo' and idUsuario = $id";
}else{ 
$query = "select * from produto";
}
$consulta = mysqli_query($con, $query);
while($prod = mysqli_fetch_array($consulta)){

$nome = $prod['nome'];
$preco = $prod['preco'];
$validade = $prod['validade'];
$data = $prod['dataCompra'];
$tipo = $prod['tipo'];
$quantidade = $prod['quantidade'];
$medida = $prod['medida'];
$tipoMedida = $prod['tipoMedida'];
$idmercado = $prod['idMercado'];
$idUsuario = $prod['idUsuario'];
$situacao = $prod['situacao'];

$x = "select * from mercado where idMercado = $idmercado";
$y = mysqli_query($con, $x);
$z = mysqli_fetch_array($y);
$nomemercado = $z['nome'];
$logradouro = $z['logradouro'];
$numero = $z['numero'];
$cep = $z['cep'];

if($_SESSION['tipoUsuario'] == 1){
echo "<tr><td>$nome</td>
<td>R$ $preco</td>
<td>", date('d/m/y',strtotime($validade)), "</td>
<td>"; echo date('d/m/y',strtotime($data)); echo "</td>
<td>$tipo</td>
<td>$quantidade</td>
<td>$medida $tipoMedida</td>
<td><a href='atualizarProduto.php?id=".$prod['idproduto']." '>Atualizar</a></td>
<td><a href='deletarProduto.php?id=".$prod['idproduto']." '>Deletar</a></td>
<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModa$idmercado'>
  Estabelecimento
</button></td>




";
}else{ 

  echo "<tr><td alt='oi'>$situacao</td>
  <td>$nome</td>
  <td>R$ $preco</td>
  <td>", date('d/m/y',strtotime($validade)), "</td>
  <td>"; echo date('d/m/y',strtotime($data)); echo "</td>
  <td>$tipo</td>
  <td>$quantidade</td>
  <td>$medida $tipoMedida</td>
  <td>$idUsuario</td>
  <td><a href='atualizarProduto.php?id=".$prod['idproduto']." '>Atualizar</a></td>
  <td><a href='deletarProduto.php?id=".$prod['idproduto']." '>Deletar</a></td>
  <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModa$idmercado'>
    Estabelecimento
  </button></td>
  
  
  
  
  ";


}

echo '<!-- Modal -->
<div class="modal fade" id="exampleModa'.$idmercado.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Endereço da compra do produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group col-md-12">
      <label for="dataproduto">NOME:</label>
            <label for="dataproduto"><a href="listamercado.php?id='.$idmercado.'">'.$nomemercado.'</a></label>
        </div>
        <div class="form-group col-md-12">
      <label for="dataproduto">LOGRADOURO:</label>
            <label for="dataproduto">'.$logradouro.'</label>
            <label>NÚMERO:</label><label>'.$numero.'</label>
        </div>
        <div class="form-group col-md-12">
      <label for="dataproduto">CEP:</label>
            <label for="dataproduto">'.$cep.'</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>';

}

?>

</tbody>
</table>
</div>



