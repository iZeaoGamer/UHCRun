<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Fallable;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
//use pocketmine\block\utils\Fallable; Api: 4.0.0


class Sand extends Fallable{ //extends Solid implements Fallable Api: 4.0.0

    public function __construct(){
        parent::__construct(12, 0, 'Sand');

    }

    public function getHardness(): float{
        return 0.5;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_SHOVEL;

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::GLASS)

        ];

    }


}
