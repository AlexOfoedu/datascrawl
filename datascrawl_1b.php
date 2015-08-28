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
            $seed = mt_rand(0, $chars);            

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
       
    $output .= "".$name."<br>";
    }

return $output;

}

echo randomNameGen(10, 10);

//scrawl(10);

$output = "";
?>
