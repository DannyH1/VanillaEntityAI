<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI\entity\hostile;

class ElderGuardian extends Guardian {
	public const NETWORK_ID = self::ELDER_GUARDIAN;
	public $width = 1.9975;
	public $height = 1.9975;

	public function initEntity() : void {
		parent::initEntity(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return array
	 */
	public function getDrops() : array {
		return parent::getDrops(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		return "Elder Guardian";
	}
}