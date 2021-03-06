正则
    最难懂的四件事：
    1.道士的符文
    2.医生的处方
    3.女人的心
    4.还有程序员的正则

    正则表达式

简介：
    正则表达式（英语：Regular Expression，在代码中常简写为regex、regexp或RE），计算机科学的一个概念。正则表达式使用单个字符串来描述、匹配一系列符合某个句法规则的字符串。在很多文本编辑器里，正则表达式通常被用来检索、替换那些符合某个模式的文本。许多程序设计语言都支持利用正则表达式进行字符串操作。

历史：
    1940年，Warren McCulloch(沃伦.麦卡洛克)与Walter Pitts(沃尔特.皮茨)这两位神经生理方面的科学家,研究出了一种用数学方式来描述神经网络的新方法.将神经系统中的神经元描述成小而简单的自动控制元。
    
    1950年代，数学家Stephen Kleene(斯蒂芬·克莱尼)利用称之为“正则集合”的数学符号来描述此模型。
    
    之后,Unix之父:Ken Thompson(肯·汤普逊)将此符号系统引入编辑器QED，随后是Unix上的编辑器ed，并最终引入grep。自此以后，正则表达式被广泛地应用于各种Unix或类Unix系统的工具中。
    
    现在,你会在主流操作系统(*nix[Linux, Unix等]、Windows、HP、BeOS等)、主流的开发语言
    (delphi、Scala、PHP、C#、Java、C++、Objective-c、Swift、VB、Javascript、Ruby以及Python等)、数以亿万计的各种应用软件中，都可以看到正则表达式的身影.
    
    1.定界符
    !@#$%^&*()<> /
    2.原子
    是组成正则的最小单位，原子就是匹配一个字符

    
    2.1 普通字符
    数字/字母/下划线 0~9 A~Z a~z _
    2.2 特殊字符
    使用特殊字符，需要转义才能正常使用
    '' "" / . * + ? | () & ^ \
    需要匹配\ 必须使用四根\来转义
    2.3 非打印字符
    \f -- 分页符
    \r -- 回车符
    \n -- 换行符
    \t -- 制表符
    \v -- 垂直制表符
    2.4 通用字符
    \d 匹配任意一个十进制数字[0~9]
    \D 匹配任意一个十进制数字以外的字符

    \s 匹配任意一个空白字符[空格 tab \f\r\n\t\v]
    \S 匹配任意一个除了空白字符以外的一个字符
    (打死我，大写取反)
    2.5 原子表
    用中括号[]来表示自定义的原子，在以上方案无法满足时使用
    [abc] 匹配原子表中的任意一个字符
    [^abc] 匹配除了原子表中的任意一个字符

    3.元字符
    用来修饰其前面的原子出现的次数或者位置
    !(元字符不能单独出现)

    3.1限定符
    *       匹配其前面的 原子出现 0 次 1次 多次(不限次数，任意多次)
    +       匹配其前面的 原子出现 1次 多次(至少一次)
    ?       匹配其前面的 原子出现 0次 1次(至多一次)
    {n}     匹配其前面的 原子出现 正好n次
    {n,}    匹配其前面的 原子出现 至少n次
    {n,m}   匹配其前面的 原子出现 至少n次，至多m次
    3.2 边界限制
    ^ 或 \A 匹配字符串必须以某个字符开始
    $ 或 \Z 匹配字符串必须以某个字符结束

    \b 单词边界
    \B 除了单词边界以外的部分
    3.3 句号
    . 匹配任何一个字符，除了换行符(\n)
    3.4 模式选择符
    | 在多个模式之间，选择匹配一个匹配到的那个模式
    3.5 模式单元
    () 在括号中的内容当做一个整体，当作一个大原子
    () 子模式
    3.6 后向引用(最大99)
    \1 \2 \3
    \\1 \\2 \\3
    用()标记的原子就是一个子模式，独立的单元，
    所有哦的子模式匹配到的内容会被临时存储在临时缓存区的地方，以备后用
    4.模式修正符
    必须放在定界符的外面，而且是右边
    i   不区分大小写
    m   视为多行
    s   视为一行
    x   模式中的空白忽略不记(除非已经被转义)
    U   非贪婪模式(默认就是贪婪模式)
    (我没事就下个大游戏)
    (i miss youU)

    PS.关于模式匹配中的优先级
    1.\
    2.()(?:)(?=),[]
    3.* + ? {n}{n,}{n,m}
    4.^ $ \b \B \A \Z
    5.|