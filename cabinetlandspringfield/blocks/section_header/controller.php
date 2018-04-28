<?php 
namespace Concrete\Package\Cabinetlandspringfield\Block\SectionHeader;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController {
	protected $btInterfaceWidth = 600;
	protected $btInterfaceHeight = 400;
	protected $btTable = 'btSectionHeader';

	public function getBlockTypeName(){
		return t('Section Header');
	}

	public function getBlockTypeDescription(){
		return t('Creates a new section header');
	}
}