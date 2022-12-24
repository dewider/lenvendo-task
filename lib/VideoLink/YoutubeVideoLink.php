<?
namespace VideoLink;

class YoutubeVideoLink extends VideoLink
{
    public static function urlConformityCheck(string $url) : bool
    {
        return (preg_match('/^(https:\/\/)?(www\.)?youtube\.com\/watch\?*.v=.+/', $url) === 1);
    }

    protected function parseUrl(string $url)
    {
        if (self::urlConformityCheck($url)) {
            parse_str(parse_url($url)['query'], $urlParams);
            return $urlParams['v'];
        } else {
            throw new \Exception("Incorrect YouTube link: ".$url);
        }
    }
}