<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;

use function mt_rand;


class EmeraldOre extends Solid{

    public function __construct(){
        parent::__construct( 129, 0, 'Emerald Ore');

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
            ItemFactory::get(Item::BOTTLE_O_ENCHANTING, 0, 16)

        ];

    }

    protected function getXpDropAmount(): int{
        return mt_rand(3, 7);

    }


}
