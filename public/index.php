<?php
require_once(dirname(__FILE__,2) . '/src/config/database.php'); // se colocar o 2 ele pega o diretorio pai


$sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

while($row = $result->fetch_assoc()){
    print_r($row);
    echo '<br>';
}
