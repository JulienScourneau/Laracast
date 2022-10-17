<?php

class PagesController
{
    public function home()
    {


        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutCulture()
    {
        require view('about-culture');
    }
}