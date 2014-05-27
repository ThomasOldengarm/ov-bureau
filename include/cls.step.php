<?php

/**
 * @author  Reinier Gombert
 * @date    26-mei-2014
 */

/**
 * Adding steps to route
 *
 * Class for adding steps to a transit advice route
 *
 * @category   Class
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/cls.step.php
 * @since      File available since Release 0.1.0
 */

class Step
{
    /**
     * Declare fields
     */
    // Step Details
    private $distance;
    private $duration;
    private $instructions;
    
    // Transit Details
    private $arrivalStop;
    private $arrivalTime;
    private $departureStop;
    private $departureTime;
    private $headSign;
    
    // Line Details
    private $lineAgencie;
    private $lineName;
    
    // Vehicle Details
    private $vehicleName;
    private $vehicleIcon;

    /**
     * Constructor for Step-class
     */
    function Step($step)
    {
        $this->distance = $step["distance"];
        $this->duration = $step["duration"];
        $this->instructions = $step["instructions"];
        
        $transitDetails = $step["transit_details"];
        
        $this->arrivalStop = $transitDetails["arrival_stop"]["name"];
        $this->arrivalTime = $transitDetails["arrival_time"]["text"];
        $this->departureStop = $transitDetails["departure_stop"]["name"];
        $this->departureTime = $transitDetails["departure_time"]["text"];
        $this->headSign = $transitDetails["headsign"];
        
        $lineDetails = $transitDetails["line"];
        
        $this->lineAgencie = $lineDetails["agencies"][0]["name"];
        $this->lineName = $lineDetails["name"];
        
        $vehicleDetails = $lineDetails["vehicle"];
        
        $this->vehicleIcon = $vehicleDetails["icon"];
        $this->vehicleName = $vehicleDetails["name"];
    }
}
?>
