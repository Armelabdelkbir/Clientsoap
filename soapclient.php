<?php

$soapclient = new SoapClient('http://34.66.85.143:8080/ode/processes/homecloud?wsdl');

$params = array('SNN' => $_GET['SSN'] , 'homeprice' => $_GET['home'] , 'loanamount' => $_GET['Loan']);

$response = $soapclient->process($params);

var_dump($response);
