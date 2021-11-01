

<?php
$n = 8;
for ($i = 1; $i <= $n ; $i++)
{
    for ($j = 1; $j <= $n + 3; $j++)
    {
        echo($j);
        if ($i == $j)
        {
            echo("**");
            $j += 2;
        }
    }
    echo ' ';
}
?>


