<?php

declare(strict_types=1)

namespace BEDevs\BedrockEssentials;

use pocketmine\plugin\PluginBase;

class Main(PluginBase){
  public function onEnable(): void{
    # Codes
    $this->getLogger()->info("Plugin Enabled");
  }
      
  public function reloadEssentials(){
    # Codes
    $this->getLogger()->info("Plugin Disabled");
  }
}
