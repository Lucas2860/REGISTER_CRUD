<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if ($qtd > 0){
        print "<table class='table table-houver table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>NOME</th>";
            print "<th>E-MAIL</th>";
            print "<th>DATA NASCIMENTO</th>"; 
            print "<th>AÇÕES</th>"; 
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id;
            print "<td>".$row->nome;
            print "<td>".$row->email;
            print "<td>".$row->data_nasc; 
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>EDITAR</button>
                    <button class='btn btn-danger'>EXLUIR</button>
                   </td>"; 
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resutados!</p>";
    }
?>