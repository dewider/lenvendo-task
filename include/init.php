<?
require __DIR__ . '/../vendor/autoload.php';

$url = [
    'https://www.youtube.com/watch?v=G1IbRujko-A',
    'https://youtu.be/homqyBxHwis',
    'https://vimeo.com/225408543'
];

$parsers = [];
foreach ($url as $u) {
    $parsers[] = \Parser\ParserFactory::getParser($u);
}
?>