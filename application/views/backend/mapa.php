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
                   Alterar mapa
                </div>
                <div class="panel-body">
					<div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/mapa/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Nome do Mapa">
                                 <br/>
                                 <label id="mapa">Arquivo de mapa</label>
                                 <input id="mapa" name="mapa" type="file" value="Procurar arquivo...">
                                 <br/>
                             </div>
                             <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <?php
                                echo form_close();
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                    <!-- <div class="col-lg-12">
                        <?php
                            echo validation_errors('<div class="alert alert-danger">','</div>');
                            echo form_open_multipart('admin/mapa/alterar_mapa/');

                        ?>
                        <div class="form-group">
                            <br/>
                            <label>Arquivo em pdf</label>
                            <input id="mapa" name="mapa" type="file">
                            <br/>
                            <button type="submit" class="btn btn-primary">Salvar Alteração</button>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                     /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
		<div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("Nome do Mapa", "Alterar Mapa","Excluir Mapa");
                                foreach($mapas as $mapa){
                                    $nomemapa = $mapa->nome;
                                    $arquivo = anchor(base_url('admin/mapa/pagina_arquivo/'.$mapa->id),'<button type="button" class="btn btn-link"><span style="color:purple"><i class="fa fa-file-pdf-o fa-fw"></i>Upload</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$mapa->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$mapa->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de mapa</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o arquivo '.$mapa->nome.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/mapa/remover/".$mapa->id."/".$mapa->arquivo).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($nomemapa,$arquivo,$excluir);
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
