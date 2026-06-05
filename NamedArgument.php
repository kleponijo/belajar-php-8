<?php

function sayHello(string $first, string $last, string $middle = ""): void
{
  echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Nadif", "Zidan", "Tazaka");
// sayHello("Nadif", "Tazaka"); // error

sayHello(last: "Tazaka", first: "Nadif", middle: "Zidan");
sayHello(first: "Nadif", last: "Tazaka");
