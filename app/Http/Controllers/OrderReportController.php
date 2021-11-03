<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderReportController extends Controller
{
    public function index(Order $order, string $format = 'html')
    {
        if($format == 'pdf') {
            return $this->downloadReportPdf();
        }

        if($format == 'csv') {
            return $this->downloadReportCsv();
        }

        if($format == 'xls') {
            return $this->downloadReportXls();
        }

        if($format == 'html') {
            return view('orders.report', compact($order));
        }
    }

    private function downloadReportPdf()
    {
        // Реализация
    }

    private function downloadReportCsv()
    {
        // Реализация
    }

    private function downloadReportXls()
    {
        // Реализация
    }
}
