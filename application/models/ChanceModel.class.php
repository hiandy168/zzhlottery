<?php
/**
 * 文件说明
 *
 * @filename    ChanceModel.class.php
 * @author      zouzehua<zzh787272581@163.com>
 * @version     0.1.0
 * @since       0.1.0 11/22/15 oomusou: 新增getLatest3Posts()
 * @time        2016/7/3 18:01
 */

namespace Yboard;


class ChanceModel extends CommonModel {
    public function __construct($options = null) {
        $this->_table = 'lty_chance';
        $this->_pk    = 'c_id';
        parent::__construct($options);
    }
}