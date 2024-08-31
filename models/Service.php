<?php

namespace models;

class Service
{
    public string $name = "";
    public string $description  = "";
    public string $icon = "";

    public function __construct(string $name, string $description, string $icon) {
        $this->name = $name;
        $this->description = $description;
        $this->icon = $icon;
    }
}