<?php

declare(strict_types = 1);

namespace UHCRun;

use pocketmine\block\BlockFactory;
use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

use UHCRun\Blocks\BrownMushroom;
use UHCRun\Blocks\Cactus;
use UHCRun\Blocks\CoalOre;
use UHCRun\Blocks\DeadBush;
use UHCRun\Blocks\DiamondOre;
use UHCRun\Blocks\DoubleTallGrass;
use UHCRun\Blocks\EmeraldOre;
use UHCRun\Blocks\GoldOre;
use UHCRun\Blocks\Gravel;
use UHCRun\Blocks\IronOre;
use UHCRun\Blocks\Leaves;
use UHCRun\Blocks\Leaves2;
use UHCRun\Blocks\MonsterSpawner;
use UHCRun\Blocks\Obsidian;
use UHCRun\Blocks\Pumpkin;
use UHCRun\Blocks\RedMushroom;
use UHCRun\Blocks\Sand;
use UHCRun\Blocks\Stone;
use UHCRun\Blocks\Sugarcane;
use UHCRun\Blocks\TallGrass;
use UHCRun\Blocks\Wood;
use UHCRun\Blocks\Wood2;
use UHCRun\Entities\FallingBlock;


class UHCRun extends PluginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        /*
         * TEST
         */
        BlockFactory::registerBlock(new BrownMushroom(), true);
        BlockFactory::registerBlock(new Cactus(), true);
        BlockFactory::registerBlock(new CoalOre(), true);
        BlockFactory::registerBlock(new DeadBush(), true);
        BlockFactory::registerBlock(new DiamondOre(), true);
        BlockFactory::registerBlock(new DoubleTallGrass(), true);
        BlockFactory::registerBlock(new EmeraldOre(), true);
        BlockFactory::registerBlock(new GoldOre(), true);
        BlockFactory::registerBlock(new Gravel(), true);
        BlockFactory::registerBlock(new IronOre(), true);
        BlockFactory::registerBlock(new Leaves(), true);
        BlockFactory::registerBlock(new Leaves2(), true); //remove api: 4.0.0
        BlockFactory::registerBlock(new MonsterSpawner(), true);
        BlockFactory::registerBlock(new Obsidian(), true);
        BlockFactory::registerBlock(new Pumpkin(), true);
        BlockFactory::registerBlock(new RedMushroom(), true);
        BlockFactory::registerBlock(new Sand(), true);
        BlockFactory::registerBlock(new Stone(), true);
        BlockFactory::registerBlock(new Sugarcane(), true);
        BlockFactory::registerBlock(new TallGrass(), true);
        BlockFactory::registerBlock(new Wood(), true);
        BlockFactory::registerBlock(new Wood2(), true); //remove api: 4.0.0

        Entity::registerEntity(FallingBlock::class, true, ['FallingSand', 'minecraft:falling_block']); //remove api 4.0.0
        //EntityFactory::registerEntity(FallingBlock::class, true, ['FallingSand', 'minecraft:falling_block']); Api: 4.0.0

    }


}
