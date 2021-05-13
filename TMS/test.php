<?php 

$email = "abcgmail@abc.com";

$len = strlen($email);

$check = true;

for ($i=0; $i < $len; $i++)
{ 
	if ($email[$i]=='@')
	{
		$gmail_id = substr($email, $i, $len-1);
		$check = true;
		break;
	}
	else
	{
		$check = false;
	}
}

if ($check == true)
{
	if ($gmail_id == "@gmail.com")
	{
		echo $gmail_id;
	}
	else
	{
		echo "not match";
	}
}
else
{
	echo "no";
}






?>