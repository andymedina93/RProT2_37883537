<?php

namespace App\Controllers;

class Home extends BaseController
{
        public function index()
        {
            $dato['titulo']='inicio';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('front/inicio');
            echo view('front/footer_view');
        }
      
    
        public function comercializacion()
        {
            $dato['titulo']='Comercialización';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/comercializacion');
            echo view('front/footer_view');
        }
        public function contacto()
        {
            $dato['titulo']='Contacto';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/contacto');
            echo view('front/footer_view');
        }
    
        public function QSomos()
        {
            $dato['titulo']='quienes somos';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/QSomos');
            echo view('front/footer_view');
        }
    
        public function condiciones()
        {
            $dato['titulo']='condiciones ';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/condiciones');
            echo view('front/footer_view');
            
        }
        public function login()
        {
            $dato['titulo']='login';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/login');
            echo view('front/footer_view');
        }

        public function registro()
        {
            $dato['titulo']='registro';
            echo view('front/head_view',$dato);
            echo view('front/nav_view');
            echo view('front/registro');
            echo view('front/footer_view');
        }
    
}
