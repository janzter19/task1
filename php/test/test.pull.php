<?php

$jsonFile = '../../accounts.json';

$jsonString = json_decode(file_get_contents($jsonFile), true);

foreach ($jsonString['data'] as $dataKey => $dataValue) {	
	?>
	<div class="card">		
		<div class="container">
			<h4><b><?php echo $dataValue['Name'];?></b></h4>			
			<p>
				<?php echo $dataValue['Email'];?>
				<br />
				<?php echo $dataValue['Short Bio'];?>
			</p>
		</div>
	</div>
	<?php
}
?>