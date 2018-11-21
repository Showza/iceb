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
                                echo form_open('admin/funcionarios/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-nome">Nome do Funcionário</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do funcionário">
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
                                 
                                 <div class="col-md-4">
                                    <label id="txt-cargo">cargo</label>
                                    <select id="txt-cargo" name="txt-cargo">
                                        <option value="Presidente">Presidente</option>
                                        <option value="Diretor(a)">Diretor(a)</option>
                                        <option value="Coordenador(a)">Coordenador(a)</option>
                                        <option value="Secretário(a)">Secretário(a)</option>
                                        <option value="Membro">Membro</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label id="txt-membro">membro</label>
                                    <select id="txt-membro" name="txt-membro">
                                        <option value="Membro do Colegiado">Membro do Colegiado</option>
                                        <option value="Membro do NDE">Membro do Núcleo Docente Estruturante</option>
                                    </select>
                                    <br/>    
                                    <br/>    
                                    <br/>
                                </div>  
                                     

                                 <label id="txt-email">Email</label>
                                 <input id="txt-email" name="txt-email" type="text" class="form-control" placeholder="Email">
                                 <br/>

                                 <label id="txt-telefone">Telefone</label>
                                 <input id="txt-telefone" name="txt-telefone" type="text" class="form-control" placeholder="(XX) XXXX-XXXX">
                                 <br/>

                                 <label id="txt-lattes">Lattes</label>
                                 <input id="txt-lattes" name="txt-lattes" type="text" class="form-control" placeholder="Lattes">
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
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("Nome do Funcionário","Alterar Dados","Excluir Funcionários");
                                foreach($funcionarios as $funcionario){
                                    $nomecurso = $funcionario->nome;
                                    $alterar = anchor(base_url('admin/funcionarios/pagina_alterar/'.$funcionario->id),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$funcionario->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$funcionario->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de funcionário</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o funcionario '.$funcionario->nome.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/funcionarios/remover/".$funcionario->id).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($nomecurso,$alterar,$excluir);
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
