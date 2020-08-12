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
?>