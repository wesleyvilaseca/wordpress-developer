<?php

function ju_setup_theme()
{
    register_nav_menu('primary', __('Primary Menu', 'CodeVilaTheme'));
    register_nav_menu('secondary', __('Secondary Menu', 'CodeVilaTheme'));
}
