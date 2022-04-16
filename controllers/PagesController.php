<?php
class PagesController
{
    public function home()
    {

        return view('index');
    }

    public function about()
    {
        $company = 'Laracast';
        return view('about', compact('company'));
    }

    public function contact()
    {
        return view('contact');
    }
}
