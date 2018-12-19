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
                            <?php foreach($uploads as $upload) {?>
                                <div class="col-md-6">
                                    <ul>
                                        <?php if ($upload->tipo == "ata" && $upload->download == "1"){?>
                                            <li><a href="<?php echo base_url('./assets/arquivos/colegiado/'.$upload->arquivo) ?>"><button type="button" class="btn center"><i class="fa fa-file-pdf-o fa-1x"></i>&nbsp Atas Reuniões &nbsp &nbsp<i class="fa fa-download fa-2x"></i></button></li>
                                        <?php } ?>
                                        <?php if ($upload->tipo == "docs" && $upload->download == "1"){?>
                                            <li><a href="<?php echo base_url('./assets/arquivos/colegiado/'.$upload->arquivo) ?>"><button type="button" class="btn center"><i class="fa fa-file-text fa-1x"></i>&nbsp &nbsp Documentos &nbsp &nbsp<i class="fa fa-download fa-2x"></i></button>  </li>
                                        <?php } ?>
                                        <?php if ($upload->tipo == "aacc" && $upload->download == "1"){?>
                                            <li><a href="<?php echo base_url('./assets/arquivos/colegiado/'.$upload->arquivo) ?>"><button type="button" class="btn center"> <i class="fa fa-file-o fa-1x"></i>&nbsp &nbsp Tabela AACC &nbsp &nbsp<i class="fa fa-download fa-2x"></i></button></li>
                                        <?php } ?>     
                                    </ul>
                                </div>                                   
                            <?php } ?>

                            <div class="col-md-6"> 
                                <?php foreach($colegiados as $colegiado) {?>
                                    <ul>
                                        <li><a href= "<?php echo $colegiado->link_matriz?>"> <button type="button" class="btn center"> <i class="fa fa-th fa-1x"></i>&nbsp &nbsp Matriz Curricular&nbsp &nbsp<i class="fa fa-download fa-2x"></i></button></a></li>
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
