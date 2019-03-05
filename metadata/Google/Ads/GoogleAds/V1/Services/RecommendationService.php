<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/recommendation_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class RecommendationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\KeywordMatchType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Ad::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Recommendation::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae4180a3d676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f7265636f6d6d656e646174696f6e5f73657276696365" .
            "2e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e73657276696365731a2a676f6f676c652f6164732f676f6f676c6561" .
            "64732f76312f7265736f75726365732f61642e70726f746f1a36676f6f67" .
            "6c652f6164732f676f6f676c656164732f76312f7265736f75726365732f" .
            "7265636f6d6d656e646174696f6e2e70726f746f1a1c676f6f676c652f61" .
            "70692f616e6e6f746174696f6e732e70726f746f1a1e676f6f676c652f70" .
            "726f746f6275662f77726170706572732e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f22310a184765745265636f6d6d" .
            "656e646174696f6e5265717565737412150a0d7265736f757263655f6e61" .
            "6d65180120012809229e010a1a4170706c795265636f6d6d656e64617469" .
            "6f6e5265717565737412130a0b637573746f6d65725f6964180120012809" .
            "12520a0a6f7065726174696f6e7318022003280b323e2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e73657276696365732e4170706c" .
            "795265636f6d6d656e646174696f6e4f7065726174696f6e12170a0f7061" .
            "727469616c5f6661696c7572651803200128082290080a1c4170706c7952" .
            "65636f6d6d656e646174696f6e4f7065726174696f6e12150a0d7265736f" .
            "757263655f6e616d6518012001280912720a0f63616d706169676e5f6275" .
            "6467657418022001280b32572e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e73657276696365732e4170706c795265636f6d6d656e64" .
            "6174696f6e4f7065726174696f6e2e43616d706169676e42756467657450" .
            "6172616d6574657273480012620a07746578745f616418032001280b324f" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4170706c795265636f6d6d656e646174696f6e4f706572617469" .
            "6f6e2e546578744164506172616d6574657273480012630a076b6579776f" .
            "726418042001280b32502e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365732e4170706c795265636f6d6d656e646174" .
            "696f6e4f7065726174696f6e2e4b6579776f7264506172616d6574657273" .
            "480012740a117461726765745f6370615f6f70745f696e18052001280b32" .
            "572e676f6f676c652e6164732e676f6f676c656164732e76312e73657276" .
            "696365732e4170706c795265636f6d6d656e646174696f6e4f7065726174" .
            "696f6e2e5461726765744370614f7074496e506172616d65746572734800" .
            "1a590a1843616d706169676e427564676574506172616d6574657273123d" .
            "0a186e65775f6275646765745f616d6f756e745f6d6963726f7318012001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "651a450a10546578744164506172616d657465727312310a026164180120" .
            "01280b32252e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "7265736f75726365732e41641ad2010a114b6579776f7264506172616d65" .
            "74657273122e0a0861645f67726f757018012001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512580a0a6d617463" .
            "685f7479706518022001280e32442e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e656e756d732e4b6579776f72644d61746368547970" .
            "65456e756d2e4b6579776f72644d617463685479706512330a0e6370635f" .
            "6269645f6d6963726f7318032001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c75651a9a010a185461726765744370614f" .
            "7074496e506172616d657465727312360a117461726765745f6370615f6d" .
            "6963726f7318012001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c756512460a216e65775f63616d706169676e5f627564" .
            "6765745f616d6f756e745f6d6963726f7318022001280b321b2e676f6f67" .
            "6c652e70726f746f6275662e496e74363456616c756542120a106170706c" .
            "795f706172616d6574657273229e010a1b4170706c795265636f6d6d656e" .
            "646174696f6e526573706f6e7365124c0a07726573756c74731801200328" .
            "0b323b2e676f6f676c652e6164732e676f6f676c656164732e76312e7365" .
            "7276696365732e4170706c795265636f6d6d656e646174696f6e52657375" .
            "6c7412310a157061727469616c5f6661696c7572655f6572726f72180220" .
            "01280b32122e676f6f676c652e7270632e53746174757322320a19417070" .
            "6c795265636f6d6d656e646174696f6e526573756c7412150a0d7265736f" .
            "757263655f6e616d6518012001280922f8010a1c4469736d697373526563" .
            "6f6d6d656e646174696f6e5265717565737412130a0b637573746f6d6572" .
            "5f696418012001280912710a0a6f7065726174696f6e7318032003280b32" .
            "5d2e676f6f676c652e6164732e676f6f676c656164732e76312e73657276" .
            "696365732e4469736d6973735265636f6d6d656e646174696f6e52657175" .
            "6573742e4469736d6973735265636f6d6d656e646174696f6e4f70657261" .
            "74696f6e12170a0f7061727469616c5f6661696c7572651802200128081a" .
            "370a1e4469736d6973735265636f6d6d656e646174696f6e4f7065726174" .
            "696f6e12150a0d7265736f757263655f6e616d6518012001280922f6010a" .
            "1d4469736d6973735265636f6d6d656e646174696f6e526573706f6e7365" .
            "126c0a07726573756c747318012003280b325b2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e73657276696365732e4469736d697373" .
            "5265636f6d6d656e646174696f6e526573706f6e73652e4469736d697373" .
            "5265636f6d6d656e646174696f6e526573756c7412310a15706172746961" .
            "6c5f6661696c7572655f6572726f7218022001280b32122e676f6f676c65" .
            "2e7270632e5374617475731a340a1b4469736d6973735265636f6d6d656e" .
            "646174696f6e526573756c7412150a0d7265736f757263655f6e616d6518" .
            "01200128093289050a155265636f6d6d656e646174696f6e536572766963" .
            "6512bd010a114765745265636f6d6d656e646174696f6e123a2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e73657276696365732e47" .
            "65745265636f6d6d656e646174696f6e526571756573741a312e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e7265736f75726365732e" .
            "5265636f6d6d656e646174696f6e223982d3e493023312312f76312f7b72" .
            "65736f757263655f6e616d653d637573746f6d6572732f2a2f7265636f6d" .
            "6d656e646174696f6e732f2a7d12d2010a134170706c795265636f6d6d65" .
            "6e646174696f6e123c2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e73657276696365732e4170706c795265636f6d6d656e64617469" .
            "6f6e526571756573741a3d2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e73657276696365732e4170706c795265636f6d6d656e6461" .
            "74696f6e526573706f6e7365223e82d3e493023822332f76312f63757374" .
            "6f6d6572732f7b637573746f6d65725f69643d2a7d2f7265636f6d6d656e" .
            "646174696f6e733a6170706c793a012a12da010a154469736d6973735265" .
            "636f6d6d656e646174696f6e123e2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365732e4469736d6973735265636f6d" .
            "6d656e646174696f6e526571756573741a3f2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e73657276696365732e4469736d69737352" .
            "65636f6d6d656e646174696f6e526573706f6e7365224082d3e493023a22" .
            "352f76312f637573746f6d6572732f7b637573746f6d65725f69643d2a7d" .
            "2f7265636f6d6d656e646174696f6e733a6469736d6973733a012a428102" .
            "0a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "7365727669636573421a5265636f6d6d656e646174696f6e536572766963" .
            "6550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164" .
            "732f76312f73657276696365733b7365727669636573a20203474141aa02" .
            "20476f6f676c652e4164732e476f6f676c654164732e56312e5365727669" .
            "636573ca0220476f6f676c655c4164735c476f6f676c654164735c56315c" .
            "5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c65" .
            "4164733a3a56313a3a5365727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

