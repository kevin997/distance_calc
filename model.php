<?php
   class Distance {
       private $apiKey = 'AIzaSyDKsjKPHDFNKyHH-0TPlTGvQJRAtc0Rtw4';
       private $apiUrl;
       public $origin_latitude;
       public $origin_longitude;
       public $destinantion_latitude;
       public $destination_longitude;
  
    //construtor
    public function __construct($lat1,$long1,$lat2,$long2) {
        $this->origin_latitude = $lat1; 
        $this->origin_longitude = $long1; 
        $this->destination_latitude = $lat2; 
        $this->destination_longitude = $long2; 
    }

   public function GetDrivingDistance(){
        //url to distance matrix api with longitudes and latitudes of origin and distination         
        $this->apiUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$this->origin_latitude.",".$this->origin_longitude."&destinations=".$this->destinantion_latitude.",".$this->destination_longitude."&key=".$this->apiKey;
        $json = file_get_contents($this->apiUrl);

        $details = json_decode($json, TRUE);
    
        echo "<pre>"; print_r($details); echo "</pre>";
            
        }

}