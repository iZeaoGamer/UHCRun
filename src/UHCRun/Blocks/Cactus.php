<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\Transparent;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByBlockEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
//use pocketmine\math\Facing; Api: 4.0.0


class Cactus extends Transparent{

    public function __construct(){
        parent::__construct(81, 0, 'Cactus');

    }

    public function getHardness(): float{
        return 0.4;

    }

    public function hasEntityCollision(): bool{
        return true;

    }

    public function onEntityInside(Entity $entity): void{
        $event = new EntityDamageByBlockEvent($this, $entity, EntityDamageEvent::CAUSE_CONTACT, 1);
        $entity->attack($event);

    }

    public function onNearbyBlockChange(): void{
        $down = $this->getSide(0);

        if($down->getId() !== self::SAND and $down->getId() !== self::CACTUS){
            $this->getLevel()->useBreakOn($this);

        }else{

            for($side = 2; $side <= 5; ++$side){ //remove Api: 4.0.0
                $block = $this->getSide($side);

                if($block->isSolid()){
                    $this->getLevel()->useBreakOn($this);

                    break;

                }

            }

            /* Api: 4.0.0
            foreach(Facing::HORIZONTAL as $side){
				$b = $this->getSide($side);
				if($b->isSolid()){
					$this->getLevel()->useBreakOn($this);
					break;
				}
			 }
             */

        }

    }

    public function getDrops(Item $item): array{
        return [
            ItemFactory::get(Item::WOOD)

        ];

    }


}
