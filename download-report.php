<?php
ini_set('memory_limit', '256M');
require("../includes/DB.php");
$db     = new DB();
$r      = $db->getRows('form_register', array( 'select' => 'full_name, dob, email_id, mobile_no, landline_no, college_name, college_category, college_address, state, city, pincode, course, year, branch, are_you_going, back_to_campus_date, tot_work_exp, verification_status, test_link_status, test_link, created', 'return_type' => 'single' ));
$fields = array_keys($r);
$header = $data   = "";
$sep    = "\t";
for( $i = 0; $i < count($fields); $i++ )
{
    $header .= ucwords(str_replace('_', ' ', $fields[$i])) . $sep;
}
$rec = $db->getRows('form_register', array( 'select' => 'full_name, dob, email_id, mobile_no, landline_no, college_name, college_category, college_address, state, city, pincode, course, year, branch, are_you_going, back_to_campus_date, tot_work_exp, verification_status, test_link_status, test_link, created' ));
foreach( $rec as $row )
{
    $line = '';
    for( $j = 0; $j < count($fields); $j++ )
    {
        if( !isset($row[$j]) )
            $line .= "NULL" . $sep;
        elseif( $row[$j] != "" )
            $line .= "$row[$j]" . $sep;
        else
            $line .= "" . $sep;
    }
    $line = str_replace($sep . "$", "", $line);
    $line = preg_replace("/\r\n|\n\r|\n|\r/", " ", $line);
    $line .= $sep;
    $data .= trim($line) . "\n";
}

$data = str_replace("\r", "", $data);

if( $data == "" )
{
    $data = "\n No Record Found!\n";
}

header("Content-type: application/xls");
header("Content-Disposition: attachment;filename = reports.xls");
header("Pragma: no-cache");
header("Expires: 0");
print $header;
print "\n";
print $data;
?>