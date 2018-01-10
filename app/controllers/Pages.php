<?php

    class Pages extends Controller {
        public function __construct(){
        }

        public function index(){
            $this->view('pages/index', ['title' => 'Welcome']);
        }

        public function about($id){
            $this->view('pages/about');
        }
    }