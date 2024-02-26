<?php


class User
{
    // properties 
    public $username = 'ryu';
    public $email = 'ryu@netninja.co.uk';

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

$userOne = new User();
$userTwo = new User();

echo "Username: " .  $userOne->username . "<br>";
echo "Email:" . $userOne->email . "<br>";
echo $userOne->addFriend() . "<br>";
echo $userOne->deleteFriend() . "<br>";


echo "<br>";

// nimpa value
// not effective, pake constructor lebih baik, karena constructor langsung manggil. (Special method)

$userTwo->username = 'jono';
$userTwo->email = 'jono@netninja.co.uk';
echo "Username: " . $userTwo->username . "<br>";
echo "Email:" . $userTwo->email . "<br>";
echo $userTwo->addFriend() . "<br>";
echo $userTwo->deleteFriend() . "<br>";


// how to check class properties and methods in php
// get_class_vars & get_class_methods

print_r(get_class_vars('User'));
echo "<br>";
print_r(get_class_methods('User'));






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