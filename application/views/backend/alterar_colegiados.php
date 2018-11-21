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
                                foreach($colegiados as $colegiado){
                                echo form_open('admin/colegiados/alterar/'.$colegiado->id);

                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome do Colegiado</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="ex: Colegiado de Ciências Biológicas Bacharelado" value="<?php echo $colegiado->nome ?>">
                                 <br/>

                                 <label id="txt-sigla">Sigla</label>
                                 <input id="txt-sigla" name="txt-sigla" type="text" class="form-control" placeholder="ex: COCBIB" value="<?php echo $colegiado->sigla ?>">
                                 <br/>

                                 <label id="txt-linkC">Link do curso</label>
                                 <input id="txt-linkC" name="txt-linkC" type="text" class="form-control" placeholder="Link" value="<?php echo $colegiado->link_curso ?>">
                                 <br/>
                                 <label id="txt-linkM">Link da matriz</label>
                                 <input id="txt-linkM" name="txt-linkM" type="text" class="form-control" placeholder="Link" value="<?php echo $colegiado->link_matriz ?>">
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
