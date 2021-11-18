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
use App\Http\Services\Dates;
/**
 * Description of ControllerZad1
 *
 * @author tomi2
 */
class ControllerZad2 extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showDates() {
        $Dates = new Dates;
        $Dates->ShowDates();
    }
}
