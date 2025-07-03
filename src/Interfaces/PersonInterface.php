<?php

namespace App\Interfaces;

interface PersonInterface
{
    public function getNome(): string;
    public function getId(): int;
    public function getEmail(): string;
}