<?php
/**
 * Created by PhpStorm.
 * User: claucio
 * Date: 10/10/16
 * Time: 4:29 PM
 */
/* Set active class
    -------------------------------------------------------- */
function set_active($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}