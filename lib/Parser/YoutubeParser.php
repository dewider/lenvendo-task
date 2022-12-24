<?
namespace Parser;

class YoutubeParser extends Parser {

    public function __construct(string $url)
    {
        parent::__construct($url);
        $this->hosting = 'youtube';
    }

    public static function getSupportLinkClasses(): array
    {
        return [
            '\VideoLink\YoutubeVideoLink',
            '\VideoLink\ShortYoutubeVideoLink'
        ];
    }

    public function getIframe()
    {
        return '
            <iframe width="560" height="315" src="https://www.youtube.com/embed/'.$this->getVideoId().'"
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>';
    }
}
