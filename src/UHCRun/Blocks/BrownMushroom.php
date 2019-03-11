<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\Flowable;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class BrownMushroom extends Flowable{

    public function __construct(){
        parent::__construct(39, 0, 'Brown Mushroom');

    }

    public function onNearbyBlockChange(): void{
        if($this->getSide(0)->isTransparent()){
            $this->getLevel()->useBreakOn($this);

        }

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::MUSHROOM_STEW)

        ];

    }


}
