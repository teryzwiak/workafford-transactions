<?php

function gen_prn_bank_nr(string $principal_number){
    $prn_bank_nr = substr($principal_number, 2, 8);
    return $prn_bank_nr;
}

function gen_con_bank_nr(string $contractor_number){
    $con_bank_nr = substr($contractor_number, 2, 8);
    return $con_bank_nr;
}
$command_type = strval("110"); //Typ polecenia
$payment_date = strval("2022023"); //data płatności  function editable
$amount_to_pay = strval("100"); //Kwota do zapłaty
$principal_bank_number = strval("11402004"); //Numer rozliczeniowy banku zleceniodawcy  function editable
$type_exec_mode = strval("0"); //Tryb realizacji płatności
$principal_number =  strval("95114020040000340280706078"); //- editable
$contrator_number = strval("32114020040000330280073075"); //- editable
$principal_name_adress = strval("Nazwa i adres zleceniodawcy"); //- editable
$contractor_name_adress = strval("Nazwa i adres kontrahenta"); //- editable
$fees_and_comm = strval("0"); // Opłaty i prowizje
$contractor_bank_number = strval("11402004"); //Numer rozliczeniowy banku kontrahenta - function editable
$title = strval("tytuł"); //editable
$empty1 = strval("");
$empty2 = strval("");
$comm_class = strval("51"); //Klasyfiakacja polecenia

echo strval(gen_prn_bank_nr($principal_number));
echo '<br>';
echo strval(gen_con_bank_nr($contrator_number));
echo '<br>';
echo $command_type.",".$payment_date.",".$amount_to_pay.",".$principal_bank_number.",".$type_exec_mode.',"'.$principal_number.'","'.$contrator_number.'","'.$principal_name_adress.'","'.$contractor_name_adress.'",'.$fees_and_comm.",".$contractor_bank_number.',"'.$title.'","'.$empty1.'","'.$empty2.'","'.$comm_class.'"';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<?php
//require_once('config.php');
echo'<form method=POST action="transaction.php">';
$con = new mysqli("localhost", "root", "", "workafford");

$q = "SELECT * FROM ABC";
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo "<input type='checkbox' name='transaction[][]' value='$row[1].$row[2].$row[3]'>".$row["Id"] . ";" . $row["Name"] . ";" . $row["Surname"] . $row["Account_number"] .'<input type="number" name="trasnsaction[][]">'. "<br/>";
else
echo $con->errno . " " . $con->error;
//echo '<input type="number" name="money">';
echo '<input type="submit"></form>'
?>