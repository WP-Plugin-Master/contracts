<?php

namespace PluginMaster\Contracts\Cache;

interface Cache
{

    public static function get( $fileName, $directory = null );

    public static function set( $fileName, $content, $directory = null );

    public static function reset();

    public static function check( $fileName, $directory = null );

}
