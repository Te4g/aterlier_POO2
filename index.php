<?php
require_once 'src/Elf.php';
require_once 'src/Soldier.php';

$michel = new Elf();

$michel->walk('right');


$michel->walk('bottom');

$michel->walk('left');
$michel->walk('bottom');
$michel->walk('bottom');
$michel->walk('bottom');
$michel->walk('bottom');
$michel->walk('bottom');
$michel->walk('bottom');
$michel->walk('bottom');
echo '<strong>putain je suis au fond du trou</strong>';

echo $michel->attack();
echo $michel->attack();
echo $michel->attack();
echo $michel->attack();
echo $michel->attack();
echo $michel->attack();
echo $michel->attack();
echo $michel->attack();