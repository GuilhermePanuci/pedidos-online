<h1>Edite seu pedido</h1>
<style>
  .form-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
  }
</style>
<?php
 $sql ="SELECT * FROM pedidosnovos WHERE id=".$_REQUEST["id"];
 $res = $conn->query($sql);
 $row = $res->fetch_object();
?>
<form action ="?page=salvar" method="POST">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
<div class="form-container">
    <div class="mb-3">
        <label>Escolha um pedido de 1 a 5</label>
        <select name="numero" class="form-control" value="<?php print $row->numero; ?>">
              <option value="1">1 Combo Gragas</option>
              <option value="2">2 Combo Zilean</option>
              <option value="3">3 Combo Fizz</option>
              <option value="4">4 Combo Anivia</option>
              <option value="5">5 Combo Yordle</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label for="pagamento">Forma de Pagamento</label>
        <select id="pagamento" name="pagamento" class="form-control" value="<?php print $row->pagamento; ?>">>
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
        </select>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>  
    </div>
</form>
