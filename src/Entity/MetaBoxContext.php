<?php

namespace wpkf\Entity;

enum MetaBoxContext: string
{
    case NORMAL = 'normal';
    case ADVANCED = 'advanced';
    case SIDE = 'side';
}
