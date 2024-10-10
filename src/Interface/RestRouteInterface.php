<?php

namespace wpkf\Interface;

use WP_REST_Request;

interface RestRouteInterface
{
    function callback(WP_REST_Request $request): mixed;

    function checkPermission(WP_REST_Request $request): bool;
}
