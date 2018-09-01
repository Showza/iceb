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
                                echo form_open_multipart('admin/salas/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Nome do prédio - Dia da semana">
                                 <br/>
                                 <label id="arquivo">Arquivo de alocação de salas</label>
                                 <input id="arquivo" name="arquivo" type="file" value="Procurar arquivo...">
                                 <br/>
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
                                $this->table->set_heading("Nome do arquivo", "Alterar Arquivo","Excluir Alocação de Sala");
                                foreach($salas as $sala){
                                    $nomesala = $sala->nome;
                                    $arquivo = anchor(base_url('admin/salas/pagina_arquivo/'.$sala->id),'<button type="button" class="btn btn-link"><span style="color:purple"><i class="fa fa-file-pdf-o fa-fw"></i>Upload</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$sala->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$sala->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de sala</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o arquivo '.$sala->nome.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/salas/remover/".$sala->id."/".$sala->arquivo).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($nomesala,$arquivo,$excluir);
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
