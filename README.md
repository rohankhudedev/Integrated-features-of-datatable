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

2. Extract the downloaded file `.zip` to your `htdocs/` or `www/`

3. We need folder `php/` fully and `mysql.sql` file from `examples/sql/` from extracted package.

4. Create the database say `datatable` and import `mysql.sql`

5. Rename `php/` to `plugin/` (for our convenience)

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

7. Download required `dataTables.editor.min.js` file from [editor.datatables](https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js) and save it in root of your project directory. All other CSS and JS files in this repository is imported using CDN. But `dataTables.editor.min.js` file must be included locally.

8. Done. Enjoy!!!

** Output **

![Output of Integrated Features of Datatable](https://www.dropbox.com/s/fmu9y043lpqauw0/Integrated-features-of-datatable.png?dl=0)

To build this, i have used datable jQuery Javascript library. *[datatable.net](https://datatables.net/) and *[editor.datatables](https://editor.datatables.net/)
