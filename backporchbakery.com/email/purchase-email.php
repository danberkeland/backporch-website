<?php
require_once 'mailer.php';

if (isset($_POST)) {
    $messageArray = [
        'propertyType' => isset($_POST['propertyType']) ? $_POST['propertyType'] : '',
        'Credit Score' => isset($_POST['creditScore']) ? $_POST['creditScore'] : '',
        'First time buyer' => isset($_POST['firstTimeBuyer']) ? $_POST['firstTimeBuyer'] : '',
        'Purchase time line' => isset($_POST['purchaseTimeline']) ? $_POST['purchaseTimeline'] : '',
        'Purchse Price' => isset($_POST['purchasePrice']) ? $_POST['purchasePrice'] : '',
        'Down Payment' => isset($_POST['downPayment']) ? $_POST['downPayment'] : '',
        'House Hold Income' => isset($_POST['householdIncome']) ? $_POST['householdIncome'] : '',
        'Employment Status' => isset($_POST['employmentStatus']) ? $_POST['employmentStatus'] : '',
        'past Bankruptcy' => isset($_POST['pastBk']) ? $_POST['pastBk'] : '',
        'Real estate Agent' => isset($_POST['hasAgent']) ? $_POST['hasAgent'] : '',
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
