<?php require_once INCLUDES.'inc_header.php'; ?>
<section class="register-today " style="padding-top:90px !important;">

</section>
<!-- Courses o ponentes-->
<section class="courses section" style="padding-top: 35px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><br>COMITÉ ORGANIZADOR</h2>
                    <div class="icon"><i class="fa fa-users"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Course -->
            <?php foreach($data as $comite){ ?>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Course -->
				<div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'comite/'.$comite['foto'] ?>" alt="#">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/'.$comite['fotoPais'] ?>" alt="#">
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
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>