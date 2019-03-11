<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;

use function mt_rand;


class CoalOre extends Solid{

    public function __construct(){
        parent::__construct(16, 0, 'Coal Ore');

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
            ItemFactory::get(Item::TORCH)

        ];

    }

    protected function getXpDropAmount(): int{
        return mt_rand(0, 2);

    }


}
