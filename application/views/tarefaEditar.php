<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    </head>
    <body>
        <a href="<?php echo base_url() . 'tarefa';?>">Voltar</a>
        <div class="jumbotron text-center">
            <h1>Editar Tarefa</h1><br>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
            <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php echo form_open('tarefa/atualizar'); ?>
            <input type="hidden" name="idTarefa" required value="<?php echo $tarefa[0]->idTarefa; ?>"/>
            <input class="form-control" type="text" name="titulo" required value="<?php echo $tarefa[0]->titulo; ?>"/>
            <br><label for="status">Status aqui:</label>
            <select class="form-control" name="status" id="status" required placeholder="Status aqui..." name="status">
                <option value="Aberto">Aberto</option>
                <option value="Em Andamento">Em Andamento</option>
                <option value="Fechado">Fechado</option>
                <option value="Concluído">Concluído</option>
            </select>
            <br><br>
            <input class="form-control" type="date" name="data" required value="<?php echo $tarefa[0]->data; ?>"/>
            <br><br>
            
            <br><br>
            <input type="submit" name="salvarPF" value="Salvar">
            
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>
    </body>
</html>
