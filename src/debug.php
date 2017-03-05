<?php
/**
 * Dump data
 *
 * @param mixed $val
 */
function d($val) {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}

/**
 * Dump data and die
 *
 * @param mixed $val
 */
function dd($val) {
    d($val);
    die;
}