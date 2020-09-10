<?php


namespace smn\phs\Catalog;

/**
 * Class CatalogObject
 * @package smn\phs\Catalog
 */
class CatalogObject implements CatalogObjectInterface
{

    /**
     * Name of the object
     * @var string
     */
    protected string $name;


    /**
     * Type of the object
     * @var string
     */
    protected string $type;


    /**
     * Multidimensional array. Index are children's type. Value of each index are a list of CatalogInterface objects
     * @var array
     */
    protected array $children;

    /**
     * Parent object of this instance
     * @var ?CatalogInterface
     */
    protected ?CatalogInterface $parent;


    public function __construct(string $name, string $type) {
        $this->setName($name);
        $this->setType($type);
        $this->parent = null;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setType(string $type)
    {
        // TODO: Implement setType() method.
        $this->type = $type;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function addChildInstance(CatalogInterface $instance)
    {
        $type = $instance->getType();

        if (!$this->hasChildInstance($instance)) {
            $this->children[$type][] = $instance;
            $instance->setParent($this);
        }
        else {
            // TODO: add throw exception.
        }
    }

    /**
     * @inheritDoc
     */
    public function addChild(string $name, string $type)
    {
        // TODO: Implement addChild() method.
    }

    /**
     * @inheritDoc
     */
    public function removeChild(string $name, string $type)
    {
        // TODO: Implement removeChild() method.
    }

    /**
     * @inheritDoc
     */
    public function removeChildInstance(CatalogInterface $instance)
    {
        // TODO: Implement removeChildInstance() method.
    }

    /**
     * @inheritDoc
     */
    public function hasChildInstance(CatalogInterface $instance): bool
    {
        // TODO: Implement hasChildInstance() method.
    }

    /**
     * @inheritDoc
     */
    public function hasChild(string $name, string $type): bool
    {
        // TODO: Implement hasChild() method.
        return (!$this->hasChildType($type)) ? false : array_key_exists($name, $this->children[$type]);
    }

    /**
     * @inheritDoc
     */
    public function hasChildType(string $type): bool
    {
        // TODO: Implement hasChildType() method.
        return array_key_exists($type, $this->children);
    }

    /**
     * @inheritDoc
     */
    public function getChild(string $name, string $type): CatalogInterface
    {
        // TODO: Implement getChild() method.
    }

    /**
     * @inheritDoc
     */
    public function getChildren(): array
    {
        // TODO: Implement getChildren() method.
    }

    /**
     * @inheritDoc
     */
    public function getChildrenType(string $type): array
    {
        // TODO: Implement getChildrenType() method.
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        // TODO: Implement toString() method.
    }

    public function setParent(CatalogInterface $parent)
    {
        // TODO: Implement setParent() method.
        if ($this->parent === null) {
            $this->parent = $parent;
            if (!$parent->hasChildInstance($this)) {
                $parent->addChildInstance($this);
            }
        }
    }

    public function getParent(): CatalogInterface
    {
        // TODO: Implement getParent() method.
        $this->parent;
    }
}