<?php

// Course name GFG class

// php program to implements encapsulation

class GFG 
{
    private $userId;
    private $pwd;

    // update GFG password

    public function updatePwd($userId, $pwd)
    {
        // Write function body
        echo("Function to update password '"
                . $pwd . "' for user " . $userId);
          
        echo "<br>";
    }

    // Check account balance
    public function courseName($userId) {
          
        // Write function body
        echo("Function to check course name of user "
                . $userId);
          
        echo "<br>";
    }
}

$obj = new GFG();
$obj -> updatePwd('GFG12', 'geeks54321');
$obj -> courseName('GFG06');
