<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Adicionar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/cursos/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-curso">Nome do Curso</label>
                                 <input id="txt-curso" name="txt-curso" type="text" class="form-control" placeholder="Digite o nome do curso">
                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <input id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="Descreva o curso">
                                 <br/>
                                 <label id="txt-video">Link do Video</label>
                                 <input id="txt-video" name="txt-video" type="text" class="form-control" placeholder="Link do Video">
                                 <br/>
                                 <label id="txt-link">Matriz Curricular</label>
                                 <input id="txt-link" name="txt-link" type="file" accept="application/pdf" value="Procurar arquivo..." placeholder="nenhum arquivo selecionado">
                                 <?php echo form_error('txt-link', '<p class="frm_err">', '<p>'); ?>
                                 <br/>
                                 <label id="txt-atuacao">Area de Atuacao</label>
                                 <input id="txt-atuacao" name="txt-atuacao" type="text" class="form-control" placeholder="Digite a área de atuação">
                                 <br/>
                                 <label id="txt-modalidade">Modalidade</label><br/>
                                 <select id="txt-modalidade" name="txt-modalidade">
                                   <option> Escolha uma opção: </option>
                                   <option value="Bacharelado">Bacharelado</option>
                                   <option value="Licenciatura">Licenciatura</option>
                                 </select>
                                 <br/>
                                 <br/>
                                 <label id="txt-duracao">Duracao (em semestres)</label><br/>
                                 <input id="txt-duracao" name="txt-duracao" type="number" min="1" placeholder="mínimo: 1"><br/>
                                 <br/>
                                 <label id="txt-vagas">Vagas</label><br/>
                                 <input id="txt-vagas" name="txt-vagas" type="number" min="0" placeholder="mínimo: 0"><br/>

                                 <br/>
                                 <label id="txt-turnos">Turnos</label><br/>
                                 <select id="txt-turnos" name="txt-turnos">
                                     <option> Escolha uma opção: </option>
                                     <option value="Diurno">Diurno</option>
                                     <option value="Noturno">Noturno</option>
                                     <option value="Integral">Integral</option>
                                 </select>
                                <br/>
                                <br/>
                                 <label id="txt-info">Informacoes reconhecimento de curso</label>
                                 <input id="txt-info" name="txt-info" type="text" class="form-control" placeholder="Link das informações">
                             </div>
                             <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <?php
                                echo form_close();
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("Nome do Curso","Alterar Dados","Alterar Matriz","Excluir Curso");
                                foreach($cursos as $curso){
                                    $nomecurso = $curso->titulo;
                                    $alterar = anchor(base_url('admin/cursos/pagina_alterar/'.$curso->id),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $matriz = anchor(base_url('admin/cursos/pagina_matriz/'.$curso->id),'<button type="button" class="btn btn-link"><span style="color:purple"><i class="fa fa-file-pdf-o fa-fw"></i>Upload</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$curso->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$curso->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de curso</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o curso '.$curso->titulo.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/cursos/remover/".$curso->id.'/'.$curso->link).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($nomecurso,$alterar,$matriz,$excluir);
                                }
                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                echo $this->table->generate();
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!--

<form role="form">
    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" placeholder="Entre com o texto">
    </div>
    <div class="form-group">
        <label>Foto Destaque</label>
        <input type="file">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Selects</label>
        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Cadastrar</button>
    <button type="reset" class="btn btn-default">Limpar</button>
</form>

-->
