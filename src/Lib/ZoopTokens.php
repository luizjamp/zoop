<?php

namespace Zoop\src\Lib;

class ZoopTokens implements \Zoop\src\Contracts\ZoopTokens {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopTokens constructor.
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource){
        $this->APIResource = $APIResource;
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function tokenizeCard($post){
        $api = 'cards/tokens';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function tokenizeBankAccount($post){
        $api = 'bank_accounts/tokens';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $token
     */
    public function get($token){
        $api = 'tokens' . $token;
        $this->APIResource->searchAPI($api);
    }
}