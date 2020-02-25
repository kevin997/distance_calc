<?php 
include_once './model.php';
$lat1 = "30.3453463";
$long1 = "80.34534534";
$lat2 = "30.34545463";
$long2 = "80.34536534";
$rawData = new Distance($lat1,$long1,$lat2,$long2);

$rawData->GetDrivingDistance();

/* this is the output which is displayed.
- t
To use the distance matrix api to get the distance btw two nodes a valid subscription is needed (bank card info)
Array
(
    [destination_addresses] => Array
        (
        )

    [error_message] => You must enable Billing on the Google Cloud Project at https://console.cloud.google.com/project/_/billing/enable Learn more at https://developers.google.com/maps/gmp-get-started
    [origin_addresses] => Array
        (
        )

    [rows] => Array
        (
        )

    [status] => REQUEST_DENIED
)

*/
        
