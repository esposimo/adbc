<?php


namespace smn\phs\Catalog;


/**
 * Interface PrintableInterface
 * @package smn\phs\Catalog
 *
 * Make an object printable
 */
interface PrintableInterface
{

    /**
     * Return the printable name of object
     * @return string
     */
    public function toString() : string;

}