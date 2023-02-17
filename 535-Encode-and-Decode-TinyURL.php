<?php
class Codec {

    private $urlKeyData = [];

    /**
     * Encodes a URL to a shortened URL.
     * @param String $longUrl
     * @return String
     */
    function encode($longUrl) {
        $md5 = md5($longUrl);
        $shortKey = substr($md5, 0, 6);
        $shortUrl = 'https://short.url/' . $shortKey;
        $this->urlKeyData[$shortUrl] = $longUrl;
        return $shortUrl;
    }
    
    /**
     * Decodes a shortened URL to its original URL.
     * @param String $shortUrl
     * @return String
     */
    function decode($shortUrl) {
        return $this->urlKeyData[$shortUrl];
    }
}

/**
 * Your Codec object will be instantiated and called as such:
 * $obj = Codec();
 * $s = $obj->encode($longUrl);
 * $ans = $obj->decode($s);
 */
