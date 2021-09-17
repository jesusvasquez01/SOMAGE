<?php require_once INCLUDES.'inc_header.php'; ?>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 600px">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
          <img src="<?php echo IMAGES.'BANNER.jpg'?>" class="img-fluid img-thumbnail">
          </div>
          
      </div>
  </div>
</div>
<!-- ends inc_header.php -->

<br><br><br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

  <div class="carousel-item active">
      <section class="register-today overlay section home-slider"
            style="background-image:url('<?php echo IMAGES."fondo.jpg" ?>');min-height:90vh;padding-top:50px !important; padding-bottom:20px!important;">
          
            <div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-10 col-12 " >
								<!-- Slider Content -->
								<div class="slider-content " style="margin-top: 0px; ">
                  <h1 class="slider-title" style="background: rgba(21, 147, 198, 0.6);">I SEMINARIO DE OPTIMIZACIÓN MÁTEMATICA APLICADOS A LA GESTION EMPRESARIAL<span><strong> I - SOMAGE</strong></span></h1>
									<!--/ End Button -->
                  <div class="coming-time">
                    <div class="clearfix" data-countdown="2021/09/30 09:00:00"></div>
                  </div>
                  <div class="button">
										<!-- <a href="#" class="btn white">REGISTRARSE</a> -->
                    <a href="https://forms.gle/5Gy9D58E864spBgXA" class="btn white primary"  target="_black">INSCRIPCIONES</a>
									</div>
                  <br>
								</div>
								<!--/ End Slider Content -->
							</div>
						</div>
					</div>
      </section>
    </div>

    <div class="carousel-item">
      <section class="register-today overlay section home-slider"
            style="background-image:url('<?php echo IMAGES."imagen30.jpg" ?>');min-height:90vh;padding-top:50px !important; padding-bottom:20px!important;">
      </section>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Slider -->

<section class="courses section" style="padding-top: 35px !important;background-color: #DEDEDE;">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-12">
              <div class="section-title bg">
                  <h2 style="color: rgba(12,56,105,1)">I Seminario de Optimización Matemática Aplicados a la Gestión Empresarial</h2>
                  <br>
                  <h2 style="color: rgba(12,56,105,1)">I - SOMAGE</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
          <span style="font-size: 14pt; vertical-align: baseline;">Estudiantes de la Escuela Profesional de Matemáticas (ESMA), Estudiantes de la Escuela de Ingeniería Comercial (ESCO) y la Universidad Nacional Jorge Basadre Grohmann (UNJBG) dan la bienvenida a todos los participantes al I Seminario de Optimización Matemática Aplicados a la Gestión Empresarial (I-SOMAGE) que tendrá lugar durante los días 30 de septiembre al 1 de octubre. 2021 en Tacna-Perú, en forma Virtual.</span>
          </div>
      </div>
  </div>
</section>

<section class="courses section" style="padding-top: 35px !important;">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <img src="<?php echo IMAGES.'comercial.png' ?>" class="img-fluid" alt="esco">
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <img src="<?php echo IMAGES.'mate.jpg' ?>" class="img-fluid mx-auto d-block" alt="esco" style="height: 160px;">
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <img src="<?php echo IMAGES.'unjbg.png' ?>" class="img-fluid mx-auto d-block" alt="esco" style="height: 160px;">
          </div>
      </div>
  </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>