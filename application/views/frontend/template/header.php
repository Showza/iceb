<body data-spy="scroll" data-target=".navbar-desktop" >
    <!-- Start your project here-->
    <!--Navbar-->

    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-fixed-top bg-faded navbartopfixedpals">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse left"><i class="fa fa-bars mobiledataactivatedtal"></i></a>

                <!--Content for large and medium screens-->
                <center>
                    <div class="navbar-desktop navbardoheader">
                        <!--Links-->
                        <center>
                        <ul class="nav navbar-nav hidden-md-down navbardoheader2">

                            <!--Navbar Brand-->
                            <span class="nav-item navbar-brand navbarnavbrandheader">
                                <a href="http://www.ufop.br/" target="_blank"><img class="linkassets" src="<?php echo base_url('assets/frontend/img/icones/ufop.png') ?>"></a>
                            </span>

                            <center>
                                <li class="nav-item menu" >
                                    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/frontend/img/icones/home.png') ?>" class="icone">
                                        <span class="spanheadernomes"> INICIO </span>
                                        <span class="sr-only">(current)</span></a>
                                </li>
                            </center>

                            <center>
                                <li class="nav-item menu">
                                    <a href="<?php echo base_url('/diretoria') ?>"><img src="<?php echo base_url('assets/frontend/img/icones/instituto.png') ?>" class="icone">
                                        <span class="nav-link spanheadernomes" href="#service" >O INSTITUTO</span></a>
                                </li>
                            </center>

                            <center>
                                <li class="nav-item menu dropdown">
                                    <a data-toggle="dropdown"><img src="<?php echo base_url('assets/frontend/img/icones/departamento.png') ?>" class="icone">
                                        <span  class="spanheadernomes" >DEPARTAMENTOS</span></a>
                                    <ul class="dropdown-menu drop-ul">
                                        <?php foreach($departamentos as $departamento){ ?>
                                            <li><a class="drop-li" href="<?php echo ($departamento->link)?>" target="_blank"><strong><?php echo $departamento->sigla ?></strong> <?php echo $departamento->titulo?> <hr></a>
                                            </li>
                                            <br><hr>
                                        <?php }?>
                                    </ul>    
                                </li>
                            </center>

                            <!-- COLEGIADOS INICIO -->
                            <center>
                                <li class="nav-item menu dropdown">
                                    <a data-toggle="dropdown"><img src="<?php echo base_url('assets/frontend/img/icones/users.png') ?>" class="icone">
                                        <span  class="nav-link spanheadernomes" >COLEGIADOS</span></a>
                                    <ul class="dropdown-menu drop-ul">
                                        <?php foreach($listacolegiados as $listacolegiado){ ?>
                                            <li><a class="drop-li" href="<?php echo base_url('/colegiados/'.$listacolegiado->id.'/'.$listacolegiado->sigla) ?>"> <strong> <?php echo $listacolegiado->sigla ?></strong> <br> <?php echo $listacolegiado->nome?> <hr></a>
                                            </li>
                                            <br><hr>
                                        <?php }?>
                                    </ul>    
                                </li>
                            </center>                        
                            <!-- COLEGIADOS FIM -->                                

                            <center>
                                <li class="nav-item menu dropdown" >
                                    <a data-toggle="dropdown"><img src="<?php echo base_url('assets/frontend/img/icones/ensino.png')?>" class="icone" >
                                        <span class="nav-link spanheadernomes" >ENSINO</span></a>
                                    <ul class="dropdown-menu drop-ul">
                                        <li class="nav-item menu dropdown" ><center><a class="dropdowncoisas"> Bacharelado</a></center>
                                        </li>
                                        <br><hr>
                                        <?php foreach($listacursos as $listacurso){ ?>
                                        <?php if ($listacurso->modalidade=="Bacharelado") {?>
                                            <li> <a  class="drop-li dropdown " href="<?php echo base_url('/cursos/'. $listacurso->id .'/'.  $listacurso->titulo)?>"><span  class="fa fa-circle" style="font-size: 7px;"></span> <?php echo $listacurso->titulo?>  </a>
                                            </li>
                                        <?php } } ?>
                                        <li class="nav-item menu dropdown" >
                                            <hr>
                                            <center><a class="dropdowncoisas"> Licenciatura</a></center>
                                            <hr>
                                        </li>
                                        <?php foreach($listacursos as $listacurso){ ?>
                                        <?php if ($listacurso->modalidade=="Licenciatura") {?>
                                            <li class="drop-li"> <a class="drop-li" href="<?php echo base_url('/cursos/'. $listacurso->id .'/'.  $listacurso->titulo)?>"> <span  class="fa fa-circle" style="font-size: 7px;"></span> <?php echo $listacurso->titulo?>  </a>
                                            </li>
                                        <?php } } ?>
                                    </ul>
                                </li>
                            </center>                     

                            <!-- <center><li class="nav-item menu">
                                <a href=""><img src="/iceb/assets/frontend/img/icones/agenda.png" class="icone" >
                                    <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Agenda</span></a>
                            </li></center> -->

                            <center>
                                <li class="nav-item menu dropdown" >
                                    <a data-toggle="dropdown"><img src="<?php echo base_url('assets/frontend/img/icones/pesquisa.png') ?>" class="icone">
                                        <span class="nav-link spanheadernomes" href="#service" >PÓS-GRADUAÇÃO</span></a>
                                    <ul class="dropdown-menu drop-ul">
                                        <?php foreach($posgraduacao as $pos){ ?>
                                        <!-- <li ><a class="drop-li focus" data-target="#no" data-toggle="modal" > <?php echo $pos->titulo?><hr> </a></li> -->
                                        <li ><a class="drop-li" href="<?php echo base_url('posgraduacao/'.$pos->id.'/'.$pos->titulo) ?>"> <?php echo $pos->titulo?> <hr></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </center>
                        
                            <center>
                                <li class="nav-item menu navitemmenutal">
                                    <a href="<?php echo base_url('/noticias') ?>"><img src="<?php echo base_url('assets/frontend/img/icones/news.png') ?>" class="icone">
                                        <span class="nav-link spanheadernomes" href="#service" >NOTICIAS</span></a>
                                </li>
                            </center>

                            <center><li class="nav-item menu" >
                                <a href="<?php echo base_url('contatos')?>"><img src="<?php echo base_url('assets/frontend/img/icones/contato.png') ?>" class="icone">
                                    <span class="nav-link spanheadernomes" href="#service" >CONTATO</span></a>
                                </li>
                            </center>
                        </ul>
                        </center>
                    </div>

                </center>
                
                <!-- Content for mobile devices-->
                <div class="navbar-mobile" >
                    <ul class="side-nav" id="mobile-menu">
                        <li class="nav-item">
                            <a class="nav-link" href=" <?php echo base_url();?>">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/diretoria'); ?>">O Instituto</a>
                        </li>

                        <li class="nav-item  dropdown">
                            <a data-toggle="dropdown" class="nav-link" >Departamentos</a>
                            <ul class=" dropdown-menu tamanhoultal">
                                <?php foreach($departamentos as $departamento){ ?>
                                    <li><a class="drop-li" href="<?php echo ($departamento->link)?>" target="_blank"> <?php echo $departamento->titulo?> <hr></a>
                                    </li>
                                <?php }?>
                            </ul>
                        </li>

                        <!-- Colegiados Inicio -->
                        <li class="nav-item  dropdown">
                            <a data-toggle="dropdown" class="nav-link" >Colegiados</a>
                            <ul class=" dropdown-menu tamanhoultal">
                                <?php foreach($listacolegiados as $listacolegiado){ ?>
                                    <li><a class="drop-li" href="<?php echo base_url('/colegiados/'.$listacolegiado->id.'/'.$listacolegiado->sigla) ?>"> <?php echo $listacolegiado->nome?> <hr></a>
                                    </li>
                                <?php }?>
                            </ul>
                        </li>
                        <!-- Colegiados Fim -->

                       <li class="nav-item  dropdown" >
                            <a data-toggle="dropdown" class="nav-link">Ensino</a>
                            <ul class="dropdown-menu ">
                                <?php foreach($listacursos as $listacurso){ ?>
                                    <li ><a class="drop-li" href="<?php echo base_url('/cursos/'. $listacurso->id .'/'.  $listacurso->titulo)?>"> <?php echo $listacurso->titulo?> <hr></a>
                                    </li>
                                <?php }?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#!">Agenda</a>
                        </li>

                        <li class="nav-item dropdown" >
                            <a data-toggle="dropdown">Pós-graduação</a>
                            <ul class="dropdown-menu tamanhoultal" >
                                <?php foreach($posgraduacao as $pos){ ?>
                                    <li ><a class="nav-link"  href="<?php echo $pos->link?>"> <?php echo $pos->titulo?> </a></li>
                                <?php }?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/noticias') ?>">Noticias</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/contatos') ?>">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--/.Navbar-->
        <!-- <div class=" modal fade modal-lg"  role="dialog"  id="no" style="background: rgba(0,0,0,0); box-shadow: none; ">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title" id="myModalLabel"><?php echo $pos->titulo?></h2>
                    </div>
                    <div class="modal-body">
                        <center>
                            <?php echo($pos->video) ?>
                            <br>
                            <a href=" <?php echo $pos->link?>" target="_blank" class="btn" >Veja Mais</a>
                        </center>
                    </div>
                </div>
            </div>
        </div> -->
