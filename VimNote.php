<?php

// 配置
    :set encoding=utf-8     // 更改编码
    :set nu!    // 显示行号
    :set [no]nc     // 忽略大小写，[no]ignorecase，如果只是想在搜索或者替换的时候偶尔忽略大小写，而不更改全局变量，加 \c即可： /nancy\c 


// 跳转
    [595]gg|G   // [到595行]首行|尾行

// 删除
    [324]dd     // 向下删除N行
    v/INSERT.*99cms_news\c/d  // 删除不包含字串‘INSERT.*99cms_news\c’  \c忽略大小写

// 复制粘贴
    yy      // 命令复制当前整行的内容到vi缓冲区
　　yw    // 复制当前光标所在位置到单词尾字符的内容到vi缓存区，相当于复制一个单词
　　y$    // 复制光标所在位置到行尾内容到缓存区
　　y^    // 复制光标所在位置到行首内容到缓存区
　　[324]yy   // 向下复制N行
　　[324]yw   // 向下复制N个单词

　　如果要复制第m行到第n行之间的内容，可以在末行模式中输入m，ny例如：3，5y复制第三行到第五行内容到缓存区。