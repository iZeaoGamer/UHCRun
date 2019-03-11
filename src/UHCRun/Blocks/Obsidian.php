<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;


class Obsidian extends Solid{

    public function __construct(){
        parent::__construct(49, 0, 'Obsidian');

    }

    public function getHardness(): float{
        return 17.5;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_PICKAXE;

    }

    public function getToolHarvestLevel(): int{
        return TieredTool::TIER_STONE;

    }

    public function getDropsForCompatibleTool(Item $item): array{
        return [
            ItemFactory::get(Item::OBSIDIAN, 0, 4)

        ];

    }

    public function getBlastResistance(): float{
        return 6000;

    }

}
