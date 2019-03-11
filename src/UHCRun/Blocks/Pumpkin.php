<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Solid;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class Pumpkin extends Solid{

    public function __construct(){
        parent::__construct(86, 0, 'Pumpkin');

    }

    public function getHardness(): float{
        return 1;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_AXE;

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::PUMPKIN_PIE, 0, 2)

        ];

    }

}
