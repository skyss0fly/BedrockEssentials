<?php

declare(strict_types=1);

namespace BEDevs\BedrockEssentials\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class HealCommand extends Command {
  private $plugin;
  public function __construct(Plugin $plugin){
    $this->setPermission("bedrockessentials.heal");
    parent::__construct("heal", "heals yourself", "/heal");
    $this->plugin = $plugin;
  }

  public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
    if($sender instanceof Player){
      $sender->setHealth($sender->getMaxHealth());
      $sender->sendMessage("§6You have been healed");
    } else {
      $sender->sendMessage("This command can only be used by players.");
    }
  }
}
