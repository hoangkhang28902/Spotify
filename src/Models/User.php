<?php 

class User {
    private $UserID;
    private $Username;
    private $UserFname;
    private $UserLname;
    private $Birthday;
    private $Address;
    private $ZipCode;
    private $State;
    private $City;

    // GET METHODS
    public function getUserID()
    {
        return $this->$UserID;
    }

    public function getUsername()
    {
        return $this->$UserFname;
    }
    public function getUserFname()
    {
        return $this->$UserFname;
    }
    public function getUserLname()
    {
        return $this->$UserLname;
    }
    public function getBirthday()
    {
        return $this->$Birthday;
    }
    public function getAddress()
    {
        return $this->$Address;
    }
    public function getZipCode()
    {
        return $this->$ZipCode;
    }
    public function getState()
    {
        return $this->$State;
    }
    public function getCity()
    {
        return $this->$City;
    }

    // SET METHOS
    public function setUserID(int $UserID)
    {
        $this->$UserID = $UserID;
    }
    public function setUsername(string $Username)
    {
        $this->$Username = $Username;
    }
    public function setUserFname(string $UserFname)
    {
        $this->$UserFname = $UserFname;
    }
    public function setUserLname(string $UserLname)
    {
        $this->$UserLname = $UserLname;
    }
    public function setBirthday(Date $Birthday)
    {
        $this->$Birthday = $Birthday;
    }
    public function setAddress(string $Address)
    {
        $this->$Address = $Address;
    }
    public function setZipCode(string $ZipCode)
    {
        $this->$ZipCode = $ZipCode;
    }
    public function setState(string $State)
    {
        $this->$State = $State;
    }
    public function setCity(string $City)
    {
        $this->$City = $City;
    }
    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}