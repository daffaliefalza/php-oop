<?php


class User
{
    // properties 
    private $username;
    public $email;

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
}

$userOne = new User('ryu', 'ryu@netninja.cok.uk');
$userTwo = new User('jono', 'jonopargigi@netninja.co.uk');



// its overrided because public access modifiers
// $userOne->username = 3;
// $userOne->username = 'rika';
// $userTwo->username = 'Suci';

echo $userOne->addFriend() . "<br>";
echo $userTwo->deleteFriend();


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