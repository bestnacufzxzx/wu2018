<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender1(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
    
     public function testGender2(): void
    {
        $result = AI::getGender('สวัสดีคราบ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }


    public function testGender3(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender4(): void
    {
        $result = AI::getGender('สวัสดีคะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment1(): void
    {
        $result = AI::Sentiment('สะบายดีไหม');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment2(): void
    {
        $result = AI::Sentiment('ทำดีมากๆ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment3(): void
    {
        $result = AI::Sentiment('ไปสนุกเปล่า');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

 	public function testSentiment4(): void
    {
        $result = AI::Sentiment('โธ่ไอสัส');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment5(): void
    {
        $result = AI::Sentiment('ว่าไงคุณดอกทอง');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords1(): void
    {
        $result = AI::Sentiment('ไอเหี้ยเอ้ย');
        $expected_result = 'เหี้ย';
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords2(): void
    {
        $result = AI::Sentiment('fuckyou');
        $expected_result = 'fuck';
        $this->assertEquals($expected_result, $result);
    }





}