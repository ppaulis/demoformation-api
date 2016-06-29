<?php
namespace ApplicationTest\Manager\ArticleManager;

use \Application\Manager\ArticleManager\ArticleManager;
use Zend\Stdlib\Hydrator\ArraySerializable;

class ArticleManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ArticleManager
     */
    protected $instance;

    public function setUp()
    {
        $mapperMock =  $this->getMock('Application\Model\Mapper\ArticleMapper');
        $this->instance = new ArticleManager($mapperMock);
    }

    public function tearDown()
    {
        $this->instance = null;
    }

    public function testGetSetArticleMapper()
    {
        $mapper = $this->getMock('Application\Model\Mapper\ArticleMapper');

        $this->assertSame($this->instance, $this->instance->setArticleMapper($mapper));
        $this->assertEquals($mapper, $this->instance->getArticleMapper());
    }
}