<?php
/**
 * Dump data
 *
 * @param mixed $val
 */
function d($val) {
    if(php_sapi_name() == 'cli')
    {
        htmlentities(print_r($val));
        echo PHP_EOL;
    }
    else
    {
        echo '
		<div style="border: 1px solid red; background-color: #FFF0F0; padding: 5px;">
			<pre>';

        htmlentities(print_r($val));

        echo '
			</pre>
		</div>';
    }
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