<?php
	$messaggio="L'utente " . $_POST['name'] . " " . $_POST['cognome'] . " (a cui puoi rispondere a: " . $_POST['email'] .  " o chiamare al " . $_POST['telefono'] .  "), chiede la seguente informazione: \n" . $_POST['comments'] . " ";
	mail( "angeloros096@gmail.com", "Email inviata da: " . $_POST['email'], $messaggio );

?>

<!DOCTYPE html>
<html>
	<body>
		<script language="javascript">window.close();</script>
	</body>
</html>
