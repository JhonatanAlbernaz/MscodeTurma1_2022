<?php
       
    class contato {
        private $identificador;
        private $nome;
        private $email;
        private $telefone;
    
        public function __construct($nome, $email) {
            $this->identificador = md5($email);
    
            $this->nome = $nome;
            $this->email = $email;
        }
    
        public function exibirContatoCompleto() {
            echo 'Contato completo: ' . $this->nome . ' - ' . $this->email . ' - ' . $this->telefone;
        }
    
        public function retornarIdentificador() {
            return $this->identificador;
        }
    
        public function retornarNome() {
            return $this->nome;
        }
    
        public function retornarEmail() {
            return $this->email;
        }
    
        public function retornarTelefone() {
            return $this->telefone;
        }
    
        public function definirTelefone($telefone) {
            $this->telefone = $telefone;
        }
    }
    
    if (false == empty($_POST['salvar'])) {
        $contato = new contato($_POST['nome'], $_POST['email']);
    
        echo '<br>telefone ao criar: ' . $contato->retornarTelefone();
    
        if ('' == $_POST['telefone']) {
            $contato->definirTelefone('27999111222');
        } else {
            $contato->definirTelefone($_POST['telefone']);
        }
    
        echo '<br>telefone apos adicionar: ' . $contato->retornarTelefone();
    
        echo "<br>contato criado para o identificador {$contato->retornarIdentificador()}";
    
        $contato->exibirContatoCompleto();
    
    }

?>