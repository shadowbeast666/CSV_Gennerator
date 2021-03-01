<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Csvcontroller extends Controller
{
    public function main(Request $request){

        $shop = [];
        $country = [];
        $mac = [];
        $ip = [];
        $pos = [];
        $max = 0;
        define("first_row","TargetIp,ConfigFile,ConfigPara,ConfigPara,ConfigPara,MACAddress,changDeviceInfo,DeviceName,DeviceGroup,CLIScript,changSnmpPara,SnmpParaVersion,SnmpParaSecurityUser,SnmpParaSecuMode,SnmpParaAuthScheme,SnmpParaAuthPassword,SnmpParaPrivScheme,SnmpParaPrivPassword,PingDevType,changeSsh,SshParaPort,SshParaUserName,SshParaPassword,SshParaRetries,SshParaTimeOut,LoginType");
        define("iphelp","77");
        define("ipgate","78");
        define("defaluthelp",",DEFAULT_GW_VLAN90:");
        define("vlanhelp", ",IP_VLAN90:");
        define("lasthelp","\snmpv3.cfg,1,3,pepco,3,2,be\$tHippo73,2,be\$tHippo73,1,1,22,pepco,be\$tHippo73,3,20,2");
        $row_counter = 0;
        for ($i = 0; $i <= 6;) {
            $shop[$i] = $_POST["number$i"];
            $country[$i] = $_POST["country$i"];
            $mac[$i] = $_POST["mac$i"];
            $ip[$i] = $_POST["ip$i"];
            $pos[$i] = $_POST["poscount$i"];
            $i++;
        }
        
        for ($i = 0; $i <= 6;) {

            if(strlen($pos[$i]) != 0)
            {
                $row_counter = $row_counter + 1;
                
            }
            $i++;
        }
           
      
        for($i = 0; $i < $row_counter;){
            
            $ipgateway[$i] = $ip[$i].ipgate;

            $pos_output[$i] = ",Shops_".$country[$i]."\shop_".$pos[$i]."_cash.cfg,hostname:";

            $defalut_gw[$i] = defaluthelp.$ip[$i].iphelp;

            $iphelp = $ip[$i].iphelp;

            $vlan_output[$i] = vlanhelp.$ipgateway[$i].",";

            $last_output = ",Shops ".$country[$i].",Shops_".$country[$i].lasthelp;

            $string = $mac[$i];
            $mac_output[$i] = implode("-", str_split($string, 2));
        
            $dot = ",1,";

            $hostname[$i] = "SW".$shop[$i];

            $final_output[$i] = $ipgateway[$i].$pos_output[$i].$hostname[$i].$defalut_gw[$i].$vlan_output[$i].$mac_output[$i].$dot.$hostname[$i].$last_output.PHP_EOL;
            
           $i++;
        }
        
        //$final_output[0] = "TargetIp,ConfigFile,ConfigPara,ConfigPara,ConfigPara,MACAddress,changDeviceInfo,DeviceName,DeviceGroup,CLIScript,changSnmpPara,SnmpParaVersion,SnmpParaSecurityUser,SnmpParaSecuMode,SnmpParaAuthScheme,SnmpParaAuthPassword,SnmpParaPrivScheme,SnmpParaPrivPassword,PingDevType,changeSsh,SshParaPort,SshParaUserName,SshParaPassword,SshParaRetries,SshParaTimeOut,LoginType";

            $f = fopen('php://memory', 'w'); 
            echo first_row.PHP_EOL;

            for($i = 0; $i < $row_counter;){

                echo $final_output[$i];
                fwrite($f, $final_output[$i]);
                
                $i++;
            }

            $current_date = date("M-d");

        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="Vernity_'.$current_date.'_deploy.csv"');
        fpassthru($f);
        
        

        /*
        while($shop[$max] =! empty($shop[$max]))
        {
            $max = $max++;

        }
        */
      /*  
        foreach($final_output as $line[]){
            fputcsv($f, $line);
        }

            */

        
    }
}
