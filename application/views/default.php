<?php
	$this->load->view('themes/bootswatch/header',$data);
	foreach($query as $customer)
	{
	    //var_dump($customer);
	    echo '<code>' . $customer['FirstName'] . '</code>';
	    
	}
	$this->load->view('themes/bootswatch/footer',$data);
?>
