<?php

namespace Chondal\UserPersonification;

use Illuminate\Support\HtmlString;

class UserPersonification
{
    public function hello()
    {
        return view('UserPersonification::home');
    }

    public function logoutForm()
    {
        return new HtmlString(view('UserPersonification::logout'));
    }

    public function loginForm($user)
    {
        return new HtmlString(view('UserPersonification::login', compact(
            'user'
        )));
    }
}
