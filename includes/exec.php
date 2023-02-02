<?php
//deleta todos os 
foreach (glob("*.php") as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}