<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();

        if (session('whistlist.product') !== null) {
            $whistlist = count(session('whistlist.product'));
        } else {
            $whistlist = 0;
        }

        return view('components.navbar', ['categories' => $categories, 'whistlist' => $whistlist]);
    }
}
