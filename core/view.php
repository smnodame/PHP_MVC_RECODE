<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 2:58 PM
 */
class View
{
    function generate($content_view, $template_view, $data)
    {
        include 'application/views/'.$template_view;
    }
}
