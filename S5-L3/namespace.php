<?php


namespace Pippo {

    class FormTag {
        private $method;
        private $action;
        function __construct($method, $action) {
            $this->method = $method;
            $this->action = $action;
        }

        public function open_tag() {
            echo "<form method='$this->method' action='$this->action';>";
        }
        public function close_tag() {
            echo "</form>";
        }
    };

    class InputTag {

        private $placeholder;
        private $type;
        private $name;
        private $classBS;
        function __construct($placeholder, $type, $name, $classBS) {
            $this->placeholder = $placeholder;
            $this->type = $type;
            $this->name = $name;
            $this->classBS = $classBS;
        }

        public function open_tag() {
            $tipiDiInputHtml = [
                "text",
                "password",
                "email",
                "number",
                "tel",
                "url",
                "search",
                "date",
                "datetime-local",
                "time",
                "month",
                "week",
                "color",
                "range",
                "file",
                "hidden",
                "submit",
                "reset",
                "button",
                "image"
            ];
            
            $alternativeClassiInput = [
                "form-control",
                "form-control-lg", // Rende l'input più grande
                "form-control-sm", // Rende l'input più piccolo
                "is-invalid", // Indica uno stato di validazione negativo
                "is-valid", // Indica uno stato di validazione positivo
                "form-select", // Utilizzato per gli elementi select in Bootstrap 5
                "form-check-input", // Utilizzato per checkbox e radio buttons
                "form-range", // Utilizzato per gli input di tipo range
                "form-text", // Utilizzato per il testo di aiuto sotto l'input
                "form-group", // Utilizzato per raggruppare gli input e le etichette (Bootstrap 4 e precedenti)
                "input-group", // Utilizzato per aggiungere addon agli input
                "input-group-text", // Utilizzato all'interno di input-group per il testo o icone addon
                "form-floating", // Floating labels (Bootstrap 5)
            ];
            if(!in_array($this->type, $tipiDiInputHtml) || !in_array($this->classBS, $alternativeClassiInput)  ) {
                die ('errore, tipo non valido');
            }
            echo "
            <div class='mb-3'>
            <input class='$this->classBS' type='$this->type' placeholder='$this->placeholder' name='$this->name'>
            </div>";    
        }
    }
      

}
 



    










namespace Pluto {

    class Button {
        private $type;
        private $classBS;
        function __construct($type, $classBS) {
            $this->type = $type;
            $this->classBS = $classBS;
        }

       
        public function open_tag($name) {
            echo "<button type='$this->type' class='$this->classBS'>$name</button>";
        }
        
    }
    
}