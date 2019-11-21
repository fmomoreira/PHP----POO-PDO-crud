<?php

class Documento{

    private $numero;
 


    public function getNumero(){
        return $this->cpf;
    }
    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero);
        if($resultado === false){
            throw new Exception("CPF informado não e valido");
        }
        $this->cpf = $numero;
    }

    public static function validarCPF()
    {
        echo "teste";
    }




}
/*
$cpf = new Documento();
$cpf->setNumero("42197271830");

$numbercpf = $cpf->getNumero();

echo json_encode($numbercpf);

*/

$validarcpf = (Documento::validarCPF());

if($validarcpf === false){
    echo "CPF invalido";
}if($validarcpf === true){
    echo "CPF válido";
};
?>