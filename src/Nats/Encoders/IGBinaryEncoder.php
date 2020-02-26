<?php

namespace Nats\Encoders;

/**
 * Class IGBinaryEncoder
 *
 * Encodes and decodes messages in binary format.
 *
 * @package Nats
 */
class IGBinaryEncoder implements Encoder
{


    /**
     * Encodes a message to binary format.
     *
     * @author ikubicki
     * @param string $payload Message to decode.
     * @return mixed
     */
    public function encode($payload)
    {
        $payload = igbinary_serialize($payload);
        return $payload;
    }

    /**
     * Decodes a message from binary format.
     *
     * @author ikubicki
     * @param string $payload Message to decode.
     * @return mixed
     */
    public function decode($payload)
    {
        $payload = igbinary_unserialize($payload);
        return $payload;
    }
}
