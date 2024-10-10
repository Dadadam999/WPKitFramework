<?php

namespace wpkf\Interface;

use WP_Error;

interface ParamRouteInterface
{
    public function getArray(): array;

    function validate($param, $request, $key): bool|WP_Error;

    function sanitize($param, $request, $key): mixed;
}
