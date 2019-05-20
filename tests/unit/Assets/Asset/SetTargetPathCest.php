<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Asset;

use Phalcon\Assets\Asset;
use UnitTester;

class SetTargetPathCest
{
    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - css local
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetSetTargetPathCssLocal(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - css local');

        $asset = new Asset('css', 'css/docs.css');

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }

    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - css remote
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetSetTargetPathCssRemote(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - css remote');

        $asset = new Asset('css', 'https://phalcon.ld/css/docs.css');

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }

    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - js local
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetSetTargetPathJsLocal(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - js local');

        $asset = new Asset('js', 'js/jquery.js');

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }

    /**
     * Tests Phalcon\Assets\Asset :: setTargetPath() - js remote
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetSetTargetPathJsRemote(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - setTargetPath() - js remote');

        $asset = new Asset('js', 'https://phalcon.ld/js/jquery.js');

        $targetPath = '/new/path';

        $asset->setTargetPath($targetPath);

        $I->assertEquals(
            $targetPath,
            $asset->getTargetPath()
        );
    }
}
