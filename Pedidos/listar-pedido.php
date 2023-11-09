<h1>Pedidos realizados:</h1>
<?php
    $sql = "SELECT * FROM pedidosnovos";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0){
        print "<table class='table table-hover table-bordered'>";
        print "<tr>";
        print "<th>Numero do pedido</th>";
        print "<th>Endereço</th>";
        print "<th>Forma de Pagamento</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
        print "<tr>";
        switch ($row->numero) {
            case 1:
                print "<td>Combo Gragas</td>";
                break;
            case 2:
                print "<td>Combo Zilean</td>";
                break;
            case 3:
                print "<td>Combo Fizz</td>";
                break;
                case 4:
                print "<td>Combo Anivia</td>";
                break;
            case 5:
                print "<td>Combo Yordle</td>";
                break;
            }
        print "<td>".$row->endereco."</td>";
        print "<td>".$row->pagamento."</td>";
        print "</tr>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->numero."';\"  class='btn btn-primary'>Editar</button>

                <button onclick=\"if(confirm('Deseja confirmar o seu pedido??')){location.href='?page=salvar&acao=confirmar&id=".$row->numero."';}else{false;}\" 
                class='btn btn-success'>Confirmar pedido</button>

                <button onclick=\"if(confirm('Deseja excluir o seu pedido??')){location.href='?page=salvar&acao=excluir&id=".$row->numero."';}else{false;}\" 
                class='btn btn-danger'>Excluir pedido</button>
                </td>";
        print "<td>
        </td>";
        print "<td>
        </td>";
        print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nenhum pedido realizado</p>";
    }
?>
