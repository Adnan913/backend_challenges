<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\GroupByOwnersController;

class GroupByOwnersControllerTest extends TestCase
{

    /** @test */
    public function group_by_owners(): void
    {
        $groupByOwnersController = new GroupByOwnersController();

        $files = [
            "insurance.txt" => "Company A",
            "letter.docx" => "Company A",
            "Contract.docx" => "Company B"
        ];

        $expectedResult = [
            "Company A" => ["insurance.txt", "letter.docx"],
            "Company B" => ["Contract.docx"]
        ];

        $result = $groupByOwnersController->getGroupByOwners($files);

        $this->assertEquals($expectedResult, $result);
    }




    /**
     * A basic unit test example.
     */
    // public function test_example(): void
    // {
    //     // $this->assertTrue(true);
        
    // }
}
