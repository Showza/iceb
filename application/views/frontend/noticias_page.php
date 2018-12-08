<div class="conteudopags">
  <div class="row">
    <div class="col-md-1">
    </div>
   <section id="newsletter" class="portfolio col-md-7">

              <div class="container">


                      <div class="main_portfolio_area m-y-3">

                            <div class="head_title center wow ">
                                <h2>Noticias</h2>

                            </div>

                            <br/>
                            <div>
                              <?php foreach($noticias as $noticia) {?>
                                <h3><a href="<?php echo $noticia->link ?>"><?php echo $noticia->titulo ?></a></h3><br/>
                                <time><?php echo $noticia->data ?></time>
                                 <?php } ?>
                                <br/>
                                <hr/>
                             

                                <br>
                              <hr/>
                              <br>
                            </div>


                          </div>

                  </div>

              <br>
               <!-- <div class="service_btn center">
                   <a href="#!" class="btn waves-effect waves-red">&nbsp;  VER MAIS&nbsp;  </a>
              </div> -->

          </section><!-- End of Portfolio Section -->
