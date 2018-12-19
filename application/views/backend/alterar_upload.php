<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                foreach($uploads as $upload){
                                echo form_open('admin/upload/alterar/'.$upload->id);

                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome do Arquivo</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="ex: ATA 1" value="<?php echo $upload->nome ?>">
                                 <br/>

                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <input id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="ex: ATA reunião 1 Ciências Biológicas" value="<?php echo $upload->descricao ?>">
                                 <br/>

                                <br/>
                                 <label id="txt-colegiado">colegiado</label>
                                 <select id="txt-colegiado" name="txt-colegiado">
                                    <?php
                                    foreach($colegiados as $colegiado){?>
                                     <option value="<?php echo $colegiado->id?>" <?php if($upload->colegiado == $colegiado->id){ echo "selected";} ?>><?php echo $colegiado->nome?></option> 
                                     <?php
                                     }
                                     ?>
                                 </select>
                                 <br/>
                                 <br/>

                                 <br/>
                                 <label id="txt-tipo">tipo</label>
                                 <select id="txt-tipo" name="txt-tipo">
                                    <option value="ata" <?php if($upload->tipo == "ata"){ echo "selected";} ?> >ATA</option>
                                    <option value="docs" <?php if($upload->tipo == "docs"){ echo "selected";} ?> >DOCS</option>
                                    <option value="aacc" <?php if($upload->tipo == "aacc"){ echo "selected";} ?> >TABELA AACC</option>
                                 </select>
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
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <?php
                                }
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

        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

