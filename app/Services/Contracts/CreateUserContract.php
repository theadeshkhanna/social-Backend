<?php

namespace App\Services\Contracts;

interface CreateUserContract {

    public function getName();
    public function getEmail();
    public function getPassword();

}