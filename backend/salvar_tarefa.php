<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_tarefa = $_POST["nome_tarefa"];
            $descricao = $_POST["descricao"];
            $data = $_POST["data"];
            $hora = $_POST["hora"];

            $sql = "INSERT INTO tarefas (nome_tarefa, descricao, data, hora) VALUES ('{$nome_tarefa}', '{$descricao}', '{$data}', '{$hora}')";

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('cadastrado com sucesso'); </script> ";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }
            else{
                print"<script> alert('nao foi possivel cadastrar'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
        case 'editar':
            $nome_tarefa = $_POST["nome_tarefa"];
            $descricao = $_POST["descricao"];
            $data = $_POST["data"];
            $hora = $_POST["hora"];

            $sql = "UPDATE tarefas SET 
                        nome_tarefa='{$nome_tarefa}',
                        descricao='{$descricao}',
                        data='{$data}',
                        hora='{$hora}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('editado com sucesso'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                print"<script> alert('nao foi possivel editar'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
        case 'excluir':
            $sql="DELETE FROM tarefas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('excluido com sucesso'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                print"<script> alert('nao foi possivel excluir'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
        
        default:
            # code...
            break;
    }
?>