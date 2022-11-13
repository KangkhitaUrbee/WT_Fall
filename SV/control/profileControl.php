<?php

$snames=$cs=$ps=$names=$emails=$contacts=$passs=$errorFile=$addresss=$error=$errorPrf=$errorGender=$object="";
$cosnt=0;

if(!empty($_SESSION["sname"])) 
{ 
$snames=$_SESSION["sname"];

$passs=$_SESSION["password"];
}

if (!empty($snames) && !empty($passs))
{
    
$data = file_get_contents("../data/data.json");
    $data = json_decode($data);
  

    foreach($data as $object)
    {
        $cosnt++;
    }

    for($i=0;$i<$cosnt;$i++)
    {
        if( $data[$i]->sname==$snames && $data[$i]->Password==$passs) 
        {
            $names=$data[$i]->Name;
            $snames=$data[$i]->sname;
            $emails=$data[$i]->Email;
            $contacts=$data[$i]->Phone;
            $passs=$data[$i]->Password;
            $addresss=$data[$i]->Address;
            $gender=$data[$i]->Gender;
        }
    }
}

?>