<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Csvcontroller extends Controller
{
    public function main(Request $request)
    {   
        
        $row_counter = 0;
        define("first_row","TargetIp,ConfigFile,ConfigPara,ConfigPara,ConfigPara,MACAddress,changDeviceInfo,DeviceName,DeviceGroup,CLIScript,changSnmpPara,SnmpParaVersion,SnmpParaSecurityUser,SnmpParaSecuMode,SnmpParaAuthScheme,SnmpParaAuthPassword,SnmpParaPrivScheme,SnmpParaPrivPassword,PingDevType,changeSsh,SshParaPort,SshParaUserName,SshParaPassword,SshParaRetries,SshParaTimeOut,LoginType");
        define("iphelp","77");
        define("ipgate","78");
        define("defaluthelp",",DEFAULT_GW_VLAN90:");
        define("vlanhelp", ",IP_VLAN90:");
        define("lasthelp","\snmpv3.cfg,1,3,pepco,3,2,be\$tHippo73,2,be\$tHippo73,1,1,22,pepco,be\$tHippo73,3,20,2");

        function Checkifexist()
        {
            $row_count = 0;
            if(empty($_POST["number0"]) && empty($_POST["country0"]) && empty($_POST["mac0"]) && empty($_POST["ip0"]) && empty($_POST["poscount0"]))
            {
                $f = fopen('php://memory', 'w'); 
                header('Content-Type: application/csv');
                
                setcookie('debil1',$row_count,time() + (86400 * 30));
                if(isset($_COOKIE['debil1']) && !isset($_COOKIE['debil2']))
                {
                    header('Content-Disposition: attachment; filename="Może byś tak nie ściągał pustych plików co.ZobaczKotkuComamwSrodku"');
                    setcookie('debil2',$row_count,time() + (86400 * 30));
                    unset($_COOKIE['debil1']);
                    
                }
                else if(isset($_COOKIE['debil2']) && !isset($_COOKIE['debil3']))
                {
                    header('Content-Disposition: attachment; filename="Widzę że nie dociera... .LepiejNiePatrzCoMamWsrodku"');
                    setcookie('debil3',$row_count,time() + (86400 * 30));
                    unset($_COOKIE['debil2']);
                }
                else if(isset($_COOKIE['debil3']) && !isset($_COOKIE['debil4']))
                {
                    header('Content-Disposition: attachment; filename="Ty to chyba lubisz.... .WsumieJakChcesz"');
                    setcookie('debil4',$row_count,time() + (86400 * 30));
                    unset($_COOKIE['debil3']);
                }
                else if(isset($_COOKIE['debil4']))
                {
                    header('Content-Disposition: attachment; filename="Ściągaj do woli! .ptsd"');
                    unset($_COOKIE['debil4']);
                }
                else
                {
                    header('Content-Disposition: attachment; filename="Brawo ściągnąłeś pusty plik .jd"');
                }
                fpassthru($f);  
                exit();
            }
            
            for($i = 0; $i < 30;)
            {
                if(isset($_POST["number$i"]) && isset($_POST["country$i"]) && isset($_POST["mac$i"]) && isset($_POST["ip$i"]) && isset($_POST["poscount$i"]))
                {
                    $row_count++;
                }
                $i++;
            }
            return $row_count;
        }

        function Make_csv($row_counter, $row_count)
        {
            $shop = $country = $mac = $ip = $pos = array();

            for ($i = 0; $i < $row_count;) 
            {
                if(!empty($_POST["number$i"]) && !empty($_POST["country$i"]) && !empty($_POST["mac$i"]) && !empty($_POST["ip$i"]) && !empty($_POST["poscount$i"]))
                {
                    $row_counter++;
                    
                }
                

                $shop[$i] = $_POST["number$i"];
                $country[$i] = $_POST["country$i"];
                $mac[$i] = $_POST["mac$i"];
                $ip[$i] = $_POST["ip$i"];
                $pos[$i] = $_POST["poscount$i"];

                $i++;

            }

            for($i = 0; $i < $row_counter;)
            {
            
                $ipgateway[$i] = $ip[$i].ipgate;

                if($country[$i] == "ES")
                {
                    $pos_output[$i] = ",Shops_".$country[$i]."\shop_DUALPOS_".$country[$i].".cfg,hostname:";
                }
                else if($country[$i] = "SK")
                {
                    $pos_output[$i] = ",Shops_".$country[$i]."\shop_".$pos[$i]."_cash_fiscalprinter.cfg,hostname:";
                }
                else 
                {
                    $pos_output[$i] = ",Shops_".$country[$i]."\shop_".$pos[$i]."_cash.cfg,hostname:";
                }

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
        }
        
        
        
        $row_count = Checkifexist();
        Make_csv($row_counter, $row_count);    
        
    }
    
}

