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

   public function __construct($newRecAreaId, float $newRecAreaLat, float $newRecAreaLong, string $newRecAreaName) {
      try {
         $this->setRecAreaId($newRecAreaId);
         $this->setRecAreaLat($newRecAreaLat);
         $this->setRecAreaLong($newRecAreaLong);
         $this->setRecAreaName($newRecAreaName);
      } //determine exception thrown
      catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }
   }

   public function getRecAreaId(): Uuid {
      return ($this->recAreaId);
   }

   public function setRecAreaId($newRecAreaId): void {
      try {
         $uuid = self::validateUuid($newRecAreaId);
      } catch(\InvalidArgumentException | \RangeException | \ Exception | \ TypeError $exception) {
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }
      // convert and store the profile id
      $this->recAreaId = $uuid;
   }


   //insert lat-long sum return here




   public function getRecAreaLat(): SplFloat {
      return ($this->recAreaLat);
   }


   public function getRecAreaLong(): SplFloat {
      return ($this->recAreaLong);
   }

   public function getRecAreaName(): String {
      return ($this->recAreaName);
   }

   public function setRecAreaName(string $newRecAreaName): void {
      $newRecAreaName = trim($newRecAreaName);
      $newRecAreaName = filter_var($newRecAreaName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
      if(empty($newRecAreaName) === true) {
         throw(new \InvalidArgumentException("RecArea must have name"));
      }

      //convert and store the account name
      $this->recAreaName = $newRecAreaName;


      function sum($recAreaLat, $recAreaLong): float {
         return $recAreaLat + $recAreaLong;
      }

      // Return float
      var_dump(sum(1, 2));
   }
}