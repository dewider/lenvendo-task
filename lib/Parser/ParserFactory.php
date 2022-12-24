<?
namespace Parser;

abstract class ParserFactory
{
    private static $parsersClassList = [
        '\Parser\YoutubeParser',
        '\Parser\VimeoParser'
    ];

    public static function getParser(string $url)
    {
        /** @var $class Parser\Parser */
        foreach (self::$parsersClassList as $class) {
            $linkClasses = $class::getSupportLinkClasses();
            foreach ($linkClasses as $linkClass) {
                if ($linkClass::urlConformityCheck($url)) {
                    return new $class($url);
                }
            }
        }
    }
}