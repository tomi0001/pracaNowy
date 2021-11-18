<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * Description of ControllerZad1
 *
 * @author tomi2
 */
class ControllerZad1 extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function generateNumberRead(string $string = "12345678909876543210000000000000000000") {
               
        $div = substr($string,0,2);
        $divTwo = substr($string,2, strlen($string));
        print $div . " " . wordwrap($divTwo,4," ",true); //tutaj jest całe proces wyświetlania tego numeru można to zrobić jeszcze w widoku wyświtlić
    }
    public function generateNumberWrite(string $string) {
        print str_replace(" ", "", $string);
    }
}
