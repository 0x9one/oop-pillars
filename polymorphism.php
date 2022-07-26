<?php

// you can use abstract or interface to define

abstract  class person 
{
    abstract public function greet();
}

class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

function greeting($people)
{
    foreach($people as $person)
    {
        echo $person->greet() . '<br />';
    }
}

$people = [
    new English(),
    new German(),
    new French(),
];

greeting($people);