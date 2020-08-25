<?php 

if(!function_exists('limitWordByText'))
{

function limitWordByText($text, $limit = 100)
    {
        $words = explode(' ',$text);
        
        $compactText = '';

        if( count($words) > $limit)
        {
            $count = 0;
            foreach($words as $word):
                
                if($count >= $limit)
                {
                    break;
                }

                $compactText = $compactText.' '.$word;
            
            $count++;
            endforeach;

            return $compactText;
        }

        return $text;
    }

}

if(!function_exists('countWords')){

    function countWords($text)
    {   
        $words = explode(' ',$text);
        return count($words);
    }
}

if(!function_exists('calculateTime')) {
function calculateTime($text, $timeReadWord = 2)
    {
        $qtdWords = countWords($text);
        
        
        $totalTimeInSeconds = $qtdWords * $timeReadWord;

        if($totalTimeInSeconds > 60)
        {
            $convertInMinutes = round($totalTimeInSeconds / 60);

            return $convertInMinutes.' minutos ';
        }

        return $totalTimeInSeconds.' segundos';
 
    } 

}

?>