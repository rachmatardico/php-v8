<?php

function sayHello(string $first, string $middle = "", string $last):void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// Without named argument
sayHello("Eko", "Kurniawan", "Khannedy");
// sayHello("Eko", "Khannedy"); //error

// With named argument
sayHello(last: "Khannedy", first: "Eko", middle: "Kurniawan");
sayHello("Eko", last:"Khannedy");