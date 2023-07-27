<?php  
include("/path-to-library/simple_html_dom.php");
$GLOBALS["html"] = file_get_html('https://www.capitalbank.com.mk/Web/%D0%97%D0%90_%D0%9D%D0%90%D0%A1/%D0%9A%D1%83%D1%80%D1%81%D0%BD%D0%B8_%D0%BB%D0%B8%D1%81%D1%82%D0%B8.aspx');

function showEUR(){
 		   		$cell = $GLOBALS["html"]->find('tr',1);
 		   		$sellEUR = $cell->find('td', 3);
 		   		$buyEUR = $cell->find('td',4);
 		   		if($buyEUR->plaintext =='0,0000' and $sellEUR->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат евра";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за евра ";
 		   		echo $buyEUR->plaintext;
 		   		echo "...";
 		   		echo "Продажен за евра ";
 		   		echo $sellEUR->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showUSD(){
 		   		$cell = $GLOBALS["html"]->find('tr',2);
 		   		$sellUSD = $cell->find('td', 3);
 		   		$buyUSD = $cell->find('td',4);
 		   		if($buyUSD->plaintext =='0,0000' and $sellUSD->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат долари";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за долари ";
 		   		echo $buyUSD->plaintext;
 		   		echo "...";
 		   		echo "Продажен за долари ";
 		   		echo $sellUSD->plaintext;
 		   		echo "<br>";
 		   		}		
 		   	}
function showGBP(){
 		   		$cell = $GLOBALS["html"]->find('tr',3);
 		   		$sellGBP = $cell->find('td', 3);
 		   		$buyGBP = $cell->find('td',4);
 		   		if($buyGBP->plaintext =='0,0000' and $sellGBP->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат фунти";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за фунти ";
 		   		echo $buyGBP->plaintext;
 		   		echo "...";
 		   		echo "Продажен за фунти ";
 		   		echo $sellGBP->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showCHF(){
 		   		$cell = $GLOBALS["html"]->find('tr',4);
 		   		$sellCHF = $cell->find('td', 3);
 		   		$buyCHF = $cell->find('td',4);
 		   		if($buyCHF->plaintext =='0,0000' and $sellCHF->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат франци";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за франци ";
 		   		echo $buyCHF->plaintext;
 		   		echo "...";
 		   		echo "Продажен за франци ";
 		   		echo $sellCHF->plaintext;
 		   		echo "<br>";
 		   		}
 		   	}
function showSEK(){
 		   		$cell = $GLOBALS["html"]->find('tr',5);
 		   		$sellSEK = $cell->find('td', 3);
 		   		$buySEK = $cell->find('td',4);
 		   		if($buySEK->plaintext =='0,0000' and $sellSEK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат шведски круни";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за круни ";
 		   		echo $buySEK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за круни ";
 		   		echo $sellSEK->plaintext;
 		   		echo "<br>";
 		   		}
 		   	}
function showNOK(){
 		   		$cell = $GLOBALS["html"]->find('tr',6);
 		   		$sellNOK = $cell->find('td', 3);
 		   		$buyNOK = $cell->find('td',4);
 		   		if($buyNOK->plaintext =='0,0000' and $sellNOK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат норвешки круни";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за круни ";
 		   		echo $buyNOK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за круни ";
 		   		echo $sellNOK->plaintext;
 		   		echo "<br>";
 		   		}
 		   	}
function showDKK(){
 		   		$cell = $GLOBALS["html"]->find('tr',7);
 		   		$sellDKK = $cell->find('td', 3);
 		   		$buyDKK = $cell->find('td',4);
 		   		if($buyDKK->plaintext =='0,0000' and $sellDKK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат дански круни";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за круни ";
 		   		echo $buyDKK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за круни ";
 		   		echo $sellDKK->plaintext;
 		   		echo "<br>";
 		   		}
 		   	}
function showCAD(){
 		   		$cell = $GLOBALS["html"]->find('tr',6);
 		   		$sellCAD = $cell->find('td', 3);
 		   		$buyCAD = $cell->find('td',4);
 		   		if($buyCAD->plaintext =='0,0000' and $sellCAD->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат канадски долари";
 		   			echo "<br>";
 		   		}
 		   		else{
 		   		echo "Куповен за канадски долари  ";
 		   		echo $buyCAD->plaintext;
 		   		echo "...";
 		   		echo "Продажен за канадски долари ";
 		   		echo $sellCAD->plaintext;
 		   		echo "<br>";
 		   		}
 		   	}

showEUR();
showUSD();
showGBP();
showCHF();
showSEK();
showNOK();
showDKK();
showCAD();
?>