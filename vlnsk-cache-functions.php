<?php
include_once 'class-vlnsk-cache.php';

/**
 * 
 */
function vlnsk_cache() {
    return VLNSK_Cache::instance();
}

/**
 * 
 */
function vlnsk_cache_add( $key, $value, $group = '', $overrewrite = true ) {
    vlnsk_cache()->add( $key, $value, $group = '', $overrewrite = true );
}

/**
 * 
 */
function vlnsk_cache_get( $key, $group = '', $default_value = null ) {
    vlns_cache()->get( $key, $group = '', $default_value = null );
}

/**
 * 
 */
function vlnsk_cache_update( $key, $value, $group = '' ) {
    vlnsk_cache()->update( $key, $value, $group = '' );
}

/**
 * 
 */
function vlnsk_cache_isset( $key, $group = '' ) {
    vlnsk_cache()->isset( $key, $group = '' );
}
