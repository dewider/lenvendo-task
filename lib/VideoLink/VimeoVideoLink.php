<?
namespace VideoLink;

class VimeoVideoLink extends VideoLink
{
    public static function urlConformityCheck(string $url) : bool
    {
        return (preg_match('/^(https:\/\/)?(www\.)?vimeo\.com\/.+$/', $url) === 1);
    }

    protected function parseUrl(string $url)
    {
        if (self::urlConformityCheck($url)) {
            preg_match('/vimeo\.com\/.+$/', $url, $matches);
            return mb_substr($matches[0], 10);
        } else {
            throw new \Exception("Incorrect Vimeo link: ".$url);
        }
    }
}