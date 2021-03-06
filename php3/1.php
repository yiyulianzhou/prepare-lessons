<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				算术运算符
					+ - * / % ++ --
				字符串运算符
				赋值运算符
				比较运算符
				逻辑运算符
				位运算符
				其他运算符
	 */
	// % 取余(求模)
	// 操作数在运算之前都会转换为整数
	// 在除法和取余时，除数不得为0
	// 1.单双数的判断
	// 2.限定数值范围
	// 3.闰年计算(%4=0 且 %100 !=0 或 %400 =0)
		echo 10 % 3;
		echo '<br>';
		echo 10.5 % 3;
		echo '<br>';

		echo 1561100 % 100;
		echo '<hr>';

		//++ -- 自增 自减(递增/递减)
		//++在前 先 ++再赋值，++在后 先赋值 再++
		//--在前 先 --再赋值，--在后 先赋值 再--

		$a = 5;
		$a++;
		echo $a;
		echo '<br>';
		$b = 10;
		$b--;
		echo $b;

		echo '<hr>';
		$a = 5;
		echo $a++;
		echo ++$a;
		echo '<hr>';
		// ++在前 先++再赋值，++在后 先赋值再++
		// --在前 先--再赋值，--在后 先赋值再--
		// 运算值 | 输出值
		$a = 1;
		$b = 2;
			 //1|2     3|3   3|3
		$c = $a++ + ++$a + ++$b;
			 //3|4     7|6   3|4
		$d = $a++ - $c-- + $b++;
		// $a = 4;
		// $b = 4;
		// $c = 6;
		// $d = -1;
		echo $a;
		echo $b;
		echo $c;
		echo $d;

		echo '<hr />';
		$a = 135;
			//135|136    137|137
		$b = $a ++ + ++$a;
			//138|138  272|273
		$c = ++$a + $b++;
			//138|137 272|272 410|409
		$d = $a-- - --$b + $c--;//276
		echo $d;

		echo '<hr>';
		$h = 'z';
		echo ++$h;
		echo '<br>';
		echo $h;
		echo --$h;//递减字串 无效

		echo '<hr>';
		$a = true;
		settype($a,'int');//将布尔值强转为整型在做++/--运算
		echo ++$a;//对布尔值++ -- 无效
		var_dump($a);

 ?>