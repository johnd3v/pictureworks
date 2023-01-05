<?php

namespace App\Http\Controllers;

use App\Models\DailyCount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Throwable;

class DailyCountController extends Controller
{   

    public function __construct()
    {
       $now = Carbon::now();
       $this->currentDate  = $now->toDateString();
    }

    public function get()
    {
        $dailyCount = DailyCount::countToday($this->currentDate);

        return ['count' => $dailyCount->count ?? 0,'success' => true];
    }

    public function post()
    {   
       try{
            $dailyCount = DailyCount::countToday($this->currentDate);
         
            if(!$dailyCount){
                $dailyCount = DailyCount::create(['count' => 1,'date' => $this->currentDate]);
            }else{
                $dailyCount->count++;
                $dailyCount->save();
            }

            return ['success' => true,'count'=> $dailyCount->count];
            
       }catch(Throwable $e){
            return ['success' => false,'message' => $e->getMessage()];
       }
    }
}
