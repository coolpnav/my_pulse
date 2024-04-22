<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    public function index()
    {
        // Sample chart data
        $chartData = [
            'labels' => ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            'data' => [250, 230, 150, 100, 200, 210, 120],
        ];

        return response()->json($chartData);
    }
    public function data1()
    {
        // Sample chart data
        $chartData = [
            'labels' => ['15 April', '', '', '', '', '', '21 April'],
            'data' => [250, 230, 150, 100, 200, 210, 120],
        ];

        return response()->json($chartData);
    }
    public function data2()
    {
        // Sample chart data
        $chartData = [
            'labels' => ['15 April', '', '', '', '', '', '21 April'],
            'data' => [250, 230, 150, 100, 200, 210, 120],
        ];

        return response()->json($chartData);
    }
    public function data3()
    {
        // Sample chart data
        $chartData = [
            'labels' => ['15 April', '', '', '', '', '', '21 April'],
            'data' => [250, 230, 150, 100, 200, 210, 120],
        ];

        return response()->json($chartData);
    }
}
