<?php
require_once 'mailer.php';

if (isset($_POST)) {
    $messageArray = [
        'propertyType' => isset($_POST['propertyType']) ? $_POST['propertyType'] : '',
        'Credit Score' => isset($_POST['creditScore']) ? $_POST['creditScore'] : '',
        'Property Use' => isset($_POST['propertyUse']) ? $_POST['propertyUse'] : '',
        'years Owned' => isset($_POST['yearsOwned']) ? $_POST['yearsOwned'] : '',
        'Current Value' => isset($_POST['currentValue']) ? $_POST['currentValue'] : '',
        'Current Balance' => isset($_POST['currentBalance']) ? $_POST['currentBalance'] : '',
        'Current Rate' => isset($_POST['currentRate']) ? $_POST['currentRate'] : '',
        'Type of Rate' => isset($_POST['rateType']) ? $_POST['rateType'] : '',
        'second Mortgage' => isset($_POST['secondMortgage']) ? $_POST['secondMortgage'] : '',
        'House hold Income' => isset($_POST['householdIncome']) ? $_POST['householdIncome'] : '',
        'employment Status' => isset($_POST['employmentStatus']) ? $_POST['employmentStatus'] : '',
        'past Bk' => isset($_POST['pastBk']) ? $_POST['pastBk'] : '',
        'zip' => isset($_POST['zip']) ? $_POST['zip'] : '',
        'First Name' => isset($_POST['firstName']) ? $_POST['firstName'] : '',
        'Last Name' => isset($_POST['lastName']) ? $_POST['lastName'] : '',
        'Email' => isset($_POST['email']) ? $_POST['email'] : '',
        'Phone' => isset($_POST['phone']) ? $_POST['phone'] : ''
    ];
    $message = '';
    foreach ($messageArray as $head => $body) {
        $message = $message . "<br> <b>" . $head . "</b><br>" . $body . "<br>";
    }
    $message = '<div style="width: 100%;border: 2px solid #cccccc">' . $message . '</div>';

    $subject = 'Quote  - ' . $_SERVER['HTTP_REFERER'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    sendEmail($message, $subject,$email);

    echo "<script>alert('Quotation has been sent');</script>";
    echo "<script>window.location ='" . $_SERVER['HTTP_REFERER'] . "'</script>";

}
