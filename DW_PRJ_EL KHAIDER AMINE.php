<?php
    $myvar=true;
    if ($myvar==true){
        echo "amine";
    }
    $people=array("amine","oussama");
    echo $people[1];
//loops
$y = 1;
while($y <= 5) {
  echo "The number is: $y <br>";
  $y++;
}


for ($x = 0; $x <= 2; $x++) {
    echo "The number is: $x <br>";
}
  
  
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
$n=$_POST["name"];
echo "hello," . $n; //CONCATENATION
//function
function writeMsg() {
    echo "Hello world!";
}
  
writeMsg(); // call the function

//superglobals


 

?>
<html>
    <body>
        <form action="dw1.php" method="post"> <!-- une fois je vais cliquer sur submit il va me faire entrer dans la dw1.php -->
            enter your name <input name="name" type="text"> 
            <input type="submit">

        

        </form>
        
    </body>
    
</html>