<?php

/**
 * Performs  Unit testing for the Application.
 */
class PagesTest extends \PHPUnit_Framework_TestCase
{

/**
 * [testHomePage ]
 * @return [Http  response code] [This method Asserts the HTTP response code of  the Page with 200]
 */
    function testHomePage()
    {
        $response_code = $this->crawl('http://192.168.59.76/');
        $this->assertEquals(200, $response_code);
    }
    /**
     * [testregisterPage ]
     * @return [Http  response code] [This method Asserts the HTTP response code of  the Page with 200]
     */
    function testregisterPage()
    {
        $response_code = $this->crawl('http://192.168.59.76/register');
        $this->assertEquals(500, $response_code);
    }
    /**
     * [test  unknown page ]
     * @return [Http  response code] [This method Asserts the HTTP response code of  the Page with 302]
     */
    function testPageNotFound()
    {
        $response_code = $this->crawl('http://192.168.59.76/asdf');
        $this->assertEquals(302, $response_code);
    }
/**
 * [crawl]
 * @param  [http url] $url [url which is going  to be  tested]
 * @return [Http response  code]      [It returns  the HTTP response code  for the particular page]
 */
    function crawl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,
            true);
        curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return $response_code;
    }

}
