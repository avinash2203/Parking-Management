<?php
function abc()
{
echo "abc";
}

function efg()
{
echo "efg";
}
if(isset($_GET['action']))
{ 
	$actionName = $_GET['action'];
	$actionName();
}

?>