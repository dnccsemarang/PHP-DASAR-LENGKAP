<?php

namespace rizdev\Belajar\PHP\MVC\Middleware;

interface Middleware {
    function before(): void;
}