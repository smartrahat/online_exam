<?php

/**
 * Check for the active URL and append a class
 * @param $path
 * @param string $active
 * @return string
 * Created by smartrahat Date: 2016.09.30 Time: 11:02 PM
 */
function isActive($path, $active = 'selected'){
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}