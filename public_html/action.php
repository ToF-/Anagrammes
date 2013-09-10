<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
ini_set('memory_limit', '512M');
require_once './entree.php';
require_once './dictionnaire.php';
require_once './chargeur.php';

$dictionnaire = new Dictionnaire();
$chargeur = new Chargeur();
$chargeur->charge("./ukwords.txt", $dictionnaire);

$mot = htmlspecialchars($_POST['mot']);
echo "anagrammes du mot {$mot}:";
$anagrammes = $dictionnaire->anagrammes($mot);

echo "<div id=\"table\">";
echo "<table>";
foreach ($anagrammes as $anagramme) {
	echo "<tr><td>";
	echo $anagramme;
	echo "</td></tr>";
}
echo "</table>";
echo "</div>";
?>
</body>
