<?php

class Continent
{
  public $nameContinent;
  
  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
  
  
}

class Country extends Continent
{
    public $nameCountry;
    public function __construct($continent, $country){
        $this -> nameCountry = $country;
        parent::__construct($continent, $country);
    }
    
}
class Region extends Country
{
public $nameRegion;
public function __construct($continent,$country, $region){
    $this->nameRegion = $region;
    parent::__construct($continent, $country, $region);
}

}
class Province extends Region
{
    public $nameProvince;
    public function __construct($continent, $country, $region, $province){
        $this->nameProvince = $province;
        parent::__construct($continent, $country, $region, $province);
    }


}
class City extends Province
{
    public $nameCity;
    public function __construct($continent,$country, $region, $province, $city){
        $this->nameCity = $city;
        parent::__construct($continent,$country, $region, $province, $city);
    }
}
class Street extends City
{
    public $nameStreet;
    public function __construct($continent, $country, $region, $province, $city, $street){
        $this->nameStreet = $street;
        parent::__construct($continent, $country, $region, $province, $city, $street);
    }
    public function getMyCurrentLocation(){
            echo "Mi trovo in $this->nameContinent, {$this->nameCountry}, {$this-> nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet} \n";
        }
}


$myLocation = new Street('Europa','Italia', 'Puglia', 'Ba', 'Bari','Strada San Giorgio Martire 2D');

$myLocation->getMyCurrentLocation();
