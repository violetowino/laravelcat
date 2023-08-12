<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function ChartAnalysis(){

        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                ->whereYear('created_at', date('Y'))
                ->groupBy('month')
                ->orderBy('month')
                ->get();

        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#8BC34A', '#FF5722', '#009688', 
                    '#795548', '#9C27B0', '#2196F3', '#FF9800', '#CDDC39', '#607D8B'];

        for ($i=1; $i < 12 ; $i++) { 
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;

            foreach($users as $user){
                if ($user->month == $i) {
                    $count = $user->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' => 'Users',
                'data' => $data,
                'backgroundColor' => $colors
            ]
            ];

        return view('charts.bar_graph', compact('datasets','labels'));
    }
}
