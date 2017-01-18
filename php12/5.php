<?php 
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	require './filesize.php';
	/*
		遍历目录
		opendir() 打开一个目录为资源
		readdir() 读取打开的资源，并返回一个文件名(子串)
		closedir() 关闭由opendir()打开的目录资源
	*/
	/**
	 * [mydir 遍历目录]
	 * @param string $dir [要遍历的目录]
	 * @param 遍历结果
	 */
	function mydir($dir) {
		//判断目录是否合法
		if(!file_exists($dir)){
			echo '目录或文件不合法！';
			return false;
		}
		$num = 0 ;
		//打开目录
		$handle = opendir($dir);

		//遍历目录
		$str = '';
		while(false !== ($filename=readdir($handle))) {
			//拼接一个路径
			$filepath = rtrim($dir,'/').'/'.$filename;
			$color = $num++ % 2 ==0? 'abcdef':'#fff';
			$str .='<tr bgcolor="'.$color.'">';
			$str .='<td>'.$filename.'</td>';
			$str .= '<td>'.getsize(filesize($filepath)).'</td>';
			$str .='<td>'.(filetype($filepath)=='dir'?'目录':'文件').'</td>';
			$str .='<td>'.date('Y-m-d H:i:s',filectime($filepath)).'</td>';
			$str .='<td>'.(is_readable($filepath)==1?'YES':'NO').'</td>';
			$str .='</tr>';
		}
		//关闭目录
		closedir($handle);
		return $str;
	}
	echo '<table border="1" align="center" cellspacing="0">';
	echo '<tr>';
	echo '<th>文件名</th>';
	echo '<th>文件大小</th>';
	echo '<th>目录/文件</th>';
	echo '<th>创建时间</th>';
	echo '<th>可读否</th>';
	echo '</tr>';

	echo mydir('./apache/');

	echo '</table>';
