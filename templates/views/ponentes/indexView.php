<?php require_once INCLUDES.'inc_header.php'; ?>
<section class="register-today " style="padding-top:90px !important;">

</section>

<!-- Courses o ponentes-->
<section class="courses section" style="padding-top: 35px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2> PONENTES <br></h2>
                    <div class="icon"><i class="fa fa-users"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Course -->
            <?php foreach($data as $comite){ ?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/'.$comite['foto'] ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/'.$comite['fotoPais'] ?>" alt="#" >
                                <h4 class="title"><?php echo $comite['nacionalidad'] ?></h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#"><?php echo $comite['nombre'] ?></a></h4>
                        <p><?php echo $comite['comision'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <br><hr>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2> Mesa Redonda <br></h2>
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <h5>''Perfil del egresado de Ingeniería Comercial y Matemática en el Siglo XXI''</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Course -->
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/ramon.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Mgr. Ramón Vera Roalcaba </h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">REPRESENTANTE DE LA CARRERA DE MATEMATICA</a></h4>
                        <p>DOCENTE DEL DEPARTAMENTO DE MATEMATICA- FACI-UNJG</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/lessly.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Mgr. Lessly Paola Campana Salgado </h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">REPRESENTANTE DE LA CARRERA DE ING. COMERCIAL</a></h4>
                        <p>DOCENTE DEL DEPARTAMENTO DE ING. COMERCIAL-FCJE-UNJBG </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/melina.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Mgr. Melina Zegarra Aquino  </h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">REPRESENTANTE DE LA CARRERA DE ING. COMERCIAL</a></h4>
                        <p>DOCENTE DEL DEPARTAMENTO DE ING. COMERCIAL-FCJE-UNJBG  </p>
                    </div>
                </div>
            </div>
        </div>

        <br><hr>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2> Estudiantes Expositores  <br></h2>
                    <div class="icon"><i class="fa fa-users"></i></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Course -->
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/yhon.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Est. Yhon Clinton Flores Callata</h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">ESMA - Universidad Nacional Jorge Basadre Grohmann (PERÚ)</a></h4>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/delmy.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Est. Delmy Nitzia Quispe Apaza</h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">ESCO- Universidad Nacional Jorge Basadre Grohmann (PERÚ)</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'ponentes/maria.png' ?>" alt="#" style="height: 350px;">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/peru.png' ?>" alt="#" >
                                <h4 class="title">Est. María José Condori Flores</h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#">ESCO - Universidad Nacional Jorge Basadre Grohmann (PERÚ)</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>