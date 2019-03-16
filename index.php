<form method="get" action="">
<input type="text" name="a">
<input type="submit" name="get">
</form>

<?php

if(isset($_GET['get']))
{
$inputstring = $_GET['a'];
$stringlength = strlen($inputstring);
    echo "input was: ".$inputstring."<br>";
$arr = str_split($inputstring);

$ini=$arr[0];
$count=1;
$output_string="";
if($stringlength>1)
{
for($i=1;$i<$stringlength;$i++)
{
    if($arr[$i]==$ini)
    {
    $count=$count+1;
    $ini=$arr[$i];
    }
    else
    {
    $output_string=$output_string.$ini."*".$count."*";
    $ini=$arr[$i];
    $count=1;
    }
    if($i==$stringlength-1)
    {
    $output_string=$output_string.$ini."*".$count;
    }
    
}
}
else
{
    $output_string=$output_string.$ini."*".$count;
}
echo "output is: ".$output_string;
}

?>
