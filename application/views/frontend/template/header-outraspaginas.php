    <body data-spy="scroll" data-target=".navbar-desktop" >
        <!-- Start your project here-->
        <!--Navbar-->

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>

        <nav class="navbar navbar-fixed-top bg-faded"  style="  background: url('/iceb/assets/frontend/img/ICEBERA.png'); height: 90px; padding-bottom: 10px;">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse left"><i class="fa fa-bars " style="font-size: 30px;"></i></a>

                <!--Content for large and medium screens-->
                <center>

                <div class="navbar-desktop " style="margin-top:-10px">

                    <!--Links-->
                    <ul class="nav navbar-nav hidden-md-down text-uppercase" style="margin-top:10px;  ">

                     <!--Navbar Brand-->
                       <span class="nav-item navbar-brand" style="display: inline; margin-left: -65px; margin-right: 5px; margin-top:5px; ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/ufop.png" style="width: 110px"></a>
                        </span>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href="<?php echo base_url('/home') ?>"><img src="/iceb/assets/frontend/img/icones/home.png" class="icone">
                                <span style="display: block; margin-top: -45px "> Inicio </span>
                          <span class="sr-only">(current)</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/instituto.png" class="icone">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >O Instituto</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/departamento.png" class="icone">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Departamentos</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/ensino.png" class="icone" >
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Ensino</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/laboratorio.png" class="icone" >
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Laboratórios</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/agenda.png" class="icone" ">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Agenda</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/pesquisa.png" class="icone"">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Pesquisa</span></a>
                        </li></center>


                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href=""><img src="/iceb/assets/frontend/img/icones/news.png" class="icone">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Noticias</span></a>
                        </li></center>

                        <center><li class="nav-item menu" style="margin: 0px 5px 0px 5px ">
                            <a href="<?php echo base_url('contatos')?>"><img src="/iceb/assets/frontend/img/icones/contato.png" class="icone">
                            <span class="nav-link" href="#service" style=" display: block;margin-top: -45px;" >Contato</span></a>
                        </li></center>

                    </ul>


                </div>
                </center>
                <!-- Content for mobile devices-->
                <div class="navbar-mobile" >

                    <ul class="side-nav" id="mobile-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">O Instituto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Departamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Ensino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Laboratórios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Pesquisa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->