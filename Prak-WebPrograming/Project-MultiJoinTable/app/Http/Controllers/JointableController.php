<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pulau;

class JointableController extends Controller
{
    function index()
    {
    	$data = Pulau::join('provinsi', 'provinsi.kode_pulau', '=', 'pulau.kode_pulau')
              		->join('kota', 'kota.kode_provinsi', '=', 'provinsi.kode_provinsi')
              		->get(['pulau.nama_pulau', 'provinsi.nama_provinsi', 'kota.nama_kota']);

       	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('join_table', compact('data'));
    }
}
