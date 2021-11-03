<?php

namespace App\Utilities\Reports;

interface ReportContract
{
    public function getData();

    public function download();
}