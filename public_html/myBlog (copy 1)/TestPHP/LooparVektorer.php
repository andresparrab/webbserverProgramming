<?php
$flera_namn = array("Oscar", "Bengt","Anna");
foreach($flera_namn as $namn)
{
    echo "this is your name: ". $namn ."<br>";
}

$penger = array("Oscar"=>5000, "Bengt"=>10000, "Anna"=>15000);
foreach($penger as $nyckel=>$value)
{
    echo $nyckel.": ".$value."<br>";
}
?>