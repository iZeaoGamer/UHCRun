<?php

declare(strict_types = 1);

namespace UHCRun\Blocks;

use pocketmine\block\BlockToolType;
use pocketmine\block\Transparent;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;

use function mt_rand;


class MonsterSpawner extends Transparent{

    public function __construct(){
        parent::__construct(52, 0, 'Monster Spawner');

    }

    public function getHardness(): float{
        return 5;

    }

    public function getToolType(): int{
        return BlockToolType::TYPE_PICKAXE;

    }

    public function getToolHarvestLevel(): int{
        return TieredTool::TIER_STONE;

    }

    public function getDropsForCompatibleTool(Item $item): array{
        return [
            ItemFactory::get(Item::BOW)

        ];

    }

    public function isAffectedBySilkTouch(): bool{
        return false;

    }

    protected function getXpDropAmount(): int{
        return mt_rand(15, 43);

    }


}
