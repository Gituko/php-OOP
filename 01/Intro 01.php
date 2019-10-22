<html>
<head>
    <title></title>
</head>
<body>
<?php
    class Animal{

        protected $name;
        protected $favorite_food;
        protected $sound;
        protected $id;

        //What it means every other Animal object will have to share number of animals if ==1 the all other objects will have 1
        public static $number_of_animals = 0;
        //If you want to access a static value and make change you type Animal::$number_of_animals

        const PI ="3.12159";

        function getName(){
            return $this->name;
        }

        //Initialize values every time we instantiate animal object
        function __construct(){

            $this->id = rand(100, 1000000);
            echo $this->id . "has been assigned <br />";

            Animal::$number_of_animals ++;

        }

        //Whenever an object is being deleted.
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }
    }

?>
</body>
</html>