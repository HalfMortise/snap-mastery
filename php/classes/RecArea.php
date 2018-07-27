<?php
/**
 * Created by PhpStorm.
 * User: Joy
 * Date: 7/27/2018
 * Time: 8:27 AM
 */

class RecArea {

   private $recAreaId; //Uuid

   private $recAreaLat; //Float

   private $recAreaLong; //Float

   private $recAreaName; //Varchar

   public function __construct($newRecAreaId, $newRecAreaLat, $newRecAreaLong, string $newRecAreaName) {
      try {
         $this->setRecAreaId($newRecAreaId);
         $this->setRecAreaLat($newRecAreaLat);
         $this->setRecAreaLong($newRecAreaLong);
         $this->setRecAreaName($newRecAreaName);
      }
      //determine exception thrown
      catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }
   }

   public function getRecAreaId(): Uuid {
      return ($this->getRecAreaId);
   }

   public function getRecAreaLat(): SplFloat {
      return ($this->getRecAreaLat);
   }





}