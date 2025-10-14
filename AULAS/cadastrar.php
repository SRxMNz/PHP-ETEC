<?php 

	$nome = $_POST['nome'];
	$email = $_POST['email'];



if($nome === 'Lacto' && $email === 'lacto@marsi.com'){

	echo "<table>";
	echo "<tr>";
	echo "<td>";
	echo("<b>seja bem vindo $nome<b/>");
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
else{
echo "usuario ou email incorreto";
}	
 ?>
''