<?php

try {
$bdd= new PDO('mysql:host=infodb2.iut.univ-metz.fr.;dbname=raimondi1u_projet_notation','raimondi1u_appli',/*'8j9cU857'*/'31306060',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true));
$bdd->exec("SET CHARACTER SET utf8");
echo"<p>Vous êtes connecté à la base de données.</p>";
}
catch (Exception $exception)
{
die($exception->getMessage());
}

?>