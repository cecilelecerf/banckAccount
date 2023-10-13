<?php 
require_once("./class/bankAccount.php");
$bankAccount = new BankAccount(3000, "Lecerf", "0783058963", "cece.lecerf@gmail.com");
echo "<br>";
echo $bankAccount->toString();
echo "<br>";
$bankAccount->withdrawal(200);
echo $bankAccount->toString();
echo "<br>";
$bankAccount->deposit(200);
echo $bankAccount->toString();
?>