<link rel="stylesheet" type="text/css" href="/../class_sample/css/font-face.css">
<link rel="stylesheet" type="text/css" href="/../class_sample/css/main-font.css">
<title>Class Sample</title>
<?php
        
        class Human {
           
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            

            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
           
            public function greet() {
              return "Hello World! My name is " . $this->firstname . " " . $this->lastname . ", and it's so awesome to meet you!";
            }
          }
          
      
        $me = new Human('Parker', 'Zink', 16);
        
        
        echo $me->greet(); 
        ?>