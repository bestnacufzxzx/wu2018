<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male1(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
    
     public function testGender_Male2(): void
    {
        $result = AI::getGender('สวัสดีคราบ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }


    public function testGender_Female3(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Female4(): void
    {
        $result = AI::getGender('สวัสดีคะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive1(): void
    {
        $result = AI::getSentiment('สะบายดีไหม');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive2(): void
    {
        $result = AI::getSentiment('ทำดีมากๆ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive3(): void
    {
        $result = AI::getSentiment('ไปสนุกเปล่า');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

 	public function testSentiment_Negative4(): void
    {
        $result = AI::getSentiment('โธ่ไอสัส');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Negative5(): void
    {
        $result = AI::getSentiment('ว่าไงคุณดอกทอง');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords_fuck6(): void
    {
        $result = AI::getRudeWords('ไอเหี้ยเอ้ย');
        $expected_result = ['เหี้ย'];
        $this->assertEquals($expected_result, $result);
    }

     public function testRudeWords_fuck7(): void
    {
        $result = AI::getRudeWords('fuckyou');
        $expected_result = ['fuck'];
        $this->assertEquals($expected_result, $result);
    }





}