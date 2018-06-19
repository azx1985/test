<?php

/**
 * @Author: Administrator
 * @Date:   2018-06-19 16:09:23
 * @Last Modified by:   Administrator
 * @Last Modified time: 2018-06-19 16:14:02
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}