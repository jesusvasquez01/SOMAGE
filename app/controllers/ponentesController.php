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
                    "nombre" => "Dr. Flabio Gutiérrez Segura",
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
                    "nombre" => "Dr. Segundo Alvarado Contreras",
                    "comision" => "Director del comité de administración de la Zona Franca de Tacna  - Catedrático del Departamento de Matemática y Estadística en la  Universidad Nacional Jorge Basadre Grohmann (PERÚ)",
                    "foto" => "ponente04.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Mgr. Edgard Pilco Apaza",
                    "comision" => "Gerente de Auditoría Interna de la Caja Municipal de Ahorro y Crédito de Tacna S.A. ",
                    "foto" => "edgard.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Dra. Ximena Gómez Valente",
                    "comision" => "Gerente General en Zona Franca de Tacna",
                    "foto" => "ponente05.jpg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Dr. Jesús Olivera Cáceres",
                    "comision" => "Presidente del Directorio de EPS TACNA - Decano de la Facultad de Ciencias Jurídicas y Empresariales de la UNJBG.",
                    "foto" => "ponente02.jpg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "MGR. ALBERTO FRANCO VILDOSO",
                    "comision" => "Analista de control de Calidad de la EPS Tacna",
                    "foto" => "ponente03.png",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ]
            ];

            View::render('index', $data);
        }


    }
