<?php

namespace wpkf\Entity;

enum MetaPolyType: string
{
    case STRING = 'string';
    case BOOLEAN = 'boolean';
    case INTENGER = 'integer';
    case NUMBER = 'number';
    case ARRAY = 'array';
    case OBJECT = 'object';
}
