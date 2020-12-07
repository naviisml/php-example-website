<?php

/**
 * Helpers
 */

use Navel\Framework\Container\Container;

if( !function_exists('debug') ) {
    /**
     * [debug description]
     *
     * @param  [type] $content [description]
     * @return [type]          [description]
     */
    function debug( $content )
    {
        die( print( "<pre>" . print_r( $content, true ) . "</pre>" ) );
    }
}

if( !function_exists('app') ) {
    /**
     * [app description]
     *
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    function app( $name = null )
    {
        if ( is_null( $name ) ) {
            return Container::getInstance();
        }

        return Container::getInstance()->make( $name );
    }
}

if( !function_exists('request') ) {
    /**
     * [request description]
     *
     * @return [type] [description]
     */
    function request()
    {
        return app('request');
    }
}

if( !function_exists('router') ) {
    /**
     * [router description]
     *
     * @return [type] [description]
     */
    function router()
    {
        return app('router');
    }
}
