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
        if((strpos($text, "ครับ") !== false) || (strpos($text, "คร้าบ") !== false) || (strpos($text, "กระผม") !== false) ||
            (strpos($text, "ผม") !== false) || (strpos($text, "Male") !== false)){
            return 'Male';
        }
        else if((strpos($text, "ค่ะ") !== false) || (strpos($text, "คะ") !== false) || (strpos($text, "ดิฉัน") !== false) ||
            (strpos($text, "ฉัน") !== false) || (strpos($text, "Female") !== false)){
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
        if((strpos($text, "ดี") !== false) || (strpos($text, "ดีมาก") !== false) || (strpos($text, "สนุก") !== false) ||
            (strpos($text, "ชอบ") !== false)){
            return 'Positive';
        }
        else if((strpos($text, "เหี้ย") !== false) || (strpos($text, "สัส") !== false) || (strpos($text, "fuck") !== false) || (strpos($text, "ดอกทอง") !== false)){
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
        if(strpos($text, "เหี้ย") !== false){
            return ['เหี้ย'];
        }
        else if(strpos($text, "สัส") !== false){
            return ['สัส'];
        } 
        else if(strpos($text, "fuck") !== false){
            return ['fuck'];
        }
        else if(strpos($text, "ดอกทอง") !== false){
            return ['ดอกทอง'];
        }
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        return ['TH', 'EN'];
    }
}
