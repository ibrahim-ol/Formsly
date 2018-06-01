<?php

function active($path){
    $segments = request()->segments();
    $segment = $segments[0] ?? "/";
    if( $segment == $path)
        return 'active';
    return '';
}