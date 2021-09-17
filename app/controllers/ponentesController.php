<?php

    class ponentesController extends Controller{
        public function __construct(){
        }

        public function index(){

            $data = [
                [
                    "nombre" => "Dr. Angel Cobo",
                    "comision" => "Catedrático del Departamento de Matemática Aplicada y Ciencias Computacionales de la Universidad de Cantabria (ESPAÑA) ",
                    "foto" => "AngelCobo.jpg",
                    "fotoPais" => "esp.png",
                    "nacionalidad" => "Española"
                ],
                [
                    "nombre" => "Dr. Flabio Gutiérres",
                    "comision" => "Catedrático del Departamento de Matemática y Estadística en la  Universidad Nacional Trujillo (PERÚ) ",
                    "foto" => "flavio.jpg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Dr. Humberto Vargas",
                    "comision" => "Catedrático del Departamento de Matemática y Estadística en la  Universidad Nacional Jorge Basadre Grohmann (PERÚ) ",
                    "foto" => "pp.jpg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Dr. Segundo Alvarado",
                    "comision" => "Catedrático del Departamento de Matemática y Estadística en la  Universidad Nacional Jorge Basadre Grohmann (PERÚ) ",
                    "foto" => "UploadFotoPath.jpg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Mgr. Edgard Pilco Apaza",
                    "comision" => "Universidad de Concepción, Chile ",
                    "foto" => "Fabian_Flores.png",
                    "fotoPais" => "chile.png",
                    "nacionalidad" => "Chileno"
                ],
                [
                    "nombre" => "Gerente General de ZOFRA-TACNA",
                    "comision" => "Universidad de Tayacaja, Perú ",
                    "foto" => "Ronal_Cruz.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Presidente del Directorio de EPS TACNA",
                    "comision" => "University of Magdeburg, Germany ",
                    "foto" => "Thomas_Richter.png",
                    "fotoPais" => "alemania.png",
                    "nacionalidad" => "Aleman"
                ],
                [
                    "nombre" => "Est. ESMA",
                    "comision" => "Universidad Nacional Jorge Basadre Grohmann (PERÚ) ",
                    "foto" => "Julio_Lopez.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Est. ESCO",
                    "comision" => "Universidad Nacional Jorge Basadre Grohmann (PERÚ) ",
                    "foto" => "Edith_Seier.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
            ];

            View::render('index', $data);
        }


    }
