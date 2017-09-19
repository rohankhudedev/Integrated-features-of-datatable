<?php
/**
 * @author  Rohan Khude
 * @github  rohankhudedev
 * 
 */
// DataTables PHP library
include( "plugin/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;
 
$tableName = 'datatables_demo';//or staff
$table_col = array( 'id', 'first_name', 'last_name', 'position', 'email', 'office', 'start_date', 'age', 'salary', 'seq', 'extn' );//column names
$i=0;
$editor = Editor::inst( $db, $tableName )
    ->fields(
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++]),
        Field::inst( $table_col[$i++] ),
        Field::inst( $table_col[$i++] )
            //->validator( 'Validate::notEmpty' ),
            //		Field::inst( 'age' )
//			->validator( 'Validate::numeric' )
//			->setFormatter( 'Format::ifEmpty', null ),
//		Field::inst( 'salary' )
//			->validator( 'Validate::numeric' )
//			->setFormatter( 'Format::ifEmpty', null ),
//		Field::inst( 'start_date' )
//			->validator( 'Validate::dateFormat', array(
//				"format"  => Format::DATE_ISO_8601,
//				"message" => "Please enter a date in the format yyyy-mm-dd"
//			) )
//			->getFormatter( 'Format::date_sql_to_format', Format::DATE_ISO_8601 )
//			->setFormatter( 'Format::date_format_to_sql', Format::DATE_ISO_8601 )
    )
    ->process( $_POST )
    ->json();