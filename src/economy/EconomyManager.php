<?php
declare(strict_types=1);

namespace BEDevs\BedrockEssentials\economy;

use pocketmine\player\Player;
use pocketmine\utils\Config;

class EconomyManager{
  private $config;
  
  public function __construct(Config $config){
    $this->config = $config;
  }
  
  /*
   * Method to insert a new player column
   */
  public function insert(Player|string $player, int $value){
    $playerName = $player instanceof Player ? $player->getName() : $player;
    if (!$this->exists($playerName)) {
      $this->config->set($playerName, $value);
      $this->config->save();
    }
  }
  
  /*
   * Method to read player column
   */
  public function read(Player|string $player){
    $playerName = $player instanceof Player ? $player->getName() : $player;
    if ($this->exists($playerName)) {
      return $this->config->get($playerName);
    }
    return null;
  }
  
  /*
   * Method to update player column
   */
  public function update(Player|string $player, int $value){
    $playerName = $player instanceof Player ? $player->getName() : $player;
    if ($this->exists($playerName)) {
      $this->config->set($playerName, $value);
      $this->config->save();
    }
  }
  
  /*
   * Method to delete player column
   */
  public function delete(Player|string $player){
    $playerName = $player instanceof Player ? $player->getName() : $player;
    if ($this->exists($playerName)) {
      $this->config->remove($playerName);
      $this->config->save();
    }
  }
  
  /*
   * Method to check if player column exists
   */
  public function exists(Player|string $player){
    $playerName = $player instanceof Player ? $player->getName() : $player;
    return $this->config->exists($playerName);
  }
}