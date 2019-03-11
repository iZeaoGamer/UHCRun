<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Transparent;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class Leaves extends Transparent{

    public function __construct(){
        parent::__construct(18, 0, 'Leaves');

    }

    public function getHardness(): float{
        return 0.2;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_SHEARS;

    }

    public function diffusesSkyLight(): bool{
        return true;

    }

    public function getDrops(Item $item): array{
        if($item->getBlockToolType() & BlockToolType::TYPE_SHEARS){
            return $this->getDropsForCompatibleTool($item);

        }

        $drops = [];

        if(mt_rand(1, 20) === 1){
            $drops[] = ItemFactory::get(Item::APPLE);

        }

        if(mt_rand(1, 200) === 1){
            $drops[] = ItemFactory::get(Item::GOLDEN_APPLE);

        }

        return $drops;

    }


}
