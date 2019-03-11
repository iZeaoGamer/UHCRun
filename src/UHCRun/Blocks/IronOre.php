<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;


class IronOre extends Solid{

    public function __construct(){
        parent::__construct(15, 0, 'Iron Ore');

    }

    public function getHardness(): float{
        return 3;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_PICKAXE;

    }

    public function getToolHarvestLevel(): int{
        return TieredTool::TIER_STONE;

    }

    public function getDropsForCompatibleTool(Item $item): array{
        return [
            ItemFactory::get(Item::IRON_INGOT, 0, 2)

        ];

    }


}
