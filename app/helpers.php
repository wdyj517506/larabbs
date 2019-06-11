<?php
function route_class()
{
    return str_repeat('.','_',Route::currentRouteName());
}