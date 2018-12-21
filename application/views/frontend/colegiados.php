<div class="conteudopags">
    <div class="row">
        <div class="col-md-1"></div>
        <section id="about" class="about col-lg-7">
            <div class="container">
                <div class="row">
                    <div class="main_about_area">
                        <div class="center"> 
                            <?php foreach($colegiados as $colegiado) {?>
                                <ul>
                                    <li> <h4><?php echo $colegiado->nome?></h4><a href= "<?php echo $colegiado->link_curso?>">Acesse ao curso</a></li>
                                </ul>    
                            <?php } ?> 
                        </div>
                        <div class="head_title center wow ">           
                            <p><h2> Equipe </h2></p>
                        </div>
                        <hr>
                        <div>
                            <br/>      
                            <div class="col-md-6">
                                <button class="accordion" style="background-color:#4d4d4d"><strong class="center">Membros do Colegiado</strong><i class="fa fa-caret-down right"></i></button>
                                <div class="panel">
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Presidente") && $funcionario->membro == ("Membro do Colegiado")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Diretor(a)") && $funcionario->membro == ("Membro do Colegiado")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Coordenador(a)") && $funcionario->membro == ("Membro do Colegiado")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Secretário(a)") && $funcionario->membro == ("Membro do Colegiado")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Membro") && $funcionario->membro == ("Membro do Colegiado")){?>
                                            <hr>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>

                                </div>
                                <br/>
                                <br/>
                                <br/>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <button class="accordion" style="background-color:#4d4d4d"><strong class="center">Membros do Núcleo Docente Estruturante</strong><i class="fa fa-caret-down right"></i></button>
                                <div class="panel">
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Presidente") && $funcionario->membro == ("Membro do NDE")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Diretor(a)") && $funcionario->membro == ("Membro do NDE")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Coordenador(a)") && $funcionario->membro == ("Membro do NDE")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Secretário(a)") && $funcionario->membro == ("Membro do NDE")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php foreach($funcionarios as $funcionario){?>
                                        <?php if ($funcionario->cargo == ("Membro") && $funcionario->membro == ("Membro do NDE")){?>
                                            <p><strong><?php echo $funcionario->cargo ?></strong></p>
                                            <p><?php echo $funcionario->nome ?></p>
                                            <p><a> <?php echo $funcionario->email?> </a></p>
                                            <p><?php echo $funcionario->telefone?></p>
                                            <p><a href= "<?php echo $funcionario->lattes ?>">Lattes</a></p>
                                            <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    
                                </div>
                                <br/>
                                <br/>
                                <br/>
                            </div>                         
                        <div>

                        <br/>                    
                        <br/>                    
                        <br/>                    
                        <br/>                    
                        <br/>                                  
                        <hr>
                        <div class="col-xs-12 center">
                            <div class="service_btn center">
                                <div class="col-md-6">
                                    <ul>
                                        <div>    
                                            <li><a href="#!" class="btn  waves-effect waves-red" data-target="#uploads_atas" data-toggle="modal" ><i class="fa fa-file-pdf-o fa-1x"></i>&nbsp;  ATAS DE REUNIÕES&nbsp; <i class="fa fa-download fa-2x"></i></a></li>
                                        </div>
                                        <div class="service_btn center">
                                            <li><a href="#!" class="btn  waves-effect waves-red" data-target="#uploads_docs" data-toggle="modal" ><i class="fa fa-file-text fa-1x"></i>&nbsp;  DOCUMENTOS&nbsp; <i class="fa fa-download fa-2x"></i></a></li>
                                        </div>
                                        <div class="service_btn center">
                                            <li><a href="#!" class="btn  waves-effect waves-red" data-target="#uploads_tabelas" data-toggle="modal" ><i class="fa fa-file-o fa-1x"></i>&nbsp;  TABELAS&nbsp; <i class="fa fa-download fa-2x"></i></a></li>
                                        </div>
                                    </ul>    
                                </div>   
                            </div>         

                            <div class="col-md-6"> 
                                <?php foreach($colegiados as $colegiado) {?>
                                    <ul>
                                        <li><a href= "<?php echo $colegiado->link_matriz?>" class="btn waves-effect waves-red"><i class="fa fa-th fa-1x"></i> &nbsp; MATRIZ CURRICULAR &nbsp; <i class="fa fa-download fa-2x"></i></a></li>                                    
                                        <!--<li><a href= "<?php echo $colegiado->link_matriz?>"> <button type="button" class="btn center"> <i class="fa fa-th fa-1x"></i>&nbsp &nbsp Matriz Curricular&nbsp &nbsp<i class="fa fa-download fa-2x"></i></button></a></li>-->
                                    </ul>    
                                <?php } ?> 
                                <br>  
                            </div>     
                            <br/>
                        
                        </div>        
                    </div>
     
                </div>
            </div>
            
        </section><!-- End of Portfolio Section -->

        <!--Modal de downloads de atas do colegiado-->
        <div id="uploads_atas" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Atas de reuniões do colegiado</h4>
                    </div>
                    <?php foreach($uploads as $upload){ ?>
                        <div class="modal-body">
                            <?php
                                $arquivo = $upload->arquivo;
                            ?>
                            <?php if ($upload->tipo == "ata" && $upload->download == "1"){?>
                                <p><a href="<?php echo base_url('assets/arquivos/colegiado/'.$arquivo) ?>" target="_blank"><?php echo $upload->arquivo?></a></p>
                            <?php } ?>             
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!--Modal de downloads de documentos do colegiado-->
        <div id="uploads_docs" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Documentos do colegiado</h4>
                    </div>
                    <?php foreach($uploads as $upload){ ?>
                        <div class="modal-body">
                            <?php
                                $arquivo = $upload->arquivo;
                            ?>
                            <?php if ($upload->tipo == "docs" && $upload->download == "1"){?>
                                <p><a href="<?php echo base_url('assets/arquivos/colegiado/'.$arquivo) ?>" target="_blank"><?php echo $upload->arquivo?></a></p>
                            <?php } ?>             
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!--Modal de downloads de tabelas do colegiado-->
        <div id="uploads_tabelas" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tabelas do colegiado</h4>
                    </div>
                    <?php foreach($uploads as $upload){ ?>
                        <div class="modal-body">
                            <?php
                                $arquivo = $upload->arquivo;
                            ?>
                            <?php if ($upload->tipo == "aacc" && $upload->download == "1"){?>
                                <p><a href="<?php echo base_url('assets/arquivos/colegiado/'.$arquivo) ?>" target="_blank"><?php echo $upload->arquivo?></a></p>
                            <?php } ?>             
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
