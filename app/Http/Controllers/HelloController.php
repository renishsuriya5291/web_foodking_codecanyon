<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // Check database connection and retrieve data
        try {
            \DB::connection()->getPdo();
            $message = 'Hello, Database connection is working!';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
        }

        return view('hello', compact('message'));
    }
}
