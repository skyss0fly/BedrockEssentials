<?php

declare(strict_types=1);

namespace BEDevs\BedrockEssentials\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class FoodCommand extends Command {
  public function __construct(){
    $this->setPermission("bedrockessentials.feed");
    parent::__construct("feed", "Replenish player's hunger", "/feed");
  }

  public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
    if($sender instanceof Player){
      /*
       * $sender->setFood($sender->getMaxFood());
       */
      $sender->sendMessage("§6You have been fed");
    } else {
      $sender->sendMessage("This command can only be used by players.");
    }
    return True;
  }
}
