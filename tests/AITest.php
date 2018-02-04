<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender1('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender4('สวัสดีคะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::Sentiment1('สะบายดีไหม');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::Sentiment2('ทำดีมากๆ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::Sentiment3('ไปสนุกเปล่า');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

 	public function testSentiment_Negative(): void
    {
        $result = AI::Sentiment4('โธ่ไอสัส');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Negative(): void
    {
        $result = AI::Sentiment5('ว่าไงคุณดอกทอง');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords_เหี้ย(): void
    {
        $result = AI::Sentiment6('ไอเหี้ยเอ้ย');
        $expected_result = 'เหี้ย';
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords_fuck(): void
    {
        $result = AI::Sentiment7('fuckyou');
        $expected_result = 'fuck';
        $this->assertEquals($expected_result, $result);
    }





}