<?php
echo "<h3> Json in PHP </h3><hr>";
//echo "<h3> Json in PHP => Json </h3><hr>";
// {
//     "employee" : {
//         "name" : "mohsen",
//         "age" : 36,
//         "gender" : "male"
//     }
// }
//echo "<h3> Json in PHP => Array </h3><hr>";
// {
    //     "employee" : [
        //         "name" : "mohsen",
        //         "age" : 36,
        //         "gender" : "male"
        //     ]
        // }
echo "<h3> Json in PHP => json_encode </h3>";
$employee = ["mohsen" => 36,"nima" => 32,"maryam" => 30];
echo json_encode($employee)."<br>";
$color = ["blue","purple","black","pink"];
echo json_encode($color, JSON_FORCE_OBJECT);
echo "<hr><hr><h3> Json in PHP => json_decode </h3>";
$jsonToArray = '{"mohsen":36,"nima":32,"maryam":30}';
var_dump(json_decode($jsonToArray)); echo "<br>";
var_dump(json_decode($jsonToArray, true)); echo "<br>";
$emp = json_decode($jsonToArray);
echo $emp -> mohsen; echo "<br>";
$emp_de = json_decode($jsonToArray, true);
echo $emp_de["nima"] . "<br>";
foreach ($emp as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}echo "<hr>";
foreach ($emp_de as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
