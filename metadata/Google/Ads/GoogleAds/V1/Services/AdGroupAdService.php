<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/ad_group_ad_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class AdGroupAdService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupAd::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a860d0a3a676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f61645f67726f75705f61645f736572766963652e7072" .
            "6f746f1220676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365731a33676f6f676c652f6164732f676f6f676c656164732f" .
            "76312f7265736f75726365732f61645f67726f75705f61642e70726f746f" .
            "1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f" .
            "1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70" .
            "726f746f1a1e676f6f676c652f70726f746f6275662f7772617070657273" .
            "2e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f74" .
            "6f222c0a13476574416447726f757041645265717565737412150a0d7265" .
            "736f757263655f6e616d6518012001280922a8010a174d75746174654164" .
            "47726f75704164735265717565737412130a0b637573746f6d65725f6964" .
            "18012001280912480a0a6f7065726174696f6e7318022003280b32342e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e73657276696365" .
            "732e416447726f757041644f7065726174696f6e12170a0f706172746961" .
            "6c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e" .
            "6c7918042001280822c4020a12416447726f757041644f7065726174696f" .
            "6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c" .
            "652e70726f746f6275662e4669656c644d61736b125e0a1b706f6c696379" .
            "5f76616c69646174696f6e5f706172616d6574657218052001280b32392e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e" .
            "2e506f6c69637956616c69646174696f6e506172616d65746572123e0a06" .
            "63726561746518012001280b322c2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e7265736f75726365732e416447726f757041644800" .
            "123e0a0675706461746518022001280b322c2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e416447726f7570" .
            "4164480012100a0672656d6f76651803200128094800420b0a096f706572" .
            "6174696f6e2297010a184d7574617465416447726f757041647352657370" .
            "6f6e736512310a157061727469616c5f6661696c7572655f6572726f7218" .
            "032001280b32122e676f6f676c652e7270632e53746174757312480a0772" .
            "6573756c747318022003280b32372e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365732e4d7574617465416447726f75" .
            "704164526573756c74222e0a154d7574617465416447726f757041645265" .
            "73756c7412150a0d7265736f757263655f6e616d65180120012809328603" .
            "0a10416447726f757041645365727669636512a9010a0c47657441644772" .
            "6f7570416412352e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e73657276696365732e476574416447726f7570416452657175657374" .
            "1a2c2e676f6f676c652e6164732e676f6f676c656164732e76312e726573" .
            "6f75726365732e416447726f75704164223482d3e493022e122c2f76312f" .
            "7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f616447" .
            "726f75704164732f2a7d12c5010a104d7574617465416447726f75704164" .
            "7312392e676f6f676c652e6164732e676f6f676c656164732e76312e7365" .
            "7276696365732e4d7574617465416447726f757041647352657175657374" .
            "1a3a2e676f6f676c652e6164732e676f6f676c656164732e76312e736572" .
            "76696365732e4d7574617465416447726f7570416473526573706f6e7365" .
            "223a82d3e4930234222f2f76312f637573746f6d6572732f7b637573746f" .
            "6d65725f69643d2a7d2f616447726f75704164733a6d75746174653a012a" .
            "42fc010a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e73657276696365734215416447726f757041645365727669636550" .
            "726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f" .
            "76312f73657276696365733b7365727669636573a20203474141aa022047" .
            "6f6f676c652e4164732e476f6f676c654164732e56312e53657276696365" .
            "73ca0220476f6f676c655c4164735c476f6f676c654164735c56315c5365" .
            "727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164" .
            "733a3a56313a3a5365727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

