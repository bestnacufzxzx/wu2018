<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        if((strpos($text, "ครับ") !== false) || 
            (strpos($text, "คร้าบ") !== false) || 
            (strpos($text, "กระผม") !== false) ||
            (strpos($text, "ผม") !== false) || 
            (strpos($text, "Male") !== false)){
            return 'Male';
        }
        else if((strpos($text, "ค่ะ") !== false) || 
            (strpos($text, "คะ") !== false) || 
            (strpos($text, "ดิฉัน") !== false) ||
            (strpos($text, "ฉัน") !== false) || 
            (strpos($text, "Female") !== false)){
            return 'Female';
        }
        else
            return 'Unknown';
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        if((strpos($text, "ดี") !== false) || 
            (strpos($text, "ดีมาก") !== false) ||
            (strpos($text, "สนุก") !== false) || 
            (strpos($text, "ชอบ") !== false) ||
            (strpos($test,"น่ารักจัง") !== false) ||
            (strpos($test,"ดูดีมาก")!==false) ||
            (strpos($test,"ดูดีมากเลย")!==false)){
            return 'Positive';
        }
        else if((strpos($text, "เหี้ย") !== false) ||
                 (strpos($text, "สัส") !== false) || 
                 (strpos($text, "fuck") !== false) ||
                 (strpos($text, "ดอกทอง") !== false) ||
                 (strpos($test, "ไปตายซ่ะ") !== false)){
            return 'Negative';
        }
        else
            return 'Neutral';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $rude= array();
        if (strpos($text, 'fuck') !== false)
            array_push($rude,'fuck');
        if (strpos($text, 'เหี้ย') !== false)
            array_push($rude,'เหี้ย');
        if (strpos($text, ' สัส') !== false)
            array_push($rude,'สัส');
        if (strpos($text, 'ดอกทอง') !== false)
            array_push($rude,'ดอกทอง');
        if (strpos($test,'ไปตายซ่ะ') !== false)
            array_push($rude,'ไปตายซ่ะ');
        return (sizeof($rude)==0)?['Positive']:$rude;
       
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        if(preg_replace('/[^ก-๛]/u','',$text)){
            if(preg_replace('/[^a-z]/u','',$text)){
                return ['TH', 'EN'];
            }else{
                return ['TH'];
            }
        }
        if(preg_replace('/[^a-z]/u','',$text)){
            if(preg_replace('/[^ก-๛]/u','',$text)){
                return ['TH', 'EN'];
            }else{
                return ['EN'];
            }
        }
    }
}
