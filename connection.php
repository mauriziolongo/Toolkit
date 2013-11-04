<?php
require_once ('soapclient/SforceEnterpriseClient.php');
$mySforceConnection = new SforceEnterpriseClient();
$mySoapClient = $mySforceConnection->createConnection("soapclient/enterprise.wsdl.xml");
$mylogin = $mySforceConnection->login("mao_milan@hotmail.it", "Tuomainen11csVUNiVZ3yweLWvtbQSxRHib");
$query = "SELECT Id, FirstName, LastName, Phone from Contact";
$response = $mySforceConnection->query($query);
echo "Results of query '$query'<br/><br/>\n";
foreach ($response->records as $record) {
    echo $record->Id . ": " . $record->FirstName . " "
        . $record->LastName . " " . $record->Phone . "<br/>\n";
	}
	
$query = "SELECT Name, ProductCode from Product2";
$response = $mySforceConnection->query($query);
echo "Results of query '$query'<br/><br/>\n";
foreach ($response->records as $record) {
    echo $record->Name . ": " . $record->ProductCode . "<br/>\n";
	}
?>