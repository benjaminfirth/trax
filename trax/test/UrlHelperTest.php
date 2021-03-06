<?php
/**
 *  File for the UrlHelperTest class
 *
 * (PHP 5)
 *
 * @package PHPonTraxTest
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright (c) Walter O. Haas 2006
 * @version $Id$
 * @author Walt Haas <haas@xmission.com>
 */

echo "testing UrlHelper\n";
require_once 'testenv.php';

// Call UrlHelperTest::main() if this source file is executed directly.
if (!defined("PHPUnit2_MAIN_METHOD")) {
    define("PHPUnit2_MAIN_METHOD", "UrlHelperTest::main");
}

require_once "PHPUnit2/Framework/TestCase.php";
require_once "PHPUnit2/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit2/Framework/IncompleteTestError.php";

Trax::$url_prefix = "/testprefix";

require_once "action_view/helpers.php";
require_once "action_view/helpers/form_helper.php";
require_once "action_view/helpers/url_helper.php";

//  parameters need by UrlHelper
$_SERVER['HTTP_HOST'] = 'www.example.com';
$_SERVER['SERVER_PORT'] = '80';
Trax::$current_controller_path = 'testcontrol';

/**
 * Test class for UrlHelper.
 * Generated by PHPUnit2_Util_Skeleton on 2006-03-01 at 13:17:32.
 */
class UrlHelperTest extends PHPUnit2_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit2/TextUI/TestRunner.php";

        $suite  = new PHPUnit2_Framework_TestSuite("UrlHelperTest");
        $result = PHPUnit2_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     *  Test __construct() method
     */
    public function test__construct() {
        $uh = new UrlHelper;
        $this->assertTrue(is_object($uh));
        $this->assertEquals('UrlHelper', get_class($uh));
    }

    /**
     *  Test button_to() method
     *  @todo Implement this test
     */
    public function testButton_to_method() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test button_to() function
     *  @todo Implement this test
     */
    public function testButton_to_function() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test convert_boolean_attributes() method
     *  @todo Implement this test
     */
    public function testConvert_boolean_attributes() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test convert_confirm_option_to_javascript() method
     *  @todo Implement this test
     */
    public function testConvert_confirm_option_to_javascript() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test link_image_to() method
     *  @todo Implement this test
     */
    public function testLink_image_to_method() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test link_image_to() function
     *  @todo Implement this test
     */
    public function testLink_image_to_function() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test link_to() method
     *  @todo Implement this test
     */
    public function testLink_to_method() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test link_to() function
     *  @todo Implement this test
     */
    public function testLink_to_function() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     *  Test url_for() method
     *
     *  Thest the {@link UrlHelper::url_for()} method
     */
    public function testUrl_for_method() {
        $uh = new UrlHelper;
        $this->assertEquals('http://www.example.com/testprefix/testcontrol',
                            $uh->url_for());
        $this->assertEquals('http://www.example.com/testprefix/foocontrol',
                            $uh->url_for(array(':controller'=>'foocontrol')));
        $this->assertEquals('http://www.example.com/testprefix'
                            . '/barcontrol/fooaction',
                            $uh->url_for(array(':controller'=>'barcontrol',
                                               ':action'    =>'fooaction')));
        $this->assertEquals('http://www.example.com/testprefix'
                            . '/barcontrol/baraction/fooid',
                            $uh->url_for(array(':controller'=> 'barcontrol',
                                               ':action'    => 'baraction',
                                               ':id'        => 'fooid')));
    }

    /**
     *  Test url_for() function
     *
     *  Test the {@link url_for()} function in the {@link url_helper.php}
     *  procedural file.
     */
    public function testUrl_for_function() {
        $this->assertEquals('http://www.example.com/testprefix/testcontrol',
                            url_for());
    }
}

// Call UrlHelperTest::main() if this source file is executed directly.
if (PHPUnit2_MAIN_METHOD == "UrlHelperTest::main") {
    UrlHelperTest::main();
}

// -- set Emacs parameters --
// Local variables:
// tab-width: 4
// c-basic-offset: 4
// c-hanging-comment-ender-p: nil
// indent-tabs-mode: nil
// End:
?>
