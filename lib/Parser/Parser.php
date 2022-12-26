<?
namespace Parser;

use Bitrix\Main\Controller\Export;
use VideoLink\VideoLink;

abstract class Parser {

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

    public function getVideoId()
    {
        return $this->videoLink->getVideoId();
    }

    abstract public function getHosting();

    abstract static public function getSupportLinkClasses() : array;

    abstract public function getIframe();

}