<h1>Nova tarefa</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value = "cadastrar">
    <div class="mb-3">
        <label>Nome da tarefa</label>
        <br>
        <input type="text" name="nome_tarefa"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Descrição</label>
        <br>
        <input type="text" name="descricao"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Data</label>
        <br>
        <input type="date" name="data"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Hora</label>
        <br>
        <input type="time" name="hora"
        class="form-contol">   
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</form>