<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $operator = $request->input('operator');
        $first = $request->input('first');
        $second = $request->input('second');
        $result = 0;
        
        switch ($operator) {
            case 'add':
                $result = $first + $second;
                break;
            case 'subtract':
                $result = $first - $second;
                break;
            case 'multiply':
                $result = $first * $second;
                break;
            case 'divide':
                $result = $first / $second;
                break;
        }
        
        return view('calculate', [
            'result' => $result
        ]);
    }
}
