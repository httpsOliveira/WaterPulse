<?php 

header("Access-Control-Allow-Origin: *"); #Linha utilizada para podermos ter acesso a todos os dominios

$num1 = $_POST['num1']; #variavel utilizada para chamar o valor em metodo post que é alocado na calculadora na pagina economize! (as variveis $num2, $opcao também fazem isso.)
$num2 = $_POST['num2'];
$opcao = $_POST['opcao'];
$vl=$num1-$num2; #--> calculo simples
$taxa1=16.53; # os valores a seguir foram estipulados conforme foi estipulado no enunciado (lembrando que estes valores são exemplos e dependendo da região aonde o usuário mora o valor ira mudar.)
$taxa2=1.27;
$taxa3=1.45;

// Verificação para saber se o usuário tem coletora de esgoto ou não

if($opcao=="s"){ #Se o usuário não tiver coleta de esgoto a variavel taxa4 não tera valor algum.
	$taxa4="";
}
if($opcao=="c"){
$taxa4=0.80; #Já se o usuário tem o serviço de coleta de esgoto a variavel tera o valor de 0.80
}

if($vl<10){ #É feita uma verificação para saber se o consumo foi menor do que 10 para que seja alocado o valor da taxa minima.
	$res=$taxa1;
}
if($vl>10&&$vl<20){
	$res=($vl*$taxa2)+$taxa1; #Se a variavel vl foir maior que 10 e for menor que 20 executar o calculo valor * taxa2 + taxa1.
	
}

else{
	$x=$vl-20;
	$res=($x*$taxa3)+$taxa1+($taxa2*10); #se nao a variavel x vai ser igual $vl - 20 fazendo o calculo que esta na variavel $res = ($x*$taxa3)+$taxa1+($taxa2*10)
	
}
if ($opcao=="z") {
	$res=0;	#Aqui caso o usuário não estipule valor algum exiba o valor de 0 (caso o usuário não tenha selecionado alguma opção entre coletora de esgoto e sem ele também não ira prosseguir com o calculo)
	$taxa4=0;
}

echo $resultado=($res*$taxa4)+$res; #Exibição do resultado


 ?>