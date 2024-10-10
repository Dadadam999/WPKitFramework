<?php

namespace wpkf\Interface;

interface FieldInterface
{
    public function renderLabel(): string;
    public function renderField(): string;
}
