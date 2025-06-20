<?php

use Illuminate\Support\Facades\Redirect;

function check_session()
{
    if (!session()->has('wisedom')) {
        return redirect('login')->with('fail', 'You must login first.')->send();
    }
}
