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

$userOne = new User('ryu', 'ryu@netninja.cok.uk');
$userTwo = new User('jono', 'jonopargigi@netninja.co.uk');

// we cant directly access the properties because it has private properties
// echo $userOne->email;


echo $userOne->getEmail();
echo "<br>";

$userTwo->setEmail('rika@pargigi.co.uk');

echo $userTwo->getEmail()


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>