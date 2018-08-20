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
                                echo form_open_multipart('admin/noticias/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-noticia">Titulo da noticia</label>
                                 <input id="txt-noticia" name="txt-noticia" type="text" class="form-control" placeholder="Digite o titulo da noticia">
                                 <br/>
                                 <label id="txt-link">Link da noticia</label>
                                 <input id="txt-link" name="txt-link" type="text" class="form-control" placeholder="Link para a noticia">
                                 <br/>
                                 <label id="txt-data">Data</label>
                                 <input id="txt-data" name="txt-data" type="date" class="form-control" placeholder="Escolha a data">
                                 <br/>
                                 <div class="form-group">
                                    <label class="label-control" for="txt-titulo">Tipo de notícia</label>
                                    <select name="noticia" id="tipo_noticia" class="form-control" onchange="alteraDiv()">
                                        <option value="1">Normal</option>
                                        <option value="2">Destaque</option>
                                    </select>
                                 </div>
                                 


                                 <div id="form_destaque" style="display:none;">
                                    <div class="form-group">
                                        <label id="txt-img">Imagem da Notícia</label>
                                        <input type="file" class="form-control" id="txt-img" name="txt-img">
                                    </div>
                                 </div>

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
                                $this->table->set_heading("Titulo da noticia","Alterar Noticia","Excluir Noticia");
                                foreach($noticias as $noticia){
                                    $titulonoticia = $noticia->titulo;
                                    $alterar = anchor(base_url('admin/noticias/pagina_alterar/'.$noticia->id),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $excluir = '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$noticia->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$noticia->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">


                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de noticia</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir a noticia '.$noticia->titulo.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/noticias/remover/".$noticia->id).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($titulonoticia,$alterar,$excluir);
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

<script type="text/javascript">
    alteraDiv = function (){
        if($('#tipo_noticia').val() == 1){
            $("#form_destaque").hide();
        }

        if($('#tipo_noticia').val() == 2){
            $("#form_destaque").show();
        }
    }
</script>