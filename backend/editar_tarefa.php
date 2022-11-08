<h1>Editar Tarefa</h1>
<?php
    $sql = "SELECT * FROM tarefas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?> 
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value = "editar">
    <input type="hidden" name="id" value = "<?php print $row-> id; ?>">
    <div class="mb-3">
        <label>Nome datarefa</label>
        <br>
        <input type="text" name="nome_tarefa" value="<?php print $row->nome_tarefa; ?>" class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Descrição</label>
        <br>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Data</label>
        <br>
        <input type="date" name="data" value="<?php print $row->data; ?>"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Hora</label>
        <br>
        <input type="time" name="hora" value="<?php print $row->hora; ?>"
        class="form-contol">   
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</form>