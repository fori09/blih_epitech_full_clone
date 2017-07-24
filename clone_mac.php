<?php
print("Enter python command : ");//python3
$python = trim(fgets(STDIN));
print("Enter blih path : ");///Users/xxxxx/Library/blih/blih.py
$blih = trim(fgets(STDIN));
print("Enter epitech email : ");
$email = trim(fgets(STDIN));
$list;
echo($email);
$list .= shell_exec($python." ".$blih." -u ".$email." repository list");

$array= explode(PHP_EOL,$list);
//var_export($array);
//shell_exec("cd /Applications/MAMP/htdocs/depot");
//shell_exec('ls');
array_pop($array);
print("Enter epitech email or login : ");
$login = trim(fgets(STDIN));
print("Clone launch")."\n";
foreach ($array as $value) {
    shell_exec("git clone git@git.epitech.eu:/".$login."/".$value );
}
print("Clone complete")."\n";
?>
