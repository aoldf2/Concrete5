<?php

namespace Concrete\Package\Cabinetlandspringfield;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Page\Type\Type;
use Concrete\Core\Page\Template;
use Concrete\Core\Page\Type\PublishTarget\Type\Type as PublishTargetType;


class Controller extends Package {

	protected $pkgHandle = 'cabinetlandspringfield';
	protected $appVersionRequired = '8.3.2';
	protected $pkgVersion = '1.1.26';

	protected $themes = array('cabinetlandspringfield');

	public function getPackageDescription() {
		return 'Package for cabinetlandspringfield.com website.  Created by Andrew Oldfield in 2018';
	}

	public function getPackageName() {
		return 'cabinetlandspringfield';
	}

	public function install($post = array()) {
		$pkg = parent::install();
		
		$this->installThemes($pkg);
		$this->installPageTypes($pkg);
	}

    public function upgrade() {
        $pkg = parent::upgrade();
        $this->installBlocks($pkg);
    }

	private function installThemes($pkg) {
		Theme::add('cabinetlandspringfield', $pkg);
	}

	private function installPageTypes($pkg) {
		if (!Type::getByHandle('full_width')) {
			$pageType = Type::add([
                'handle' => 'full_width',
                'name' => t('Full Width'),
                'defaultTemplate' => PageTemplate::getByHandle('full'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('two_column')) {
			$pageType = Type::add([
                'handle' => 'two_column',
                'name' => t('Two Column'),
                'defaultTemplate' => PageTemplate::getByHandle('blank'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('three_column')) {
			$pageType = Type::add([
                'handle' => 'three_column',
                'name' => t('Three Column'),
                'defaultTemplate' => PageTemplate::getByHandle('blank'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('four_column')) {
			$pageType = Type::add([
                'handle' => 'four_column',
                'name' => t('Four Column'),
                'defaultTemplate' => PageTemplate::getByHandle('blank'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('home')) {
			$pageType = Type::add([
                'handle' => 'home',
                'name' => t('Home'),
                'defaultTemplate' => PageTemplate::getByHandle('full'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('left_sidebar')) {
			$pageType = Type::add([
                'handle' => 'left_sidebar',
                'name' => t('Left Sidebar '),
                'defaultTemplate' => PageTemplate::getByHandle('left_sidebar'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}

		if (!Type::getByHandle('right_sidebar')) {
			$pageType = Type::add([
                'handle' => 'right_sidebar',
                'name' => t('Right Sidebar '),
                'defaultTemplate' => PageTemplate::getByHandle('right_sidebar'),
                'ptIsFrequentlyAdded' => 1,
                'ptLaunchInComposer' => 0,
            ], $pkg);

            $target = PublishTargetType::getByHandle('all');
            $targetConfig = $target->configurePageTypePublishTarget($pageType, [
                'ptID' => $pageType->getPageTypeID(),
            ]);
            // Set configured publish target
            $pageType->setConfiguredPageTypePublishTargetObject($targetConfig);
		}
	}

	private function installBlocks($pkg) {
        $bt = BlockType::getByHandle('section_header');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('section_header', $pkg);
        } else {
            $bt->replace();
        }
	}
}