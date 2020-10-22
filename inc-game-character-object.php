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
        function set_score($score) {
            $this->score = $score;
        }
        function get_score() {
            return $this->score;
        }
    }

$adonis = new GameCharacter();
$adonis->set_name('Adonis');
$adonis->set_score(595);
$hades = new GameCharacter();
$hades->set_name('Hades');
$hades->set_score(666);

print ("<p>Our contendors today are: ".$adonis->get_name()." and ".$hades->get_name().".</p>");
print ("<p>Hades score is: ".$hades->get_score()." and Adonis score is: ".$adonis->get_score().".</p>");
print ("<p>Hades is the winner!!!");
?>
</body>
</html>