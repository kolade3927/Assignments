<html>

<body>

<center>

<?php

echo "<h1 style='color:blue'>NUMBER 1</h1>";
$probability = (rand(1,100));

if($probability <= 50){

echo "Probability:".$probability;

echo "<h2>Charlie ate my lunch!</h2><br/>";

}else{

echo "Probability:".$probability;

echo "<h2>Charlie did not eat my lunch!</h2><br/>";

}

echo "<h1 style='color:blue'>NUMBER 2</h1>";
$count=0;

echo "<h2> Checker Board</h2>";

echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">';

for($i=0; $i<9; $i++)

{

echo "<tr>";

for($j=0; $j<9; $j++)

{

$count=$count+1;

if($count%2 == 0)

{

echo '<td height="35" width="35" style="background-color:red;"></td>';

}

else

{

echo '<td height="35" width="35" style="background-color:black;>"</td>';

}

}

echo "</tr>";

}

echo "</table><br/>";



echo "<h1 style='color:blue'>NUMBER 3</h1>";

$months = array ("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");

$length = count($months);

echo "<h3>Display months with standard for loop:</h3>";

for ($x = 0; $x < $length; $x++){
	echo $months[$x]."<br/>";
}

sort($months);

echo "<br><h3>Display sorted months with standard for loop:</h3>";
for ($x = 0; $x < $length; $x++){
	echo $months[$x]."<br/>";
}

$months2 = array ("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");

echo "<br/><h3>Display months with for each loop:</h3>";

foreach ($months2 as &$value) {

echo $value."<br>";

}

sort($months2);

echo " <br><h3>Display sorted months with for each loop:</h3>";

foreach ($months2 as &$value) {

echo $value."<br>";

}

echo "<h1 style='color:blue'>NUMBER 4</h1>";

$Restaurants = array(
                      "Chama Gaucha" => 40.50,
                      "Aviva by Kameel" => 15.00,
                      "Bone’s Restaurant" => 65.00,
                      "Umi Sushi Buckhead" => 40.50,
                      "Fandangles" => 30.00,
                      "Capital Grille" => 60.50,
                      "Canoe" => 35.50,
                      "One Flew South" => 21.00,
                      "Fox Bros. BBQ" => 15.00,
                      "South City Kitchen Midtown" => 29.00);

echo "The 10 best Restaurants in Atlanta for 2016 are as follows : " . "<br><br>";
printTable($Restaurants);


echo "<br>"." 10 best restaurants in Atlanta ordered by Price:" . "<br><br>";
sortByPrice($Restaurants);

echo "<br>"." 10 best restaurants in Atlanta ordered by Name:" . "<br><br>";
sortByName($Restaurants);

function sortByPrice($Rests)
{
    asort($Rests); 
    printTable($Rests);
  
}

function sortByName($Rests)
{
ksort($Rests);
                
    printTable($Rests);
  
}

function printTable($Rests){

$html = '<table border="1">';
    
    $html .= '<tr>';
  
            $html .= '<th>' . 'Restaurant Name'. '</th>';
            $html .= '<th>' .'Average Cost'. '</th>';
    $html .= '</tr>';

    foreach( $Rests as $key=>$value){
        $html .= '<tr>';
     
            $html .= '<td>' . $key." " . '</td>';
             $html .= '<td>' . $value . '</td>';
      
        $html .= '</tr>';
    }

    $html .= '</table>';
    
    echo $html;

}

echo "<h1 style='color:blue'>NUMBER 5</h1>";

echo "<h1>Enter the Order Information</h1>";

echo '<form name="submit" method="post" action="hw2.php">';

echo 'Hamburgers:<input type="text" name="burg" ><br/><br/>';

echo '          Fries:<input type="text" name="fries" ><br/><br/>';

echo 'Milk Shakes:<input type="text" name="milks" ><br/><br/>';

echo 'Submit: <input type="submit" name="btn" value="Submit"><br/><br/>';
echo '</form>';

$burg=$_POST['burg'];
$fries=$_POST['fries'];
$milks=$_POST['milks'];
$totburg=2.95*$burg;
$totfries=1.95*$fries;
$totmilks=0.85*$milks;

$tip=($totburg+$totfries+$totmilks)*0.16;

$tax=($totburg+$totfries+$totmilks)*0.075;


echo"Final Cost of Hamburger:$$totburg";
echo"<br>";
echo"Final Cost of Fries:$$totfries";
echo"<br>";
echo"Final Cost of Milk Shakes:$$totmilks";
echo"<br>";
echo"Total Pre Tax Tip:$$tip";
echo"<br>";
echo"Total Tax:$$tax";
echo"<br>";
$totorder=$totburg+$totfries+$totmilks+$tip+$tax;
echo"Total Order Cost:$$totorder";
?>
</center>

</body>

</html>