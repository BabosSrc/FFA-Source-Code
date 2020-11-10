<?php

namespace MulkiAqi192\FFA;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\item\Item;
use pocketmine\utils\TextFormat as T;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

	public function onEnable(){

	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "ffa":
			 if($sender instanceof Player){
			 	$item1 = Item::get(276, 0, 1);
			 	$item2 = Item::get(322, 0, 1);
			 	$helmet = Item::get(311, 0, 1);
			 	$chestplate = Item::get(312, 0, 1);
			 	$leggings = Item::get(313, 0, 1);
			 	$boots = Item::get(314, 0, 1); // DM sw 276 gapple 322 helmet 311
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("ffa1")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->getInventory()->addItem($item2);
			 	$sender->getArmorInventory()->setHelmet($helmet);
			 	$sender->getArmorInventory()->setChestplate($chestplate);
			 	$sender->getArmorInventory()->setLeggings($leggings);
			 	$sender->getArmorInventory()->setBoots($boots);
			 	$sender->sendMessage(T::GREEN . "Teleported to FFA!");
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to FFA!");
			 }
		}
	return true;
	}

}