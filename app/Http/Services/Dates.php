<?php

namespace App\Http\Services;
use App\Models\accommodation_schedule;
class Dates {
    public $dates;
    public function ShowDates() {
        $dates = accommodation_schedule::readDates();
        $this->sortDates($dates);
        //var_dump($dates);
    }
    private function sortDates($dates) {
        
        foreach ($dates as $list) {
            
            $return = accommodation_schedule::ifExist($list->date_from,$list->date_to,$list->id);
            foreach ($return as $listDate) {
                if (count($return) == 1) {
                print $listDate;
                }
                else {
                    print "dos";
                }
                
            }
            
        }
    }
}
