<?php 
$temansaya = ["agastyan","pitri","cicis"];
print_r($temansaya); //untuk menampilkan seluruh nilai array
echo $temansaya[2];
echo "<ol>";
foreach ($temansaya as $key => $value) {
    echo"<li>$key. $value</li>";
}
echo "</ol>";
$temansaya[1] = "aurel";
unset($temansaya[0]);
print_r($temansaya);

echo "<br><br><br>";
$buah = [ "m" =>"markisa","a"=>"anggur"];
print_r($buah);
echo "<br>";

//array pop
 $tims = ["amelia","bija","jonat","yihua"];
 array_pop($tims);
 foreach ($tims as $person) {
    echo $person.',<br/>';
 }
 echo "<br>";
//array push
$tims = ["riza", "maisha","jasuk", "juariah"];

array_push($tims, "clara");

foreach($tims as $person) {

echo $person.'<br/>';
}
echo "<br>";
//array shift
$tims = ["gismo", "mole", "jessie", "jackie"];

array_shift($tims);

foreach($tims as $person) {

echo $person. '<br/>';
}
echo "<br>";
//array unshift
$tims = ["albani", "torikh", "keiyra", "kaifiya"];

array_unshift($tims, "kafka", "dhita");

foreach($tims as $person) {

echo $person.'<br/>';

}
?>