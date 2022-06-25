<?php
require '/usr/local/cpanel/php/cpanel.php';

class Account
{
    public static function name($cpanel)
    {
        return $cpanel->cpanelprint('$user');
    }
}


$cpanel = new CPANEL();
print $cpanel->header( "Fix Permissions" );
$accountName = Account::name($cpanel);
$path = '/home/' . $accountName;
$user = exec('whoami');
?>  

<link rel="stylesheet" type="text/css" href="assets/css/main.css" media="screen" />

<div class="container" style="width: auto">
        <div v-model=""></div>
        <div class="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
<li><a href="#" style="cursor:default;text-decoratio:none;">Fixing permissions for all subdomains and addons under account: <b><?php echo $accountName;?></b></a></li>                        
 </ul>
                </div>
            </nav>


<?php

//Store the output of the executed command in an array

exec('/usr/local/cpanel/base/frontend/paper_lantern/fix/./fixperms.sh -a $USER', $output, $status);


//Print all return values of the executed command as array

echo "<br/>";
echo "<pre>";
//Print the output of the executed command in each line

foreach($output as $value){
        echo $value."<br />";
}

//Print the return status of the executed command

echo "</pre>";
echo $cpanel->footer();
$cpanel->end();


