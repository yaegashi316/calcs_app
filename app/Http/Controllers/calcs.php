<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($value1, $operator, $value2)
    {
        switch ($operator) {
            case 'addition':
                //追記
                $result = $value1 + $value2;
                break;
            case 'subtraction':
                //追記
                $result = $value1 - $value2;
                break;
            case 'multiplication':
                //追記
                $result = $value1 * $value2;
                break;
            case 'division':
                //追記
                $result = $value1 / $value2;
                break;
        }
        return view('result', ['answer' => $result]);
    }
}
