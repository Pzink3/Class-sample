<title>Class sample</title>
<?php
        // The code below creates the class
        class Human {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello World! My name is " . $this->firstname . " " . $this->lastname . ", and it's so awesome to meet you!";
            }
          }
          
        // Creating a new person called "Parker Zink", who is 16 years old ;-)
        $me = new Human('Parker', 'Zink', 16);
        
        // Printing out, what the greet method returns
        echo $me->greet(); 
        ?>