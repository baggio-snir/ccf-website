<?php

namespace lib\api;

/**
 * Description of Ping
 *
 */
class Ping extends \lib\GenericApi {
    protected function internal(): array {
        return ['pong' => microtime(true),];
    }
}
