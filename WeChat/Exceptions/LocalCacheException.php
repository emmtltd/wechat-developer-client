<?php

// +----------------------------------------------------------------------
// | wechat-developer-client
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 合肥埃米特信息科技有限公司 [ http://www.emmetltd.com ]
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/emmtltd/wechat-developer-client
// +----------------------------------------------------------------------

namespace WeChat\Exceptions;

/***
 * 本地缓存异常
 * Class LocalCacheException
 * @package WeChat
 */
class LocalCacheException extends \Exception
{

    /**
     * @var array
     */
    public $raw = [];

    /**
     * LocalCacheException constructor.
     * @param string $message
     * @param integer $code
     * @param array $raw
     */
    public function __construct($message, $code = 0, $raw = [])
    {
        parent::__construct($message, intval($code));
        $this->raw = $raw;
    }

}