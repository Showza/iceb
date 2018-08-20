<div class="conteudopags">
  <div class="row">
 <div class="col-sm-8">



  <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_about_area">
                            <div class="head_title center m-y-3">
                              <?php foreach($cursos as $curso) { ?>
                                <h2><?php echo $curso->titulo ?></h2>
                               <p><?php echo $curso->video ?></p>
                               <div class="service_btn center"><a target="_blank" href="<?php echo $curso->link ?>" class="btn waves-effect waves-red">&nbsp;  Saiba mais&nbsp;  </a></div>
                               <?php } ?>

                            </div>
                            <!-- <div class="main_about_content">
                                <div class="row">
                                      <div class="col-md-1"></div>
                                    <div class="col-md-10" style="text-align: justify;">
                                      <?php foreach($cursos as $curso) { ?>
                                                        <h2><?php echo $curso->titulo ?></h2>
                                                        <p><?php echo $curso->video; ?></p>

                                                        <?php } ?>

                                    </div>
                                    <div class="col-md-1"></div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>


        </section><!-- End of About Section-->

       </div>
