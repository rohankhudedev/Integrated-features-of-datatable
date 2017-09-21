# Get Started

> In this repository, You will get all basic required features integrated of datatable and editor-datatable, like:

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

1. Download PHP package of Editor from [editor.datatables](https://editor.datatables.net/)

2. Extract the downloaded file `.zip` file

3. We need `php/` full folder from it and `mysql.sql` file from `examples/sql/`

4. create the database say `datatable` and import `mysql.sql`

5. I also renamed `php/` to `plugin/` ( for convenience)

6. For configuration of database settings goto php/->config.php. Your configuration will look like this :

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

7. Done.

To build this, i have used datable jQuery Javascript library. *[datatable.net](https://datatables.net/) and *[editor.datatables](https://editor.datatables.net/).
