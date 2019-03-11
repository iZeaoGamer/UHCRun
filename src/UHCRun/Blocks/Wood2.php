<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class Wood2 extends Solid{

    public function __construct(){
        parent::__construct(162, 0, 'Wood');

    }

    public function getHardness(): float{
        return 2;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_AXE;

    }

    public function getDropsForCompatibleTool(Item $item): array{
        return [
            ItemFactory::get(Item::WOOD)

        ];

    }

}
