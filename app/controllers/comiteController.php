<?php

    class comiteController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data = [
                
            ];

            View::render('Organizador', $data);
        }
    }