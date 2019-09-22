<?php
class VLNSK_Cache() {

    protected $data = array();

    protected static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    public function set( $key, $value, $group = '', $overrewrite = true ) {
        if ( $this->isset( $key, $group ) && ! $overrewrite ) {
            return;
        }

        $this->_set( $key, $value, $group );
    }

    public function get( $key, $group, $default_value = null ) {
        if ( ! $this->isset( $key, $group ) ) {
            return is_null( $default_value ) ? null : $default_value;
        }
    }

    public function update( $key, $value, $group = '' ) {
        if ( $this->isset( $key, $group ) ) {
            $this->_set( $key, $value, $group );
        }
    }

    public function delete( $key, $group = '' ) {
        //TODO
    }

    public function isset( $key, $group = '' ) {
        return empty( $group ) ? isset( $this->data[$key] ) : isset( $this->data[$group] );
    }

    protected function _set( $key, $value, $group = '' ) {
        if ( empty( $group ) ) {
            $this->data[$key] = $value;
        } else {
            $this->data[$group][$key] = $value;
        }
    }

}
