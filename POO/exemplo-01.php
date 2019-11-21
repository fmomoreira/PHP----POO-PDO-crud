<?php
class Pessoa  {
    public $nome;//ATRIBUTO
    public function falar(){//METODO
        return "Funcionario: ". $this->nome;
    }
//USAR $this->    objeto que instancia um atributo
}

class Documento{

    public $cpf;
    public function cpf(){
        return "Numero CPF: ". $this->cpf;
    }

}

class Salario {

    public $salario;
    public function salario(){

        return "Salario Base:". $this->salario;
    }


}




?>