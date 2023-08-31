<?php

declare(strict_types=1);

namespace BEDevs\BedrockEssentials\commands;

use pocketmine\plugin\Plugin;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\player\Player;

class ICommand extends Command {
  private $plugin;
  public function __construct(Plugin $plugin){
    $this->setPermission("bedrockessentials.item");
    parent::__construct("item", "Gives yourself a item", "/item <item> [amount]");
    $this->plugin = $plugin;
  }

  public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
    return True;
  }
}
