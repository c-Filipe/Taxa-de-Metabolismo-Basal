<?php

    class calculadora {

        

        private $sexo;
        private $altura;
        private $peso;
        private $idade;
        private $tmb;
        private $atvFis;
        private $tmbTotal;

        // Metodos Setters

        public function setSexo($setSexo) {
            $this->sexo = $setSexo;
        }
        public function setAltura($setAltura) {
            $this->altura = $setAltura;
        }
        public function setPeso($setPeso) {
            $this->peso = $setPeso;
        }
        public function setIdade($setIdade) {
            $this->idade = $setIdade;
        }
        public function setTmb($setTmb) {
            $this->tmb = $setTmb;
        }
        public function setAtvFis($atvFis) {
            $this->atvFis = $atvFis;
        }
        public function setTmbTotal($tmbTotal) {
            $this->tmbTotal = $tmbTotal;
        }
        


        // Métodos Getters
        public function getSexo() {
            return $this->sexo;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getIdade() {
            return $this->idade;
       }
       public function getTmb() {
        return $this->tmb;
       }
       public function getAtvFis() {
        return $this->atvFis;
       }
       public function getTmbTotal() {
        return $this->tmbTotal;
       }  

       public function calcular(){

            $this->setSexo(addslashes($_POST['sexo']));
            $this->setAltura(addslashes($_POST['alt']));
            $this->setPeso(addslashes($_POST['peso']));
            $this->setIdade(addslashes($_POST['idade']));
            $this->setAtvFis(addslashes($_POST['atvFis']));



        
			// verificando se todos os dados obrigatorios foram preenchidos
            if (empty($this->getAltura())) {
                echo "<script> alert('Informe sua altura para a realização do cálculo') </script>";
                echo "<script> history.back() </script>";
            }
            elseif (empty($this->getPeso())) {
                echo "<script>alert('Informe seu peso para a realização do cálculo')</script>";
                echo "<script> history.back() </script>";
            }
            elseif (empty($this->getIdade())) {
                echo "<script>alert('Informe sua idade para a realização do cálculo')</script>";
                echo "<script> history.back() </script>";
            }
            
            // calculo para o sexo masculino
            else{
                if ($this->getSexo() == 'masc') {
                            
                    $this->setTmb(66 + (13.7 * $this->getPeso()) + (5 * $this->getAltura()) - (6.8 * $this->getIdade()));
                    
                    switch ($this->getAtvFis()) {
                        case '0':
                           $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.25) ;
                            break;
                        case '1':
                            $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.35) ;
                            break;
                            case '2':
                                $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.45) ;
                                break;    
                        
                    }
                    
                    
                }
                // calculo para o sexo femeneno
                if ($this->getSexo() == 'fem') {

                    $this->setTmb(665 + (9.6 *  $this->getPeso()) + (1.8 * $this->getAltura()) - (4.7 * $this->getIdade()));

                    switch ($this->getAtvFis()) {
                        case '0':
                           $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.20) ;
                            break;
                        case '1':
                            $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.30) ;
                            break;
                            case '2':
                                $this->setTmbTotal($this->getTmb() + $this->getTmb() * 0.40) ;
                                break;    
                        
                    }
                    
                    
                }
            }



        }

        



    }



?>