<?php


namespace SugarfixxNameGenerator;


class Name implements \JsonSerializable
{
    private $firstName;
    private $lastName;
    private $fullName;
    private $email;

    public function __construct($firstName = null ,
        $lastName = null, $fullName = null, $email = null )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->fullName = $fullName;
        $this->email = $email;
    }

    


    public function jsonSerialize()
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'name' => $this->fullName,
            'email' => $this->email
        ];
    }
}
