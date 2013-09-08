<?php
require_once './anagrammes.php';
$mot = htmlspecialchars($_POST['mot']);
echo "anagrammes du mot {$mot}:";
$anagrammes = anagrammes($mot);

echo "<table>";
foreach ($anagrammes as $anagramme) {
	echo "<tr><td>";
	echo $anagramme;
	echo "</td></tr>";
}
echo "</table>";
?>
