<?php

declare(strict_types=1);

namespace BEDevs\BedrockEssentials;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
  public function onEnable(): void{
    $this->CheckConfig();
    # Codes
    $this->getLogger()->info("Plugin Enabled");
  }
      
  public function onDisable(): void{
    # Codes
    $this->getLogger()->info("Plugin Disabled");
  }
  
  public function registerCommands(){
    #Codes
    
  }
  
  public function CheckConfig(){
    if(!file_exists($this->getDataFolder() . "config.yml")){
        $this->saveDefaultConfig();
    }
    if(!is_dir($this->getDataFolder() . "languages")){
        mkdir($this->getDataFolder() . "languages");
    }
    if(!file_exists($this->getDataFolder() . "languages/english.properties")){
        $this->saveResource("languages/english.properties");
    }
  }
}
