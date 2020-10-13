<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
public function index(){
    echo '<h1>Fluent String</h1>';

    $slice=Str::of('welcome to oshan ')->after('welcome');
    echo $slice .'<br>';

    $slice2=Str::of('App\http\controllers\controller ')->afterLast('\\');
    echo $slice2.'<br>';

    $string=Str::of('welcome ')->append('oshan');
    echo $string.'<br>';

    $loweCase=Str::of('LARAVEL 8 ')->lower();
    echo $loweCase.'<br>';

    $upperCase=Str::of('laravel ')->Upper();
    echo $upperCase.'<br>';

    $replace=Str::of('LARAVEL 7.0')->replace('7.0','8.7');
    echo $replace.'<br>';

    $convert=Str::of('this is title')->title();
    echo $convert.'<br>';

    $slug=Str::of('Laravel 8 Framework')->slug('-');
    echo $slug.'<br>';

    $str=Str::of('LARAVEL Framework')->substr(5);
    echo $str.'<br>';

    $trim=Str::of('/LARAVEL/')->trim('/');
    echo $trim.'<br>';

    /*
    -------all result---------

         Fluent String
    to oshan
    controller
    welcome oshan
    laravel 8
    LARAVEL
    LARAVEL 8.7
    This Is Title
    laravel-8-framework
    EL Framework
    LARAVEL

    */

}
}
