 <section id="home" class="service" >

                        <div class="main_service_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                            </div>

                                <div class="col-sm-3">
                                    <div class="jumbotron single_service  wow ">
                                        <div class="service_icon center">
                                            <i class="fa fa-graduation-cap "></i>
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">

                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn  waves-effect waves-red" data-target="#salas" data-toggle="modal" >&nbsp;  ALOCAÇÃO <br>DE SALAS&nbsp;  </a>
                                        </div>
                                    </div>

                            </div>

                                <div class="col-sm-3">
                                    <div class="jumbotron single_service wow ">

                                        <div class="service_icon center">
                                            <i class="fa fa-calendar "></i>
                                        </div>
                                        <div class="s_service_text text-sm-center  text-xs-center">

                                        </div>

                                        <div class="service_btn center">
                                            <a href="<?php echo base_url('/assets/arquivos/calendario/CEPE7321.pdf')?>" target="_blank" class="btn waves-effect waves-red">&nbsp; CALENDÁRIO <br>ACADEMICO &nbsp; </a>
                                        </div>
                                    </div>

                            </div>

                                <div class="col-sm-3">
                                    <div class="jumbotron single_service wow ">

                                        <div class="service_icon center">
                                            <i class="fa fa-map-marker "></i>
                                        </div>
                                        <div class="s_service_text text-sm-center  text-xs-center">

                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" data-target="#mapas" data-toggle="modal" class="btn waves-effect waves-red">&nbsp; MAPA DO ICEB &nbsp; </a>
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </div>

        </section> <!-- End of service section -->
</div>

<!--Modal de alocação de salas-->
<div id="salas" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alocação de salas</h4>
      </div>
      <?php foreach($salas as $sala){ ?>
      <div class="modal-body">
        <?php
        $arquivo = $sala->arquivo;
        ?>
        <p><a href="assets/arquivos/salas/<?php echo $arquivo?>" target="_blank"><?php echo $sala->nome?></a></p>
      </div>
  <?php } ?>
    </div>

  </div>
</div>

<!--Modal de alocação de salas-->
<div id="mapas" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mapas do ICEB</h4>
      </div>
      <?php foreach($mapas as $mapa){ ?>
      <div class="modal-body">
        <?php
        $arquivo = $mapa->arquivo;
        ?>
        <p><a href="assets/arquivos/mapas/<?php echo $arquivo?>" target="_blank"><?php echo $mapa->nome?></a></p>
      </div>
  <?php } ?>
    </div>

  </div>
</div>
