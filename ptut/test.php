<!DOCTYPE html>
<html>

<head>
    <title>Randumon</title>
    <link rel="stylesheet" href="styles/style2.css">
</head>

<body>
<h1>Random créatures</h1>

<?php

if (isset($_POST['bouton1'])) {
    include_once "connexion.php";
    $dir_img = "images/";
    global $conn;
    $jambe = $conn->query("SELECT IDJambe FROM jambe");
    $tete = $conn->query("SELECT IDTete FROM tete");
    $corps = $conn->query("SELECT IDCorps FROM corps");

    $nbligne = $conn->query("SELECT COUNT(IDTete) as nb FROM tete");

    $nbligne = $nbligne->fetch(PDO::FETCH_ASSOC);

    foreach ($nbligne as $value) {
        $nbc = $value;
    }

    $a = rand(1, $nbc);
    $b = rand(1, $nbc);
    $c = rand(1, $nbc);

//$req = "SELECT IDCreature FROM Creature JOIN Tete ON Creature.IDTete = Tete.I>
//$creature =$conn->query("SELECT IDCreature FROM Creature JOIN Tete ON Creature.>
//$creature = $creature->fetch(PDO::FETCH_ASSOC);
    /*
    if($creature ==null){
        echo "cette creature nexiste pas on doit l'ajouter";
    }
    else{ echo "cette crezture existe";}
    */

    echo "<div class='creature'>";
    echo "<img src=" . $dir_img . "tetes/" . $a . ".png " . " class='tete'/>";
    echo "<img src=" . $dir_img . "corps/" . $b . ".png " . " class='corps'/>";
    echo "<img src=" . $dir_img . "jambes/" . $c . ".png " . " class='jambes'/>";
    echo "</div>";
}

?>




<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="SUBMIT" name="bouton1" value="Tirer créature">
</form>

</body>

</html>

