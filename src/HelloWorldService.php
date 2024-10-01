<?php

namespace rianodji\HelloWorld;

class HelloWorldService
{
    public function sayHello(string $name): string
    {
        return "Hello, " . $name . "!";
    }
}
