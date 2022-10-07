<?php

namespace App\Models;

class Fare{
    
    private int $id;

    private float $value;
    
    private string $created;

    private int $status;
    
    private int $operatorId;

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of created
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * Set the value of created
     */
    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of operatorId
     */
    public function getOperatorId(): int
    {
        return $this->operatorId;
    }

    /**
     * Set the value of operatorId
     */
    public function setOperatorId(int $operatorId): self
    {
        $this->operatorId = $operatorId;

        return $this;
    }
}

?>