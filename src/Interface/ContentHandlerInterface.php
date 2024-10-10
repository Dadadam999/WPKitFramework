<?php

namespace wpkf\Interface;

interface ContentHandlerInterface
{
    public function render(): void;
    public function callback(): void;
}
