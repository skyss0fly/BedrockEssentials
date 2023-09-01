<?php

declare(strict_types=1);

namespace BEDevs\BedrockEssentials\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\player\Player;

class ICommand extends Command {
  public function __construct(){
    $this->setPermission("bedrockessentials.item");
    parent::__construct("item", "Give yourself a item", "/item <item> [amount]");
  }

  public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
    # Codes
    return True;
  }
}
