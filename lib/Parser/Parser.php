<?
namespace Parser;

use Bitrix\Main\Controller\Export;
use VideoLink\VideoLink;

abstract class Parser {

    protected $hosting = 'undefined';
    protected VideoLink $videoLink;

    public function __construct(string $url)
    {
        $supportedLinkClasses = $this->getSupportLinkClasses();
        foreach ($supportedLinkClasses as $class) {
            if ($class::urlConformityCheck($url)) {
                $this->videoLink = new $class($url);
                break;
            }
        }

        if (!$this->videoLink) {
            throw new \Exception("Unsupported link: ".$url);
        }

    }

    public function getHosting()
    {
        return $this->hosting;
    }

    public function getVideoId()
    {
        return $this->videoLink->getVideoId();
    }

    abstract static public function getSupportLinkClasses() : array;

    public abstract function getIframe();

}