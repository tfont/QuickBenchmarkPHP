<?php

require_once 'src/QuickBenchmark.php';

function function_one()
{
    preg_replace('/<br\s?\/?>/i', "\r\n", "testing<br/><br /><BR><br>");
}

function function_two()
{
    str_ireplace(['<br />','<br>','<br/>'], "\r\n", "testing<br/><br /><BR><br>");
}


$functions = array('function_one', 'function_two');
QB::benchmark($functions);

# ----- Will Output ----- :
# 1.1471637010574E-6 sec/function one (preg_replace)
# 1.6027762889862E-6 sec/function two (str_ireplace)