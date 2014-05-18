<?php

include_once('_includes.php');

function ShowPlayground($id)
{

	$venue = list_venue_by_id($id);
	
	if(empty($venue))
	{
	 echo '<div class="box_div fat_centred_div"><div class="search_box_body_div"><span class="error_span">No results obtained please modify your search query</span></div></div>';
	 return;
	}
?>

	<div class='box_div fat_centred_div'>
	<div class='search_box_body_div '>
		<h2><?php echo $venue['Venue_name'].','.$venue['Venue_playground_name'] ?></h2>
		<hr/>
		<table>
			<tr>
			<td><b>Address : </b></td><td><?php echo $venue['Venue_location'].','.$venue['Venue_playground_address'] ?></td>
			</tr>
			<tr>
			<td><b>Time slots : </b></td><td><?php echo $venue['Venue_time_slots'] ?></td>
			</tr>
			<tr>
			<td><b>Rate : </b></td><td><?php echo $venue['Venue_rate_per_time_slot'] ?> per slot</td>
			</tr>
			<tr>
			<td><b>Contact Number: </b></td><td><?php echo $venue['Venue_contact_number'] ?></td>
			</tr>
		</table>
		<hr/>
		
		<p class='blue_p bold_p'>About:</p>
				
		<p class='blue_p bold_p'>Venue Images</p>
		
		<br/>
		<br/>
		<a href=''>Read Reviews</a> 
	</div>	
	</div>
	
<?php
}

?>