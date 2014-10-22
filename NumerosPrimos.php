<?php
	//Me baso en el principio de que los numeros primos
	//solo son divisibles entre si, y el 1.
	//por lo tanto si es divisible por cualquier otro numero
	//no es primo.
	function EsNumeroPrimo($numero){
		for($i=2; $i<$numero; $i++){
			if($numero%$i===0){
				if($i!=$numero){
					return false;
				}
			}
		}
		return true;
	}	
?>
<?php
	//Establecemos los valores iniciales de i y n
	$i=1;
	$n=100;
	if(isset($_GET["inferior"])){
		$i=$_GET["inferior"];
	}
	if(isset($_GET["superior"])){
		$n=$_GET["superior"];
	}
	
	echo "Los numeros primos de ".$i." a ".$n." son:<br/>";
	
	//echo $i;
	
	//Se analizan todos los números del rango.
	for($i;$i<=$n; $i++){
		if(EsNumeroPrimo($i)){
			echo "El número <b>".$i."</b> es un numero primo <br>";
		}
	}
?>
