<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function chart_morris()
    {
        return view('pages.chart-morris');
    }
    public function chart_flot()
    {
        return view('pages.chart-flot');
    }
    public function chart_chartjs()
    {
        return view('pages.chart-chartjs');
    }
    public function chart_spark_peity()
    {
        return view('pages.chart-spark-peity');
    }
    public function chart_echart()
    {
        return view('pages.chart-echart');
    }
}
