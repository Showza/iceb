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
                                foreach($funcionarios as $funcionario){
                                echo form_open('admin/funcionarios/alterar/'.$funcionario->id);

                                 ?>
                                 <div class="form-group">
                                     <br/>
                                     <label id="txt-nome">Nome do Funcionário</label>
                                     <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do funcionário"  value="<?php echo $funcionario->nome ?>">
                                     <br/>

                                     <br/>
                                     <label id="txt-colegiado">colegiado</label>
                                       <select id="txt-colegiado" name="txt-colegiado">
                                       <?php
                                    foreach($colegiados as $colegiado){?>
                                     <option value="<?php echo $colegiado->id?>" <?php if($funcionario->colegiado == $colegiado->id){ echo "selected";} ?>><?php echo $colegiado->nome?></option> 
                                     <?php
                                     }
                                     ?>
                                     </select>
                                     <br/> 
                                     <br/>                                      
                                     <br/>
                                     
                                    <div class="col-md-3"> 
                                        <label id="txt-cargo">cargo</label>
                                        <select id="txt-cargo" name="txt-cargo">
                                            <option value="Presidente" <?php if($funcionario->cargo == "Presidente"){ echo "selected";} ?> >Presidente</option>
                                            <option value="Diretor(a)" <?php if($funcionario->cargo == "Diretor(a)"){ echo "selected";} ?> >Diretor(a)</option>
                                            <option value="Coordenador(a)" <?php if($funcionario->cargo == "Coordenador(a)"){ echo "selected";} ?> >Coordenador(a)</option>
                                            <option value="Secretário(a)" <?php if($funcionario->cargo == "Secretário(a)"){ echo "selected";} ?> >Secretário(a)</option>
                                            <option value="Membro" <?php if($funcionario->cargo == "Membro"){ echo "selected";} ?> >Membro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <label id="txt-membro">membro</label>
                                        <select id="txt-membro" name="txt-membro">
                                            <option value="Membro do Colegiado" <?php if($funcionario->membro == "Membro do Colegiado"){ echo "selected";} ?> >Membro do Colegiado</option>
                                            <option value="Membro do NDE" <?php if($funcionario->membro == "Membro do NDE"){ echo "selected";} ?> >Membro do Núcleo Docente Estruturante</option>
                                        </select>        
                                     <br/>
                                     <br/>
                                     <br/>
                                    </div> 
                                    
                                     <label id="txt-email">Email</label>
                                     <input id="txt-email" name="txt-email" type="text" class="form-control" placeholder="Email do funcionário" value="<?php echo $funcionario->email ?>">
                                     <br/>

                                     <br/>
                                     <label id="txt-telefone">Telefone</label>
                                     <input id="txt-telefone" name="txt-telefone" type="text" class="form-control" placeholder="(XX) XXXX-XXXX" value="<?php echo $funcionario->telefone ?>">
                                     <br/>
                                     <br/>

                                     <label id="txt-lattes">Lattes</label>
                                     <input id="txt-lattes" name="txt-lattes" type="text" class="form-control" placeholder="Lattes do funcionário" value="<?php echo $funcionario->lattes ?>">
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
