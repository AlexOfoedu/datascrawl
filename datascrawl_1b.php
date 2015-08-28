<?php

function scrawl($loops)
{
    
$numOfLoops = $loops;

    for ($i=0;$i<$numOfLoops;$i++)
    {
        
        
        
        echo "Loopy-loop! ".$i."<br>";
    }

}

function randomNameGen($loops, $chars)
{

$output = "";

    for ($i=0;$i<$loops;$i++)
    {
       $name = "";

        for ($j=0;$j<$chars;$j++)
        {
            $seed = mt_rand(0, 25);

            switch ($seed)
            {
            
            case 0:
                $name .= "a";
                break;
            case 1:
                $name .= "b";
                break;
            case 2:
                $name .= "c";
                break;
            case 3:
                $name .= "d";
                break;
            case 4:
                $name .= "e";
                break;
            case 5:
                $name .= "f";
                break;
            case 6:
                $name .= "g";
                break;
            case 7:
                $name .= "h";
                break;
            case 8:
                $name .= "i";
                break;
            case 9:
                $name .= "j";
                break;
            case 10:
                $name .= "k";
                break;
            case 11:
                $name .= "l";
                break;
            case 12:
                $name .= "m";
                break;
            case 13:
                $name .= "n";
                break;
            case 14:
                $name .= "o";
                break;
            case 15:
                $name .= "p";
                break;
            case 16:
                $name .= "q";
                break;
            case 17:
                $name .= "r";
                break;
            case 18:
                $name .= "s";
                break;
            case 19:
                $name .= "t";
                break;
            case 20:
                $name .= "u";
                break;
            case 21:
                $name .= "v";
                break;
            case 22:
                $name .= "w";
                break;
            case 23:
                $name .= "x";
                break;
            case 24:
                $name .= "y";
                break;
            case 25:
                $name .= "z";
                break;
            default:
                $name .= "a";
                break;
            }

        }
       
    $output .= "".$name;
    }

return $output;

}

function emailGen($loops, $ataddress)
{
    $output = "";

    for ($i=0;$i<$loops;$i++)
    {
        $email = "".randomNameGen(1, mt_rand(2, 20)).".".randomNameGen(1, mt_rand(2, 20));
        switch ($ataddress)
        {
            case 0:
                $email .= "@test.com";
                break;
            case 1:
                $email .= "@example.com";
                break;
            case 2:
                $email .= "@myemail.net";
                break;
            case 3:
                $email .= "@mailbyte.net";
                break;
            default:
                $email .= "@test.com";
        }

        $output = "".$email;
    }

    return $output;
}

echo emailGen(10, mt_rand(0, 3));

//scrawl(10);

$output = "";
?>
