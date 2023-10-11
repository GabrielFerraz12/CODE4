<?php

namespace App\Controllers;

use App\Models\FormModel;

class Contato extends BaseController {

    public function index() {
        helper(['form']);
        $data = [];
        return view('/Contato/formulario');
    }

    public function salvar() {
        helper(['form']);
        $rules = [
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email|trim',
            'telefone' => 'required|numeric|max_length[11]',
            'mensagem' => 'required|trim|min_length[10]|max_length[100]'
        ];

        if ($this->validate($rules)) {
            $formModel = new FormModel();
            $data = [
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email'),
                'telefone' => $this->request->getVar('telefone'),
                'mensagem' => $this->request->getVar('mensagem')
            ];
            $formModel->save($data);
            return view('/TesteViews/header_message.php')
                    . view('/Contato/painel.php', $data)
                    . view('/TesteViews/footer_message.php');
        } else {
            $data['validation'] = $this->validator;
            return view('TesteViews/header_message.php')
                    . view('TesteViews/teste_message.php')
                    . view('TesteViews/footer_message.php', $data);
        }
    }

    public function cadastra_usuario() {
        helper(['form']);
        $rules = [
            'usuario' => 'required',
            'senha' => 'required',
            'confsenha' => 'required|matches[senha]',
        ];

        if ($this->validate($rules)) {
            $formModel = new FormModel();
            $data = [
                'usuario' => $this->request->getVar('usuario'),
                'senha' => $this->request->getVar('senha'),
                'confsenha' => $this->request->getVar('confsenha')
            ];
            $formModel->save($data);
            return view('/TesteViews/header_message.php')
                    . view('/Contato/painel.php', $data)
                    . view('/TesteViews/footer_message.php');
        } else {
            $data['validation'] = $this->validator;
            return view('TesteViews/header_message.php')
                    . view('TesteViews/conteudo_message.php')
                    . view('TesteViews/footer_message.php', $data);
        }
    }

    public function deletar() {
        $formModel = new FormModel();
        $data = [
            'nome' => $this->request->getVar('nome'),
            'email' => $this->request->getVar('email'),
            'telefone' => $this->request->getVar('telefone'),
            'mensagem' => $this->request->getVar('mensagem')
        ];
        $formModel->delete($data);
        return view('/TesteViews/header_message.php')
                . view('/Contato/painel.php', $data)
                . view('/TesteViews/footer_message.php');
    }

}
