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

namespace Phalcon\Test\Unit\Http\Response;

use DateTime;
use DateTimeZone;
use Phalcon\Http\Response\Headers;
use Phalcon\Test\Unit\Http\Helper\HttpBase;
use UnitTester;

class SetCacheCest extends HttpBase
{
    /**
     * Tests setCache
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2015-07-14
     */
    public function testHttpResponseSetCache(UnitTester $I)
    {
        $response = $this->getResponseObject();

        $expiry = new DateTime();

        $expiry->setTimezone(
            new DateTimeZone('UTC')
        );

        $expiry->modify('+60 minutes');

        $response->setCache(60);



        $expected = Headers::__set_state(
            [
                'headers' => [
                    'Expires'       => $expiry->format('D, d M Y H:i:s') . ' GMT',
                    'Cache-Control' => 'max-age=3600',
                ],
            ]
        );

        $I->assertEquals(
            $expected,
            $response->getHeaders()
        );
    }
}
