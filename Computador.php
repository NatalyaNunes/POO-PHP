<?php 

class Computador{
    private $processador;       // o private vai limitar o acesso de outras classes a ela diretamente, PROTEÇÃO
    private $ram;
    private $espacoArmazenamento;

   /* public function getProcessador(){
        return $this->processador;
    }
    public function setProcessador($processador){
        $this->processador = $processador;
    }
    public function getRam(){
        return $this->ram;      //2° caso return $ram; errado, pois cria uma nova variável diferente da instanciada
    }
    public function setRam($ram){
        $this->ram = $ram;
        return $this;
    }
    public function getEspacoArmazenamento(){
        return $this->espacoArmazenamento;
    }
    public function setEspacoArmazenamento($espacoArmazenamento){
        $this->espacoArmazenamento = $espacoArmazenamento;
    }*/
     
    public function getProcessador(){
        return $this->processador;
    }
    public function setProcessador($processador){
        $this->processador = $processador;

        return $this;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setRam($ram){
        $this->ram = $ram;

        return $this;
    }    

    public function getEspacoArmazenamento(){
        return $this->espacoArmazenamento;
    }

    public function setEspacoArmazenamento($espacoArmazenamento){
        $this->espacoArmazenamento = $espacoArmazenamento;

        return $this;
    }
}

/* extensões úteis
 * php debug php getters e setters
 * php intelephense
 * php serve
*/