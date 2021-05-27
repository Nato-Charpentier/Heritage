<?php
include 'class/3.class.php';

$ma_classe_trois = new trois();

$reponse = $_POST['reponse'];

$res_phrase = $ma_classe_trois->salutation($reponse);

echo $res_phrase;