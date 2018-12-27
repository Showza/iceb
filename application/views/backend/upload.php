<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo. ' Colegiados' ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Adicionar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/upload/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome do Arquivo</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="ex: ATA 1">
                                 <br/>

                                 <br/>
                                 <label id="txt-descricao">Descrição</label>
                                 <input id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="ex: ATA reunião 1 Ciências Biológicas">
                                 <br/>

                                 <br/>
                                 <label id="txt-colegiado">colegiado</label>
                                 <select id="txt-colegiado" name="txt-colegiado">
                                    <?php
                                    foreach($colegiados as $colegiado){?>
                                     <option value="<?php echo $colegiado->id?>"><?php echo $colegiado->nome?></option>
                                     <?php
                                     }
                                     ?>
                                 </select>
                                 <br/>
                                 <br/>

                                 <br/>
                                 <label id="txt-tipo">tipo</label>
                                 <select id="txt-tipo" name="txt-tipo">
                                    <option value="ata">ATA</option>
                                    <option value="docs">DOCS</option>
                                    <option value="aacc">TABELA AACC</option>
                                 </select>
                                 <br/>
                                 <br/>

                                  <br/>
                                <label id="txt-arquivo">Documento</label>
                                 <input id="txt-arquivo" name="txt-arquivo" type="file" value="Procurar arquivo..." placeholder="nenhum arquivo selecionado">
                                 <?php echo form_error('txt-arquivo', '<p class="frm_err">', '<p>'); ?>
                                 <br/>
                                 <br/>


                                 <br/>
                                 <label id="txt-download">O arquivo deve ficar disponível ao público para download? </label>
                                 <select id="txt-download" name="txt-download">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>

                                 </select>
                                 <br/>
                                 <br/>
     
                             <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <?php
                                echo form_close();
                             ?>
                        </div>
                    </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <?php
                                $this->table->set_heading("Sigla do Colegiado","Nome do Arquivo","Alterar Dados","Alterar Arquivos","Excluir Arquivos");
                                foreach($colegiados as $colegiado){                                    
                                    foreach($uploads as $upload){
                                        if ($colegiado->id == $upload->colegiado){
                                            $nomecolegiado = $colegiado->sigla; 
                                            $nomearquivo = $upload->arquivo;                                 
                                            $arquivo = anchor(base_url('admin/upload/pagina_alterar/'.$upload->id),'<button type="button" class="btn btn-link"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');

                                            $matriz = anchor(base_url('admin/upload/pagina_upload/'.$upload->id),'<button type="button" class="btn btn-link"><span style="color:purple"><i class="fa fa-file-pdf-o fa-fw"></i>Upload</span></button>');                          

                                            $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$upload->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                            echo $modal= ' <div class="modal fade excluir-modal-'.$upload->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel2">Exclusão de Arquivo</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Deseja Realmente excluir o arquivo '.$upload->nome.'?</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                            <a type="button" class="btn btn-primary" href="'.base_url("admin/upload/remover/".$upload->id.'/'.$upload->arquivo).'">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';

                                            $this->table->add_row($nomecolegiado,$nomearquivo,$arquivo,$matriz,$excluir);
                                        }
                                    }
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
