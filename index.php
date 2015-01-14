<link rel="stylesheet" type="text/css" href="/../class_sample/css/font-face.css">
<link rel="stylesheet" type="text/css" href="/../class_sample/css/main-font.css">
<title>Class Sample</title>
<?php
        
        class Human {
           
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            public $mascot;
            

            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
           
            public function greet() {
              return "Hello World! My name is " . $this->firstname . " " . $this->lastname . " and I am " . $this->age . " years old! It's so awesome to meet you!";
            }
          }
          
      
        $me = new Human('Parker', 'Zink', 16);
        
        
        echo $me->greet(); 
        ?>
<?php
        
        class Human2 {
           
            public $isAlive = true;
            public $gender;
            public $mascot;
            public $school;
            

            public function __construct($gender, $mascot, $school) {
              $this->gender = $gender;
              $this->mascot = $mascot;
              $this->school = $school;
            }
            
           
            public function greet() {
              return " I am a " . $this->gender .  " and an official " . $this->mascot . " at " . $this->school . "!";
            }
          }
          
      
        $me = new Human2('boy', 'bulldog', 'Pasadena High School');
        
        
        echo $me->greet(); 
        ?>