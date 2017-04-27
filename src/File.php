<?php
#=================================================================
#  A file  method package
#
# kidphp_file.
# Copyright (c) 2017 vimkid
#
# functionList: 
#       getLine    -> 获取文件指定行内容
#=================================================================

namespace Kidphp\KidphpFile;
class File {
    /**
    * 获取指定行内容
    *
    * @param $file 文件路径
    * @param $line 行数
    * @param $length 指定行返回内容长度
    */
    public function getLine($file, $line, $length = 1024){
        $returnTxt = null; // 初始化返回
        $i = 1; // 行数
        $handle = @fopen($file, "r");
        if ($handle) {
            while (!feof($handle)) {
                $buffer = fgets($handle, $length);
                if($line == $i) $returnTxt = $buffer;
                $i++;
            }
            fclose($handle);
        }
        return $returnTxt;
    }
}
