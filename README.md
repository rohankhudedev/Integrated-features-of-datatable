# Get Started

> In this repository, You will get all basic required features integrated of Editor Datatable, like:

* Export Button Collection : Copy, CSV, Excel, Print, PDF
* Editor Buttons : New, Edit(single edit), Delete
* Select Buttons : Copy selected rows, Select all, Deselect all
* Column visibility button
* Server side processing
* Pagination
* Multi column filtering
* Responsive table
* Fixed header
* Shortcut Key activation

### Shortcut keys

* ctrl+a - Select all
* ctrl+c - Copy selected rows
* ctrl+x - Edit selected row
* ctrl+c - Delete selected rows

Other shortcuts you can define, by using above sample snippets.

# Installation

1. Please see http://editor.datatables.net for details on how to purchase an Editor license or download a trial version of Editor from https://editor.datatables.net/download

2. Extract the downloaded file `.zip` to your `htdocs/` or `www/`

3. We need folder `php/` fully, `examples/sql/mysql.sql` file and `js/dataTables.editor.min.js` file from from extracted package.

4. Create the database say name as `datatable` and import `mysql.sql`

5. Paste `dataTables.editor.min.js` in root of your project directory. For all other CSS and JS files in this repository is imported using CDN.

6. Rename `php/` to `plugin/` (for our convenience)

7. For configuration of database settings open `php/config.php`. Your configuration will look like this :

```php
$sql_details = array(
	"type" => "Mysql",   // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => "root",        // Database user name
	"pass" => "",        // Database password
	"host" => "localhost",        // Database host
	"port" => "",        // Database connection port (can be left empty for default)
	"db"   => "datatable",        // Database name
	"dsn"  => "",        // PHP DSN extra information. Set as `charset=utf8` if you are using MySQL
	"pdoAttr" => array() // PHP PDO attributes array. See the PHP documentation for all options
);
```

8. Done. Enjoy!!!

### Output

![Output of Integrated Features of Editor Datatable](https://i.imgur.com/QiKweL9.png)

To build this, i have used datable jQuery Javascript library. source : [editor.datatables](https://editor.datatables.net/)
