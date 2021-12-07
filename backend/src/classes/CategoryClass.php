<?php


class CategoryClass
{

    /**
     * @var int
     */
    private int $id;
    /**
     * @var string
     */
    private string $name;

    public function __construct(int $id, string $name)
    {
       $this->setId($id);
       $this->setName($name);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
