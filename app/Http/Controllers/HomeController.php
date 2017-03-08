<?php namespace App\Http\Controllers;
/**
 * Class HomeController
 * 
 */
use App\Http\Controllers\Controller;
use App\NameCount;

class HomeController extends Controller
{
    
    public function __construct(NameCount $nameCount)
    {
        $this->nameCount = $nameCount;
    }
    /**
     * Index
     * 
     * @param string|bool name
     * @return \Illuminate\View\View
     */
    public function index($name = false)
    {
        if($name)
        {
            $check = $this->nameCount->where('name', $name)->first();
            // If Not exist Add
            if(!$check)
            {
                $model          = $this->nameCount;
                $model->name    = $name;
                $model->count   = 1;
                $model->save();
            }
            else
            {
                $this->nameCount->where('name', $name)->increment('count');
            }
        }
        
        return view('home.index')->with('name', $name);
    }
}
