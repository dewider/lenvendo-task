<?
namespace Parser;

class VimeoParser extends Parser {

    public function getHosting()
    {
        return 'vimeo';
    }

    public static function getSupportLinkClasses(): array
    {
        return [
            '\VideoLink\VimeoVideoLink'
        ];
    }

    public function getIframe()
    {
        return '
        <iframe src="https://player.vimeo.com/video/'.$this->getVideoId().'
            ?h={hash_parameter}" width="560" height="315" frameborder="0"
            title="title" webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>';
    }
}
