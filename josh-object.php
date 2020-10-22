<html>
<head>
	<title>Game Character Object</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
    class GameCharacter {
        //Properties
        public $playerName;
        public $score;
    

        //Methods
        function set_name($playerName) {
            $this->name = $playerName;
        }
        function get_name() {
            return $this->name;
        }
        function set_quality($score) {
            $this->score = $score;
        }
        function get_quality() {
            return $this->score;
        }
    }

$johnwick = new GameCharacter();
$johnwick->set_name('John Wick');
$johnwick->set_quality('The Man');
$myex = new GameCharacter();
$myex->set_name('My Ex');
$myex->set_quality('Not so bad.');

print ("<p>Our contendors today are: ".$johnwick->get_name()." and ".$myex->get_name().".</p>");
print ("<p>John Wick is: ".$johnwick->get_quality()." and My Ex is: ".$myex->get_quality().".</p>");
print ("<p>John Wick is still the man!!!");
?>
</body>
</html>