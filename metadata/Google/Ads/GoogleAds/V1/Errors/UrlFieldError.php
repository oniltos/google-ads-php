<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/url_field_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Errors;

class UrlFieldError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae6100a34676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "72726f72732f75726c5f6669656c645f6572726f722e70726f746f121e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e6572726f727322" .
            "950e0a1155726c4669656c644572726f72456e756d22ff0d0a0d55726c46" .
            "69656c644572726f72120f0a0b554e5350454349464945441000120b0a07" .
            "554e4b4e4f574e100112210a1d494e56414c49445f545241434b494e475f" .
            "55524c5f54454d504c415445100212280a24494e56414c49445f5441475f" .
            "494e5f545241434b494e475f55524c5f54454d504c415445100312250a21" .
            "4d495353494e475f545241434b494e475f55524c5f54454d504c4154455f" .
            "5441471004122d0a294d495353494e475f50524f544f434f4c5f494e5f54" .
            "5241434b494e475f55524c5f54454d504c4154451005122d0a29494e5641" .
            "4c49445f50524f544f434f4c5f494e5f545241434b494e475f55524c5f54" .
            "454d504c415445100612230a1f4d414c464f524d45445f545241434b494e" .
            "475f55524c5f54454d504c415445100712290a254d495353494e475f484f" .
            "53545f494e5f545241434b494e475f55524c5f54454d504c415445100812" .
            "280a24494e56414c49445f544c445f494e5f545241434b494e475f55524c" .
            "5f54454d504c4154451009122e0a2a524544554e44414e545f4e45535445" .
            "445f545241434b494e475f55524c5f54454d504c4154455f544147100a12" .
            "150a11494e56414c49445f46494e414c5f55524c100b121c0a18494e5641" .
            "4c49445f5441475f494e5f46494e414c5f55524c100c12220a1e52454455" .
            "4e44414e545f4e45535445445f46494e414c5f55524c5f544147100d1221" .
            "0a1d4d495353494e475f50524f544f434f4c5f494e5f46494e414c5f5552" .
            "4c100e12210a1d494e56414c49445f50524f544f434f4c5f494e5f46494e" .
            "414c5f55524c100f12170a134d414c464f524d45445f46494e414c5f5552" .
            "4c1010121d0a194d495353494e475f484f53545f494e5f46494e414c5f55" .
            "524c1011121c0a18494e56414c49445f544c445f494e5f46494e414c5f55" .
            "524c1012121c0a18494e56414c49445f46494e414c5f4d4f42494c455f55" .
            "524c101312230a1f494e56414c49445f5441475f494e5f46494e414c5f4d" .
            "4f42494c455f55524c101412290a25524544554e44414e545f4e45535445" .
            "445f46494e414c5f4d4f42494c455f55524c5f544147101512280a244d49" .
            "5353494e475f50524f544f434f4c5f494e5f46494e414c5f4d4f42494c45" .
            "5f55524c101612280a24494e56414c49445f50524f544f434f4c5f494e5f" .
            "46494e414c5f4d4f42494c455f55524c1017121e0a1a4d414c464f524d45" .
            "445f46494e414c5f4d4f42494c455f55524c101812240a204d495353494e" .
            "475f484f53545f494e5f46494e414c5f4d4f42494c455f55524c10191223" .
            "0a1f494e56414c49445f544c445f494e5f46494e414c5f4d4f42494c455f" .
            "55524c101a12190a15494e56414c49445f46494e414c5f4150505f55524c" .
            "101b12200a1c494e56414c49445f5441475f494e5f46494e414c5f415050" .
            "5f55524c101c12260a22524544554e44414e545f4e45535445445f46494e" .
            "414c5f4150505f55524c5f544147101d12200a1c4d554c5449504c455f41" .
            "50505f55524c535f464f525f4f5354595045101e12120a0e494e56414c49" .
            "445f4f5354595045101f12200a1c494e56414c49445f50524f544f434f4c" .
            "5f464f525f4150505f55524c102012220a1e494e56414c49445f5041434b" .
            "4147455f49445f464f525f4150505f55524c1021122d0a2955524c5f4355" .
            "53544f4d5f504152414d45544552535f434f554e545f455843454544535f" .
            "4c494d4954102212320a2e494e56414c49445f434841524143544552535f" .
            "494e5f55524c5f435553544f4d5f504152414d455445525f4b4559102712" .
            "340a30494e56414c49445f434841524143544552535f494e5f55524c5f43" .
            "5553544f4d5f504152414d455445525f56414c55451028122d0a29494e56" .
            "414c49445f5441475f494e5f55524c5f435553544f4d5f504152414d4554" .
            "45525f56414c55451029122d0a29524544554e44414e545f4e4553544544" .
            "5f55524c5f435553544f4d5f504152414d455445525f544147102a12140a" .
            "104d495353494e475f50524f544f434f4c102b12140a10494e56414c4944" .
            "5f50524f544f434f4c1034120f0a0b494e56414c49445f55524c102c121e" .
            "0a1a44455354494e4154494f4e5f55524c5f44455052454341544544102d" .
            "12160a12494e56414c49445f5441475f494e5f55524c102e12130a0f4d49" .
            "5353494e475f55524c5f544147102f12140a104455504c49434154455f55" .
            "524c5f4944103012120a0e494e56414c49445f55524c5f49441031121e0a" .
            "1a46494e414c5f55524c5f5355464649585f4d414c464f524d4544103212" .
            "230a1f494e56414c49445f5441475f494e5f46494e414c5f55524c5f5355" .
            "464649581033121c0a18494e56414c49445f544f505f4c4556454c5f444f" .
            "4d41494e1035121e0a1a4d414c464f524d45445f544f505f4c4556454c5f" .
            "444f4d41494e103612110a0d4d414c464f524d45445f55524c103712100a" .
            "0c4d495353494e475f484f5354103842ed010a22636f6d2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e6572726f7273421255726c46" .
            "69656c644572726f7250726f746f50015a44676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f" .
            "676f6f676c656164732f76312f6572726f72733b6572726f7273a2020347" .
            "4141aa021e476f6f676c652e4164732e476f6f676c654164732e56312e45" .
            "72726f7273ca021e476f6f676c655c4164735c476f6f676c654164735c56" .
            "315c4572726f7273ea0222476f6f676c653a3a4164733a3a476f6f676c65" .
            "4164733a3a56313a3a4572726f7273620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

