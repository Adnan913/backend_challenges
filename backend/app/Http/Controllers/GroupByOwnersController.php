<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupByOwnersController extends Controller
{
    public function getGroupByOwners($files)
    {
        $result = [];

        foreach ($files as $file => $owner) {
            $result[$owner][] = $file;
        }

        return $result;
    }

    public function getOwners()
    {
        $ownerArry = [
            "insurance.txt" => "Company A",
            "letter.docx"   => "Company A",
            "Contract.docx" => "CompanyB"
        ];
        return $this->getGroupByOwners($ownerArry);   
    }
}
