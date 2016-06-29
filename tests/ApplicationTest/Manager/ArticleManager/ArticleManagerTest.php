<?php
namespace ApplicationTest\Manager\ArticleManager;

use Application\Manager\ArticleManager\ArticleManager;
use Application\Model\Mapper\ArticleMapper;

class ArticleManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ArticleManager
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new ArticleManager();
    }

    public function tearDown()
    {
        $this->instance = null;
    }

    public function testGetSetArticleMapper()
    {
        $mapper = new ArticleMapper();

        $this->assertSame($this->instance, $this->instance->setArticleMapper($mapper));
        $this->assertEquals($mapper, $this->instance->getArticleMapper());
    }
}