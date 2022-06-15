<?php

use Illuminate\Support\Facades\Auth;

function admin(){
    return Auth::guard('admin')->user();
}
function doctor(){
    return Auth::guard('doctor')->user();
}
