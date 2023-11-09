<?php
    switch ($_REQUEST["acao"]) {
        
        case 'cadastrar':
            $numero = $_POST["numero"];
            $endereco = $_POST["endereco"];
            $pagamento = $_POST["pagamento"];

            $sql = "INSERT INTO pedidosnovos (numero,endereco,pagamento) VALUES ('{$numero}','{$endereco}','{$pagamento}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!);</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':
            $numero = $_POST["numero"];
            $endereco = $_POST["endereco"];
            $pagamento = $_POST["pagamento"];
            
            $sql = "UPDATE pedidosnovos SET
                        numero='{$numero}',
                        endereco='{$endereco}',
                        pagamento='{$pagamento}'

                    WHERE
                        numero=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'confirmar':

        $sql= "DELETE FROM pedidosnovos WHERE numero=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Pedido confirmado!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível confirmar pedido!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;


        case 'excluir':
            
            $sql= "DELETE FROM pedidosnovos WHERE numero=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Pedido excluido!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir pedido!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
            }

?>
