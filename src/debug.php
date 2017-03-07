<?php
/**
 * Dump data
 * It is using some decoration according the environment...
 *
 * @param mixed $val
 */
function d($val) {
    $backtraceTmp = debug_backtrace();
    $backtrace = [];
    foreach($backtraceTmp AS $element) {
        $backtrace[] = $element['file'] . ': ' . $element['line'];
    }

    if(php_sapi_name() == 'cli')
    {
        echo str_repeat('-', 50);
        echo PHP_EOL;
        print_r($val);
        echo PHP_EOL;
        echo 'Called from:';
        echo PHP_EOL;
        echo implode($backtrace, PHP_EOL);
        echo PHP_EOL;
        echo str_repeat('-', 50);
    } else {
        echo '
		<div style="border: 1px solid red; background-color: #FFF0F0; padding: 5px;">
			<pre>';
        htmlentities(print_r($val));
        echo PHP_EOL;
        echo 'Called from:';
        echo PHP_EOL;
        echo implode($backtrace, PHP_EOL);
        echo PHP_EOL;
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

