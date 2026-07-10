<?php

trait SampleTrait
{
  public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
  use SampleTrait;

  #[Override]
  public function sampleFunction(int $name): string {}
}
