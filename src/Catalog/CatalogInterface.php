<?php


namespace smn\phs\Catalog;


/**
 * Represent an object in the database (schema, table, column, views, and any other object)
 * Interface CatalogInterface
 * @package smn\phs\Catalog
 *
 */

interface CatalogInterface
{


    /**
     * Configure the name of object
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);

    /**
     * Return the name of the object
     * @return string
     */
    public function getName() : string;


    /**
     * Configure type of the object (schema, column, other)
     * @param string $type
     * @return mixed
     */
    public function setType(string $type);

    /**
     * Return type of object
     * @return string
     */
    public function getType() : string;


    /**
     * Add a child instance
     * @param CatalogInterface $instance
     */
    public function addChildInstance(CatalogInterface $instance);

    /**
     * Add a new child
     * @param string $name
     * @param string $type
     */
    public function addChild(string $name, string $type);


    /**
     * Remove an instance from child
     * @param string $name
     * @param string $type
     */
    public function removeChild(string $name, string $type);

    /**
     * Remove a child by instance
     * @param CatalogInterface $instance
     */
    public function removeChildInstance(CatalogInterface $instance);


    /**
     * Return true o false if a CatalogInterface are a child of instance
     * @param CatalogInterface $instance
     */
    public function hasChildInstance(CatalogInterface $instance) : bool;

    /**
     * Returne true o false if a instance with name $name and type $type are a child of this instance
     * @param string $name
     * @param string $type
     * @return mixed
     */
    public function hasChild(string $name, string $type) : bool;


    /**
     * Return true or false if there almost one instance of type $type
     * @param string $type
     * @return bool
     */
    public function hasChildType(string $type) : bool;


    /**
     * Return a child instance with name $name and type $type. If there is not instance, return null
     * @param string $name
     * @param string $type
     * @return CatalogInterface
     */
    public function getChild(string $name, string $type) : CatalogInterface;

    /**
     * Return a multidimensional array. Index are types of children, each element of array are children list
     * @return array
     */
    public function getChildren() : array;

    /**
     * Return an array of children with type $type
     * @param string $type
     * @return array
     */
    public function getChildrenType(string $type) : array;


    /**
     * Config parent of instance.
     * @param CatalogInterface $parent
     */
    public function setParent(CatalogInterface $parent);

    /**
     * Return parent of instance
     * @return CatalogInterface
     */
    public function getParent() : CatalogInterface;

}