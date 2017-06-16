<?php

// Commentaire
// Ca marche
ob_start();

require "functions.php";

echo "Hello world!";

echo ob_get_clean();