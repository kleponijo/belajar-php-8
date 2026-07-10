<?php

function sayHello(string $first, string $last)
{
  echo $first . PHP_EOL;
  echo $last . PHP_EOL;
}

function sum(int ...$value)
{
  return $value;
}

sayHello("Nadif", "Nadif",);
var_dump(sum(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,));

$array = ["first" => "Nadif", "middle" => "Nadif", "last" => "Nadif",];
