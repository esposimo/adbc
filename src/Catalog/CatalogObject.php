<?php


namespace smn\phs\Catalog;


use smn\cheapbinarytds\Node;

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
     * @var Node
     */
    protected Node $structure;


    public function __construct(string $name, string $type) {
        $this->setName($name);
        $this->setType($type);
        $this->structure = new Node($this->getName(), $this);
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
        //
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function addChildInstance(CatalogInterface $instance)
    {
        // TODO: Implement addChildInstance() method.
        $name = $instance->getName();
        $type = $instance->getType();

        $index = sprintf('%s.%s', $type, $name);

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
    }

    /**
     * @inheritDoc
     */
    public function hasChildType(string $type): bool
    {
        // TODO: Implement hasChildType() method.
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
    }

    public function getParent(): CatalogInterface
    {
        // TODO: Implement getParent() method.
    }
}