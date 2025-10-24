<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItiController extends Controller
{
    function PrintString($var)
    {
        return "<h1 style='color:blue' >{$var}</h1>";
    }
    function PrintNumber($num)
    {
        return "<h1 style='color:red' >{$num}</h1>";
    }

}
