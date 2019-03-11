<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\DoublePlant;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class DoubleTallGrass extends DoublePlant{

    public function __construct(){
        parent::__construct(2);

    }

    public function onNearbyBlockChange(): void{
        if($this->getSide(0)->isTransparent()){
            $this->getLevel()->useBreakOn($this);

        }

    }

    public function getDrops(Item $item): array{
        if(mt_rand(0, 7) === 0){
            return [
                ItemFactory::get(Item::WHEAT)

            ];

        }

        return [];

    }


}
