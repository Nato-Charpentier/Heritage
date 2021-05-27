<?php
    include '2.class.php';

    class trois extends deux {

        public function salutation($reponse){
            
            $hello = $this->hello();
            $meteo = $this->meteo();
            $prenom = $reponse;

            $phrase = $hello.' '.$meteo.' '.$prenom;
            
            return json_encode($phrase);

        }
    }