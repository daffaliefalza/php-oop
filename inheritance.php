<?php


class User
{
    // properties 
    public $username;
    private $email;

    // special methods (constructor)

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email =  $email;
    }

    // methods
    public function addFriend()
    {
        return "This $this->username added a friend";
    }

    public function deleteFriend()
    {
        return "This $this->username deleted a friend";
    }


    // both are basically class methods
    // getters

    public function getEmail()
    {
        return $this->email;
    }


    // setters

    public function setEmail($email)
    {

        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}


class AdminUser extends User
{

    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$userOne = new User('ryu', 'ryu@netninja.cok.uk');
$userTwo = new User('jono', 'jonopargigi@netninja.co.uk');
$userThree = new AdminUser('kyoka', 'kyoka@co.uk', 5);


// print_r(get_class_vars('AdminUser')) . "<br>";
// print_r(get_class_methods('AdminUser')) . "<br>";


echo $userThree->username . "<br>";
echo $userThree->getEmail() . "<br>";
echo $userThree->level . "<br>";
