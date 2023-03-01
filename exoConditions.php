<?php 


$note = 15;

if ($note >12 && $note < 14){
    echo "avec ton $note tu as la mention : assez bien";
} elseif ($note > 14 && $note < 16) {
    echo "avec ton $note tu as la mention : bien";
} elseif ($note > 16) {
    echo "avec ton $note tu as la mention : Tres bien";
}