<?php

namespace AppBundle\Tests\Controller;

use AppBundle\Tests\AbstractBaseTest;

/**
 * Class BackendControllerTest.
 *
 * @category Test
 *
 * @author   Anton Serra <aserratorta@gmail.com.cat>
 */
class BackendControllerTest extends AbstractBaseTest
{
    /**
     * Test admin login request is successful.
     */
    public function testAdminLoginPageIsSuccessful()
    {
        $client = $this->createClient();           // anonymous user
        $client->request('GET', '/admin/login');

        $this->assertStatusCode(200, $client);
    }

    /**
     * Test HTTP request is successful.
     *
     * @dataProvider provideSuccessfulUrls
     *
     * @param string $url
     */
    public function testAdminPagesAreSuccessful($url)
    {
        $client = $this->makeClient(true);         // authenticated user
        $client->request('GET', $url);

        $this->assertStatusCode(200, $client);
    }

    /**
     * Successful Urls provider.
     *
     * @return array
     */
    public function provideSuccessfulUrls()
    {
        return array(
            array('/admin/dashboard'),
//            array('/admin/pages/page/list'),
//            array('/admin/pages/page/create'),
//            array('/admin/pages/page/1/delete'),
//            array('/admin/pages/page/1/edit'),
            array('/admin/pages/archive/list'),
            array('/admin/pages/archive/create'),
            array('/admin/pages/archive/1/delete'),
            array('/admin/pages/archive/1/edit'),
            array('/admin/pages/artist/list'),
            array('/admin/pages/artist/create'),
            array('/admin/pages/artist/1/delete'),
            array('/admin/pages/artist/1/edit'),
            array('/admin/pages/setting/list'),
            array('/admin/pages/setting/create'),
            array('/admin/pages/setting/1/delete'),
            array('/admin/pages/setting/1/edit'),
            array('/admin/pages/newsletter/list'),
            array('/admin/pages/newsletter/create'),
            array('/admin/pages/newsletter/1/delete'),
            array('/admin/pages/newsletter/1/edit'),
            array('/admin/pages/newsletter-user/list'),
            array('/admin/pages/newsletter-user/create'),
            array('/admin/pages/newsletter-user/1/delete'),
            array('/admin/pages/newsletter-user/1/edit'),
            array('/admin/pages/newsletter-group/list'),
            array('/admin/pages/newsletter-group/create'),
            array('/admin/pages/newsletter-group/1/delete'),
            array('/admin/pages/newsletter-group/1/edit'),
            array('/admin/pages/menu-level-1/list'),
            array('/admin/pages/menu-level-1/create'),
            array('/admin/pages/menu-level-1/1/delete'),
            array('/admin/pages/menu-level-1/1/edit'),
            array('/admin/pages/menu-level-2/list'),
            array('/admin/pages/menu-level-2/create'),
            array('/admin/pages/menu-level-2/1/delete'),
            array('/admin/pages/menu-level-2/1/edit'),
            array('/admin/pages/slider-image/list'),
            array('/admin/pages/slider-image/create'),
            array('/admin/pages/slider-image/1/delete'),
            array('/admin/pages/slider-image/1/edit'),
            array('/admin/pages/working-day-setting/list'),
//            array('/admin/users/list'),
//            array('/admin/users/create'),
//            array('/admin/users/1/edit'),
//            array('/admin/users/1/delete'),
        );
    }

    /**
     * Test HTTP request is not found.
     *
     * @dataProvider provideNotFoundUrls
     *
     * @param string $url
     */
    public function testAdminPagesAreNotFound($url)
    {
        $client = $this->makeClient(true);         // authenticated user
        $client->request('GET', $url);

        $this->assertStatusCode(404, $client);
    }

    /**
     * Not found Urls provider.
     *
     * @return array
     */
    public function provideNotFoundUrls()
    {
        return array(
            array('/admin/pages/page/batch'),
//            array('/admin/users/show'),
//            array('/admin/users/batch'),
        );
    }
}
