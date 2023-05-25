<?php

namespace App\Serializer;

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

class AsciiEncoder implements EncoderInterface, DecoderInterface
{
    public const FORMAT = 'ascii';

    public function encode($data, string $format, array $context = []): string
    {
        // TODO: return your encoded data
        return '';
    }

    public function supportsEncoding(string $format, array $context = []): bool
    {
        return self::FORMAT === $format;
    }

    public function decode(string $data, string $format, array $context = [])
    {
        // TODO: return your decoded data
        return '';
    }

    public function supportsDecoding(string $format, array $context = []): bool
    {
        return self::FORMAT === $format;
    }
}
