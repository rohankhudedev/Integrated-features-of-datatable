<?php
/**
 * @author  Rohan Khude
 * @github  rohankhudedev
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datatable editor integrated functionalities</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- datatable-->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
        <!-- buttons -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css">
        <!-- select row -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.2/css/select.dataTables.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.2/css/select.bootstrap.min.css">
        <!-- editor -->
        <link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
        <!-- end datatable-->
    </head>
    <body>
        <?php
        $table_col = array( 'id', 'first_name', 'last_name', 'position', 'email', 'office', 'start_date', 'age', 'salary', 'seq', 'extn' );
        ?>
        <table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <?php
                    foreach( $table_col as $value ):
                        echo "<th>$value</th>";
                    endforeach;
                    ?>
                </tr>
            </thead>
        </table>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <!-- export buttons -->
        <script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <!--    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>-->
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!--<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>-->
        <!--<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>-->
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
        <script src="//cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
        <script src="dataTables.editor.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
        <!-- end of export buttons -->
        <script>
            $( document ).ready( function() {
                columns = [ 'id', 'first_name', 'last_name', 'position', 'email', 'office', 'start_date', 'age', 'salary', 'seq', 'extn' ];
                i = 0;
                var editor; // use a global for the submit and return data rendering in the examples
                editor = new $.fn.dataTable.Editor( {
                    ajax: "process.php",
                    table: "#table",
                    fields: [ {
                            label: columns[i],
                            name: columns[i++],
                            type: "readonly"
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        },
                        {
                            label: columns[i],
                            name: columns[i++]
                        }
                    ]
                } );
                i = 0;
                var table = $( '#table' ).DataTable( {
                    dom: "Bfrtip",
                    ajax: "process.php",
                    columns: [
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] },
                        { data: columns[i++] }
                    ],
                    select: true,
                    buttons: [
                        {
                            text: 'Export All',
                            action: function( e, dt, node, config ) {
                                window.location = "download-report.php";
                            }
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy Selected Rows',
                            header: false,
                            exportOptions: {
                                modifier: {
                                    selected: true
                                },
                                orthogonal: 'selected_copy'
                            }
                        },
                        'copy', 'pdf', 'csv', 'excel', 'print', 'selectAll', 'selectNone', 'colvis',
                        { extend: "editSingle", editor: editor },
                        { extend: "remove", editor: editor }
                    ],
                    columnDefs: [
                        {
                            targets: [ 0, 5, 10 ], //starts from 0
                            visible: false,
                            render: function( data, type, full, meta ) {
                                if( type === 'selected_copy' )
                                {
                                    var api = new $.fn.dataTable.Api( meta.settings );
                                    data = $( api.column( meta.col ).header() ).text() + ": " + data;
                                }
                                return data;
                            }
                        }
                    ],
                    processing: true
                } );
            } );
        </script>
    </body>
</html>