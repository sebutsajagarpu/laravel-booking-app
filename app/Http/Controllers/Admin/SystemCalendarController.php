<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\jadwal;
use App\Models\mobil;
use App\Models\supir;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => jadwal::class,
            'date_field' => 'berangkat',
            'date_field_to' => 'pulang',
            'field'      => 'nama',
            'coba'      => 'mobil',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.bookings.show',
        ],
    ];

    public function index(Request $request)
    {
        $bookings = [];
        $rooms = mobil::all()->pluck('model', 'id');
        $customers = supir::all()->pluck('nama', 'id');

        $input_array = array("purple", "red", "yellow", "blue", "green"); 
        $rand_keys = array_rand($input_array , 2);
        $test = $input_array[$rand_keys[0]];

        foreach ($this->sources as $source) {
            $models = $source['model']::when($request->input('customer_id'), function ($query) use ($request) {
                    $query->where('nama', $request->input('customer_id'));
                })
                ->get();
            foreach ($models as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                $crudFieldValueTo = $model->getOriginal($source['date_field_to']);

                if (!$crudFieldValue && $crudFieldValueTo) {
                    continue;
                }
                
                $bookings[] = [
                    'title' => trim($source['prefix'] . " " . $model->{$source['field']}. " || " . $model->{$source['coba']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'end' => $crudFieldValueTo,
                    'color' => '',
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }
        
        return view('admin.calendar.calendar', compact('bookings', 'rooms', 'customers'));

    }

}
