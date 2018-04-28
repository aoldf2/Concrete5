<?php
namespace Application\Theme\ThemeName;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{   
    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery-1.8.3.min');
    }
}