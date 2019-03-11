<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\Flowable;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class DeadBush extends Flowable{

    public function __construct(){
        parent::__construct(32, 0, 'Dead Bush');

    }

    public function onNearbyBlockChange(): void{
        if($this->getSide(0)->isTransparent()){
            $this->getLevel()->useBreakOn($this);

        }

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::BREAD)

        ];

    }


}
