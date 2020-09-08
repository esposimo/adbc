<?php


namespace smn\phs\Catalog;


class CatalogObject implements CatalogObjectInterface
{

    /**
     * Name of the object
     * @var string
     */
    protected string $name;

    /**
     * @inheritDoc
     */
    public function setName(string $name)
    {
        // TODO: Implement setName() method.
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    /**
     * @inheritDoc
     */
    public function setType(string $type)
    {
        // TODO: Implement setType() method.
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        // TODO: Implement getType() method.
    }

    /**
     * @inheritDoc
     */
    public function addChildInstance(CatalogInterface $instance)
    {
        // TODO: Implement addChildInstance() method.
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
}