<?php
function init_function()
{
    session_name('user_session');
    session_start();
    session_regenerate_id(true);
}

function is_logged_in()
{
    if(isset($_SESSION['logged_in']) && isset($_SESSION['user']))
    {
        return true;
    }
    else
    {
        return false;
    }
}