<?
namespace VideoLink;

abstract class VideoLink {
    protected $link, $videoId;

    public function __construct(string $url)
    {
        $this->link = trim($url);
        $this->videoId = $this->parseUrl($this->link);
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    abstract public static function urlConformityCheck(string $url) : bool;

    abstract protected function parseUrl(string $url);
}