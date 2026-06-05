<?php

#[Attribute]
class NotBlank {}

class LoginRequest
{
  #[NotBlank]
  public string $username;

  #[NotBlank]
  public string $password;
}

function validate(object $object): void {}
