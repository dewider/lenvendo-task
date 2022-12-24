<?
namespace VideoLink;

class ShortYoutubeVideoLink extends VideoLink
{
    public static function urlConformityCheck(string $url) : bool
    {
        return (preg_match('/^(https:\/\/)?(www\.)?youtu\.be\/.+$/', $url) === 1);
    }

    protected function parseUrl(string $url)
    {
        if (self::urlConformityCheck($url)) {
            preg_match('/youtu\.be\/.+$/', $url, $matches);
            return mb_substr($matches[0], 9);
        } else {
            throw new \Exception("Incorrect YouTube link: ".$url);
        }
    }
}