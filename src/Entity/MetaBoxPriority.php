<?php

namespace wpkf\Entity;

enum MetaBoxPriority: string
{
    case HIGH = 'high';
    case LOW = 'low';
    case CORE = 'core';
    case DEFAULT = 'default';
}
