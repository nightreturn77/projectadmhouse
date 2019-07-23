<?php
include("header.php");

?>
<div class="container-fluid" id="backpage">
<table class="table">
<h1 class="mt-4">Lista de Produtos</h1>
<tr>

<th>Nome</th>
<th>Preço</th>
<th>Validade</th>
<th>Data da Compra</th>
<th>Tipo do Produto</th>
<th>Quantidade</th>
<th>Medida</th>



</tr>


<?php

include("connection.php");

$query = "select * from produto where situacao = 'ativo'";
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

$x = "select * from mercado where idMercado = $idmercado";
$y = mysqli_query($con, $x);
$z = mysqli_fetch_array($y);
$nomemercado = $z['nome'];
$logradouro = $z['logradouro'];
$numero = $z['numero'];
$cep = $z['cep'];


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
            <label for="dataproduto">'.$nomemercado.'</label>
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


</table>
</div>
<?php

include("footer.php");
?>





