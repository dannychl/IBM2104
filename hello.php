<?php 

if(isset("submitted"))
{
	if(empty($_POST(num)))
	{
	echo"hello";
	}
	else
	{
	echo"no";
	}
}
else

echo" <form action=\"$_SERVER[\"PHP_SELF\"]\" method=\"post\">
Num
<input type=\"text\" name=\"num\"/>
<input type=\"submit\" />

<input type=\"hidden\" name=\"submitted\" value=\"true\"/>
</form>
";
?>