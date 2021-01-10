<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 1/10/21 .
 * Time: 4:42 PM .
 * To change this template user File |  Setting | Settings | File template
 */

if( !function_exists('get_data_user'))
{
    function get_data_user($guest, $column = 'id')
    {
        return Auth::guard($guest)->user() ? Auth::guard($guest)->user()->$column : null;
    }
}
