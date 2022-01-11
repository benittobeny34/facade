<?php


namespace App\Facade;


class PersonDetail
{
    //actual methods
    public $name, $firstName = "John", $lastName = "Doe";

    /**
     * @return mixed
     */
    public function getName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function calculateBMI($weight,$height)
    {
        return round(($weight/(1.7 * 1.7)),2);
    }
}
