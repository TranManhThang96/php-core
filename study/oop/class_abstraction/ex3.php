<?php

declare(strict_types=1);

abstract class Adapter
{
    protected $name;

    //khai báo kiểu trả về cho abstract class
    abstract public function getName(): string;

    abstract public function setName(string $value);
}

class AdapterFoo extends Adapter
{
    public function getName(): string
    {
        return $this->name;
    }

    // return type declaring not defined in abstract class, set here
    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
    }
}