<?php

declare(strict_types=1);

namespace Amarant\LuxVariant;

use Amarant\Framework\Contract\Module\ThemeInterface;
use Amarant\Framework\Data\DataObject;
use Amarant\Framework\Data\View\Theme\BuildContext;
use Amarant\Framework\Module\AbstractTheme;
use Override;

final class Theme extends AbstractTheme
{
    #[Override] public function name(): string
    {
        return 'Amarant_LuxVariant';
    }

    #[Override] public function getThemeType(): string
    {
        return ThemeInterface::TYPE_FRONTEND;
    }

    /**
     * @inheritDoc
     */
    #[Override] public function build(BuildContext $buildContext): void
    {
    }

    #[Override] public function complete(BuildContext $buildContext): void
    {
    }

    public function defaults(): DataObject
    {
        return new DataObject(
            [
                'parent' => 'Amarant_Lux',
            ]
        );
    }
}
