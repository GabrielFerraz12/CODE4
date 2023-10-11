<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index(): string {
        return view('TesteViews/header_message.php')
                . view('TesteViews/teste_message.php')
                . view('TesteViews/footer_message.php');
    }

    public function conteudo(): string {
        return view('TesteViews/header_message.php')
                . view('TesteViews/conteudo_message.php')
                . view('TesteViews/footer_message.php');
    }

}
