<?php
/**
 * client Model Representing the Client Entity
 */
class Client{

    /**
     * id: unique identifier of the client
     */
    public int $id;

    /**
     * name: client's name
     */
    public string $name;
    /**
     * @param int $id
     * @param string $name
     *  @param void
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function __toString()
    {
        return "Client{
            id: $this->id;
            name: $this->name;
        }";
    }
}