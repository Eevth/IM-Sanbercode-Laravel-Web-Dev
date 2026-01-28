<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP - String & Array</title>
</head>
<body>

<h1>Berlatih String PHP</h1>

<?php   
echo "<h3> Soal No 1</h3>";

$first_sentence = "Halo PHP" ;
$second_sentence = "aku redy por challenge";

echo "Kalimat: $first_sentence <br>";
echo "Panjang string: " . strlen($first_sentence) . "<br>";
echo "Jumlah kata: " . str_word_count($first_sentence) . "<br><br>";

echo "Kalimat: $second_sentence <br>";
echo "Panjang string: " . strlen($second_sentence) . "<br>";
echo "Jumlah kata: " . str_word_count($second_sentence) . "<br>";

echo "<h3> Soal No 2</h3>";

$string2 = "I suka Python";

echo "<label>String: </label> \"$string2\" <br>";
echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
echo "Kata ketiga: " . substr($string2, 7, 3) . "<br>";

echo "<h3> Soal No 3 </h3>";

$string3 = "PHP is old but sexy!";
echo "String: \"$string3\" <br>";

$hasil = str_replace("old but sexy!", "awesome", $string3);
echo "Hasil: \"$hasil\"";

echo "<hr>";
echo "<h1>Berlatih Array</h1>";

echo "<h3> Soal 1 </h3>";

$kids = ["ucup", "soleh", "asep", "ucok", "eep", "ecep"];
$adults = ["bu haji", "bu nancy", "bu nanda", "bu siti", "bu maimunah"];

echo "<h3> Soal 2</h3>";

echo "Cast Stranger Things: <br><br>";

echo "Total Kids: " . count($kids);
echo "<ol>";
foreach ($kids as $kid) {
    echo "<li>$kid</li>";
}
echo "</ol>";

echo "Total Adults: " . count($adults);
echo "<ol>";
foreach ($adults as $adult) {
    echo "<li>$adult</li>";
}
echo "</ol>";

echo "<h3> Soal 3</h3>";

$data = [
    [
        "Name" => "ecep surecep",
        "Age" => 21,
        "Aliases" => "ecep tukang baso",
        "Status" => "hidup"
    ],
    [
        "Name" => "cuki siputro",
        "Age" => 20,
        "Aliases" => "tukang batagor",
        "Status" => "hidup"
    ],
    [
        "Name" => "asep surasep",
        "Age" => 43,
        "Aliases" => "tukang urut",
        "Status" => "Hidup"
    ],
    [
        "Name" => "sugi bin sugiono",
        "Age" => 12,
        "Aliases" => "tukang pijet uhuy",
        "Status" => "meniggal"
    ]
];

echo "<pre>";
print_r($data);
echo "</pre>";
?>

</body>
</html>