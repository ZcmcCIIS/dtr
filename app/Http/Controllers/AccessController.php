<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TADPHP\TADFactory;
use TADPHP\TAD;

class AccessController extends Controller
{
    public function testAccess()
    {

        /* 
            Make sure IP is unique

            IP and Gateway settings to the machine should be the same
        */

        $options = [
            'ip' => '192.168.0.177',   // 
            'internal_id' => 100,
            'com_key' => 123,
            'description' => 'TAD1',
            'soap_port' => 80,
            'udp_port' => 4370,
            'encoding' => 'utf-8'
        ];

        $tad_factory = new TADFactory($options);
        $tad = $tad_factory->get_instance();


        $logs = $tad->get_att_log();
        $commands_list = TAD::commands_available();
        $soap_commands =   TAD::soap_commands_available();
        dd($logs);
    }
}
