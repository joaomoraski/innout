<?php
require_once(dirname(__FILE__,2) . '/src/config/config.php'); // se colocar o 2 ele pega o diretorio pai
require_once(dirname(__FILE__,2) . '/src/models/User.php');

//$user = new User(['name' => 'Lucas', 'email' => 'lucas@gmail.com']);
print_r(User::get(['id' => 1], 'name, email'));
echo '<br>';

foreach (User::get([], 'name') as $user){
    echo $user->name;
    echo '<br>';
}
