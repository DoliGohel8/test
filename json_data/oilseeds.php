<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#example_oil').DataTable();
	} );
</script>
<?php 
$str1 = file_get_contents('http://localhost/json_data/csvjson_oilseed.json');
$json = json_decode($str1, true);

?>
<table id="example_oil" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NAICS Code</th>
                <th>Country</th>
                <th>Year</th>
                <th>Domestic Exports, Total Trade</th>
                <th>Domestic Exports, Related Trade</th>
                <th>Domestic Exports, Non Related Trade</th>
                <th>Domestic Exports, Not Reported Trade</th>
                <th>Imports, Total Trade</th>
                <th>Imports, Related Trade</th>
                <th>Imports, Non Related Trade</th>
                <th>Imports, Not Reported Trade</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($json as $key => $value) {

        	//echo '<pre>';print_r($value); echo '<pre>'; ?>
            <tr>
                <td><?php echo $value['NAICS Code']; ?></td>
                <td><?php echo $value['Country']; ?></td>
                <td><?php echo $value['Year']; ?></td>
                <td><?php echo $value['Domestic Exports, Total Trade']; ?></td>
                <td><?php echo $value['Domestic Exports, Related Trade']; ?></td>
                <td><?php echo $value['Domestic Exports, Non Related Trade']; ?></td>
                <td><?php echo $value['Domestic Exports, Not Reported Trade']; ?></td>
                <td><?php echo $value['Imports, Total Trade']; ?></td>
                <td><?php echo $value['Imports, Related Trade']; ?></td>
                <td><?php echo $value['Imports, Non Related Trade']; ?></td>
                <td><?php echo $value['Imports, Not Reported Trade']; ?></td>
            </tr>
<?php } ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>NAICS Code</th>
                <th>Country</th>
                <th>Year</th>
                <th>Domestic Exports, Total Trade</th>
                <th>Domestic Exports, Related Trade</th>
                <th>Domestic Exports, Non Related Trade</th>
                <th>Domestic Exports, Not Reported Trade</th>
                <th>Imports, Total Trade</th>
                <th>Imports, Related Trade</th>
                <th>Imports, Non Related Trade</th>
                <th>Imports, Not Reported Trade</th>
            </tr>
        </tfoot>
    </table>