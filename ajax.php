<?php

$array = array(
    "name" => "miguel",
    "position" => "developer",
    "salary" => "10k",
    "office" => "gdl"
);
$array2 = array();
for($i = 0;$i<100;$i++){
   $array2[] = $array;
}

$table = "";
$i = 0;
foreach ($array2 as $r) {
  $table .= "<tr>";
    $table .= "<td>".$r["name"].$i."</td>";
    $table .= "<td>".$r["position"].$i."</td>";
    $table .= "<td>".$r["salary"].$i."</td>";
    $table .= "<td>".$r["name"].$i."</td>";
    $table .= "<td>".$r["name"].$i."</td>";
    $table .= "<td>".$r["name"].$i."</td>";
  $table .= "</tr>";
  $i++;
}

echo $table;
?>
