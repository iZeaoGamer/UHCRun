<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\Flowable;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;


class Sugarcane extends Flowable{

    public function __construct(){
        parent::__construct(83, 0, 'Sugar Canes');

    }

    public function onNearbyBlockChange(): void{
        $down = $this->getSide(0);

        if($down->isTransparent() and $down->getId() !== self::SUGARCANE_BLOCK){
            $this->getLevel()->useBreakOn($this);

        }

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::BOOK)

        ];

    }


}
