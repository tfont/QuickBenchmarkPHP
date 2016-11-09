<?php

final class QB
{
    public static function benchmark(array $functions, $return = FALSE, $runs = 10000000)
    {
        $results = (array) NULL;
        $return  = (bool) $return;
        $runs    = (int)  $runs;
        
        $before = microtime(TRUE);

        for ($i = 0 ; $i < $runs; $i++)
        {
            function_one();
        }

        $after = microtime(TRUE);
        
        if ($return === FALSE)
        {
            echo (($after - $before) / $i)." sec/function one\n";
        }
        if ($return === TRUE)
        {
            $results[] = (($after - $before) / $i)." sec/function one\n";
        }

        $before = microtime(TRUE);

        for ($i = 0 ; $i < $runs; $i++)
        {
            function_two();
        }

        $after = microtime(TRUE);
        
        if ($return === FALSE)
        {
            echo (($after - $before) / $i)." sec/function two\n";
        }
        if ($return === TRUE)
        {
            $results[] (($after - $before) / $i)." sec/function two\n";
        }
        
        if (!empty($return))
        {
            return (array) $return;
        }
        else
        {
            return;
        }
    }
}
