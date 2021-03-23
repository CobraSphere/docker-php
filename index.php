<?php

try 
{
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';
} 
catch (\Throwable $t) 
{
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
