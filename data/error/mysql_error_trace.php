<?php exit(); ?> Time: 2014-03-29 10:04:17. || Page: /admin/goodsbrand.php?act=edit&id=320&goodsid= || IP: 127.0.0.1 || Error: Unknown column 'goodsid' in 'field list' Error sql: UPDATE `lc_goodsbrand` SET 
								`parentid`   = '0',
								`parentstr`  = '0,',
								`classname`  = '格兰仕（Galanz）',
								`orderid`    = '54',
								`checkinfo`  = 'true',
								`goodsid`    = '',
								`rename`     = '',
								`logo`   	 = '',
								`url`   	 = ''
								  WHERE `id` = 320
<?php exit(); ?> Time: 2014-03-29 10:05:46. || Page: /admin/goodsbrand.php?act=edit&id=319&goodsid= || IP: 127.0.0.1 || Error: Unknown column 'goodsid' in 'field list' Error sql: UPDATE `lc_goodsbrand` SET 
								`parentid`   = '0',
								`parentstr`  = '0,',
								`classname`  = '华日',
								`orderid`    = '53',
								`checkinfo`  = 'true',
								`goodsid`    = '',
								`rename`     = '',
								`logo`   	 = '',
								`url`   	 = ''
								  WHERE `id` = 319
<?php exit(); ?> Time: 2014-03-29 10:46:33. || Page: / || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ';
		ORDER BY orderid DESC' at line 2 Error sql: SELECT * FROM `lc_ads_list` WHERE `classid`=21 AND `checkinfo`='true' 
		AND starttime<='1396022400' AND endtime>='1396022400';
		ORDER BY orderid DESC
<?php exit(); ?> Time: 2014-04-01 15:45:53. || Page: /m/index.php || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY posttime ' at line 2 Error sql: SELECT `lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods`  INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
AND `lc_goodsattribute`.g_id=`lc_goods`.id WHERE `lc_goodsattribute`.a_id=3 `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY posttime desc LIMIT 6
<?php exit(); ?> Time: 2014-04-02 17:17:55. || Page: /manage/goods.php?act=list&nav=2 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as tot FROM `lc_usercomment`' at line 1 Error sql: SELECT cont(`id`) id as tot FROM `lc_usercomment` 
<?php exit(); ?> Time: 2014-04-02 17:18:11. || Page: /manage/goods.php?act=list&nav=2 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as tot FROM `lc_usercomment`' at line 1 Error sql: SELECT count(`id`) id as tot FROM `lc_usercomment` 
<?php exit(); ?> Time: 2014-04-02 17:26:27. || Page: /manage/goods.php?act=list&nav=com || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0, 20' at line 1 Error sql:  limit 0, 20
<?php exit(); ?> Time: 2014-04-03 08:41:36. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.title AS g_title,`lc_goods`.picurl FROM `lc_usercomment` INNER JOIN  (' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title, `lc_usercomment`.posttime, 
			lc_member`.username ,`lc_goods`.title AS g_title,`lc_goods`.picurl FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) ON  `lc_usercomment` .gid=lc_goods.id AND `lc_usercomment` .uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:42:26. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.title AS g_title FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_mem' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title, `lc_usercomment`.posttime, 
			lc_member`.username ,`lc_goods`.title AS g_title FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) ON  `lc_usercomment` .gid=lc_goods.id AND `lc_usercomment` .uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:42:46. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`l' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime, 
			lc_member`.username ,`lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) ON  `lc_usercomment` .gid=lc_goods.id AND `lc_usercomment` .uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:43:21. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`l' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime, 
			lc_member`.username ,`lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:44:09. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.g' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime, 
			lc_member`.username 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:44:22. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`l' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime
			,lc_member`.username,`lc_goods`.title AS g_title 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:44:39. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.g' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime
			,lc_member`.username
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 08:46:58. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: Unknown column 'lc_goods' in 'field list' Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime
			,`lc_member`.username,`lc_goods`.title AS g_title,`lc_goods`.picurl,
			`lc_goods`payfreight 
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id
<?php exit(); ?> Time: 2014-04-03 09:21:39. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.content,,`lc_member`.username,`lc_goods`.title AS g_title,
			`lc_goods`.picur' at line 2 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime
			`lc_usercomment`.content,,`lc_member`.username,`lc_goods`.title AS g_title,
			`lc_goods`.picurl,`lc_goods`.checkinfo,`lc_goods`.salesprice,`lc_goods`.housenum
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id ORDER BY `lc_usercomment`.posttime DESC
<?php exit(); ?> Time: 2014-04-03 09:34:16. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.checkinfo,`lc_goods`.salesprice,`lc_goods`.housenum
			FROM `lc_usercomment` I' at line 4 Error sql: SELECT  `lc_usercomment`.id,`lc_usercomment`.title,`lc_usercomment`.posttime
			,`lc_member`.username,`lc_goods`.title AS g_title,`lc_goods`.picurl,
			`lc_usercomment`.content,`lc_usercomment`.reply
			`lc_goods`.checkinfo,`lc_goods`.salesprice,`lc_goods`.housenum
			FROM `lc_usercomment` INNER JOIN  (`lc_goods`,`lc_member`) 
			ON  `lc_usercomment`.gid=lc_goods.id AND `lc_usercomment`.uid=`lc_member`.id WHERE `lc_usercomment`.id=''
<?php exit(); ?> Time: 2014-04-03 09:50:26. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:52:26. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:52:37. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:53:12. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:53:45. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:54:27. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:56:33. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 09:59:04. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 10:04:25. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 10:06:47. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 10:06:56. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 10:07:35. || Page: /manage/goods.php?act=com_edit&id=8 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND checkinfo=true' at line 1 Error sql: SELECT `parentid` FROM `lc_goodscategory` WHERE `id`= AND checkinfo=true
<?php exit(); ?> Time: 2014-04-03 10:41:57. || Page: /manage/goods.php?act=list&nav=com || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `id` = 6' at line 1 Error sql: DELETE FROM `lc_usercomment` WHERE `id` = 7  WHERE `id` = 6 
<?php exit(); ?> Time: 2014-04-03 15:15:29. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: Unknown column 'orderid' in 'field list' Error sql: SELECT MAX(orderid) AS `orderid` FROM `lc_bug`
<?php exit(); ?> Time: 2014-04-03 15:15:59. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: Unknown column 'orderid' in 'field list' Error sql: SELECT MAX(orderid) AS `orderid` FROM `lc_bug`
<?php exit(); ?> Time: 2014-04-03 15:17:49. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: Unknown column 'orderid' in 'field list' Error sql: SELECT MAX(orderid) AS `orderid` FROM `lc_bug`
<?php exit(); ?> Time: 2014-04-03 15:28:38. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''345','','1','1396510118')' at line 1 Error sql: INSERT INTO `lc_bug` VALUES (null'345','','1','1396510118')
<?php exit(); ?> Time: 2014-04-03 15:29:11. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3423','','1','1396510151')' at line 1 Error sql: INSERT INTO `lc_bug` VALUES (null'3423','','1','1396510151')
<?php exit(); ?> Time: 2014-04-03 15:49:11. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''345435','','1','1396511351')' at line 1 Error sql: INSERT INTO `lc_bug` VALUES (null'345435','','1','1396511351')
<?php exit(); ?> Time: 2014-04-03 15:57:33. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''111','dfdsfdsf','1','1396511853','0')' at line 1 Error sql: INSERT INTO `lc_bug` VALUES (null'111','dfdsfdsf','1','1396511853','0')
<?php exit(); ?> Time: 2014-04-03 15:57:41. || Page: /manage/bug.php?act=add || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''23432','324324','1','1396511861','0')' at line 1 Error sql: INSERT INTO `lc_bug` VALUES (null'23432','324324','1','1396511861','0')
<?php exit(); ?> Time: 2014-04-03 17:25:27. || Page: /manage/bug.php?act=list || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'by time desc' at line 1 Error sql: SELECT `lc_bug`.*,`lc_admin`.username FROM `lc_bug` INNER JOIN `lc_admin` ON `lc_bug`.u_id=`lc_admin`.idorder by time desc
<?php exit(); ?> Time: 2014-04-03 17:56:24. || Page: /manage/bug.php?act=edit_com_sta&id=4&sign=1&from=L21hbmFnZS9idWcucGhwP2FjdD1saXN0 || IP: 127.0.0.1 || Error: Unknown column 'isshow' in 'field list' Error sql: UPDATE `lc_bug` SET `isshow`='' WHERE id='4' 
<?php exit(); ?> Time: 2014-04-04 09:05:06. || Page: /manage/index.php?act=mywork || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-04-04 09:05:11. || Page: /manage/index.php?act=default&from=mywork&menukey=10_goods || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-04-08 11:20:11. || Page: /shopcart.php?act=del || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 Error sql: DELETE FROM `lc_goodsshopcart` WHERE id in (  ) 
<?php exit(); ?> Time: 2014-04-08 14:57:03. || Page: /manage/goods.php?act=edit&id=154 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`    = '1000.00',
												`goodsNO`  = '',
												`buyprice`  = '0.00' at line 4 Error sql: UPDATE `lc_goodsattr` SET
												`attrname` = '4,10,14,20',
												`housenum` = '10',
												price`    = '1000.00',
												`goodsNO`  = '',
												`buyprice`  = '0.00'
												WHERE `id` = 177
<?php exit(); ?> Time: 2014-04-08 15:03:57. || Page: /manage/goods.php?act=edit&id=154 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DELETR FROM `lc_goodsattr` WHERE `id` = 178' at line 1 Error sql: DELETR FROM `lc_goodsattr` WHERE `id` = 178
<?php exit(); ?> Time: 2014-04-08 16:55:57. || Page: /manage/goods.php?act=list || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `lc_goods`  left join `lc_goodsattr `on `lc_goods`.id=`lc_goodsattr`.goodsi' at line 9 Error sql: SELECT `lc_goods`.id,`lc_goods`.title,`lc_goods`.salesprice,`lc_goods`.buyprice,			  	
			`lc_goods`.picurl,`lc_goods`.payfreight,`lc_goods`.checkinfo,`lc_goods`.posttime,
			min(`lc_goodsattr`.price) as min_price,
			max(`lc_goodsattr`.price) as max_price,
			min(`lc_goodsattr`.buyprice) as min_buyprice,
			max(`lc_goodsattr`.buyprice) as max_buyprice,
			sum(`lc_goodsattr`.housenum) as housenum 
		FROM `lc_goods` 
		FROM `lc_goods`  left join `lc_goodsattr `on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.delstate='' group by `lc_goods`.id  order by `lc_goods`.orderid desc
<?php exit(); ?> Time: 2014-04-08 16:57:09. || Page: /manage/goods.php?act=list || IP: 127.0.0.1 || Error: Incorrect table name 'lc_goodsattr ' Error sql: SELECT `lc_goods`.id,`lc_goods`.title,`lc_goods`.salesprice,`lc_goods`.buyprice,			  	
			`lc_goods`.picurl,`lc_goods`.payfreight,`lc_goods`.checkinfo,`lc_goods`.posttime,
			min(`lc_goodsattr`.price) as min_price,
			max(`lc_goodsattr`.price) as max_price,
			min(`lc_goodsattr`.buyprice) as min_buyprice,
			max(`lc_goodsattr`.buyprice) as max_buyprice,
			sum(`lc_goodsattr`.housenum) as housenum 
		FROM `lc_goods`  left join `lc_goodsattr `on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.delstate='' group by `lc_goods`.id  order by `lc_goods`.orderid desc
<?php exit(); ?> Time: 2014-04-08 16:58:10. || Page: /manage/goods.php?act=list || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.delstate='' group by `lc' at line 8 Error sql: SELECT `lc_goods`.id,`lc_goods`.title,`lc_goods`.salesprice,`lc_goods`.buyprice,			  	
			`lc_goods`.picurl,`lc_goods`.payfreight,`lc_goods`.checkinfo,`lc_goods`.posttime,
			min(`lc_goodsattr`.price) as min_price,
			max(`lc_goodsattr`.price) as max_price,
			min(`lc_goodsattr`.buyprice) as min_buyprice,
			max(`lc_goodsattr`.buyprice) as max_buyprice,
			sum(`lc_goodsattr`.housenum) as housenum 
		FROM `lc_goods`  left join `lc_goodsattr` `on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.delstate='' group by `lc_goods`.id  order by `lc_goods`.orderid desc
<?php exit(); ?> Time: 2014-04-08 17:13:12. || Page: /manage/goods.php?act=list || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'join1 `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`' at line 8 Error sql: SELECT `lc_goods`.id,`lc_goods`.title,`lc_goods`.salesprice,`lc_goods`.buyprice,			  	
			`lc_goods`.picurl,`lc_goods`.payfreight,`lc_goods`.checkinfo,`lc_goods`.posttime,
			min(`lc_goodsattr`.price) as min_price,
			max(`lc_goodsattr`.price) as max_price,
			min(`lc_goodsattr`.buyprice) as min_buyprice,
			max(`lc_goodsattr`.buyprice) as max_buyprice,
			sum(`lc_goodsattr`.housenum) as housenum 
		FROM `lc_goods`  left join1 `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.delstate='' group by `lc_goods`.id  order by `lc_goods`.orderid desc
<?php exit(); ?> Time: 2014-04-08 17:26:57. || Page: /item_show.php?act=selectprice&id=135&norm=5,10,18,25&default=0.29286141390912235 || IP: 127.0.0.1 || Error: Unknown column 'lc_goodsattr.goodsid.id' in 'where clause' Error sql: select `lc_goodsattr`.`price` from `lc_goods`,`lc_goodsattr` WHERE `lc_goods`.checkinfo=true AND `lc_goods`.delstate=''  and `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and `lc_goodsattr`.`attrname`='5,10,18,25' AND `lc_goodsattr`.`goodsid`.id='135'
<?php exit(); ?> Time: 2014-04-08 17:35:19. || Page: /item_show.php?cid=111&id=135 || IP: 127.0.0.1 || Error: Column 'id' in where clause is ambiguous Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `id` = 135 AND checkinfo='true' and delstate = ''
<?php exit(); ?> Time: 2014-04-08 17:35:57. || Page: /item_show.php?cid=111&id=135 || IP: 127.0.0.1 || Error: Mixing of GROUP columns (MIN(),MAX(),COUNT(),...) with no GROUP columns is illegal if there is no GROUP BY clause Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.`id` = 135 AND `lc_goods`.checkinfo='true' and `lc_goods`.delstate = ''
<?php exit(); ?> Time: 2014-04-09 09:00:33. || Page: /index.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
IN' at line 1 Error sql: SELECT `lc_goods`.norm`,lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`) 
ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
AND `lc_goodsattribute`.g_id=`lc_goods`.id
 WHERE `lc_goodsattribute`.a_id=2 AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5
<?php exit(); ?> Time: 2014-04-09 09:01:58. || Page: /index.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
IN' at line 1 Error sql: SELECT `lc_goods`.norm`,lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN `lc_goodsattr`
ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`

 WHERE  `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5
<?php exit(); ?> Time: 2014-04-09 09:02:17. || Page: /index.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN `lc_goodsattr`
ON `lc_goods`' at line 1 Error sql: SELECT `lc_goods`.norm,lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN `lc_goodsattr`
ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`

 WHERE  `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5
<?php exit(); ?> Time: 2014-04-09 09:02:27. || Page: /index.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_go' at line 1 Error sql: SELECT `lc_goods`.norm`,`lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN `lc_goodsattr`
ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`

 WHERE  `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5
<?php exit(); ?> Time: 2014-04-09 09:02:30. || Page: /index.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_go' at line 1 Error sql: SELECT `lc_goods`.norm`,`lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
INNER JOIN `lc_goodsattr`
ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`

 WHERE  `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5
<?php exit(); ?> Time: 2014-04-09 10:20:43. || Page: /shopcart.php?act=add&goods_id=154&goods_num=1&goods_price=2000.00&goods_norm=5%2C10%2C14%2C20&rn=88124 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '10,14,20' at line 2 Error sql: select gid from `lc_goodsshopcart` where uid = 88 AND gid = 154 and Status = 'cart' 
		AND norm=5,10,14,20
<?php exit(); ?> Time: 2014-04-09 10:20:50. || Page: /shopcart.php?act=add&goods_id=154&goods_num=1&goods_price=2000.00&goods_norm=5%2C10%2C14%2C20&rn=4101 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '10,14,20' at line 2 Error sql: select gid from `lc_goodsshopcart` where uid = 88 AND gid = 154 and Status = 'cart' 
		AND norm=5,10,14,20
<?php exit(); ?> Time: 2014-04-09 10:20:55. || Page: /shopcart.php?act=add&goods_id=154&goods_num=1&goods_price=2000.00&goods_norm=5%2C10%2C14%2C20&rn=44540 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '10,14,20' at line 2 Error sql: select gid from `lc_goodsshopcart` where uid = 88 AND gid = 154 and Status = 'cart' 
		AND norm=5,10,14,20
<?php exit(); ?> Time: 2014-04-09 10:21:56. || Page: /shopcart.php?act=add&goods_id=154&goods_num=1&goods_price=2000.00&goods_norm=5%2C10%2C14%2C20&rn=87968 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '10,14,20' at line 2 Error sql: select gid from `lc_goodsshopcart` where uid = 88 AND gid = 154 and Status = 'cart' 
		AND norm=5,10,14,20
<?php exit(); ?> Time: 2014-04-09 10:27:22. || Page: /shopcart.php?act=list || IP: 127.0.0.1 || Error: Unknown column 'picurl' in 'field list' Error sql: select `lc_goodsshopcart`.id, gid,picurl,title,salesprice,num,housenum,`lc_goodsshopcart`.norm from `lc_goodsshopcart`,`lc_goodsattr` where `lc_goodsattr`.goodsid = `lc_goodsshopcart`.gid AND uid = 88 AND Status = 'cart'
<?php exit(); ?> Time: 2014-04-09 15:34:53. || Page: /item_show.php?cid=111&id=154 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '，
		sum(`lc_goodsattr`.housenum) as tot_housenum
		FROM `lc_goods` 
		left ' at line 5 Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price，
		sum(`lc_goodsattr`.housenum) as tot_housenum
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.`id` = 154 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = '' group by `lc_goods`.id
		
<?php exit(); ?> Time: 2014-04-09 15:35:22. || Page: /item_show.php?act=selectprice&id=154&norm=4,10,14,20&default=0.023505757562816143 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '，`lc_goodsattr`.`housenum` from `lc_goods`,`lc_goodsattr` WHERE `lc_goods`.che' at line 1 Error sql: select `lc_goodsattr`.`price`，`lc_goodsattr`.`housenum` from `lc_goods`,`lc_goodsattr` WHERE `lc_goods`.checkinfo=true AND `lc_goods`.delstate=''  and `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and `lc_goodsattr`.`attrname`='4,10,14,20' AND `lc_goodsattr`.`goodsid`='154'
<?php exit(); ?> Time: 2014-04-09 17:11:00. || Page: /index.php || IP: 127.0.0.1 || Error: Column 'id' in field list is ambiguous Error sql: SELECT id,picurl,title,description,salesprice,classid FROM 
`lc_goods` INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`) 
 ON `lc_goodsattribute`.g_id=`lc_goods`.id
 AND  `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
WHERE `lc_goodsattr`.housenum>0 AND `lc_goodsattribute`.a_id=2 AND `checkinfo`='true' AND `delstate` = '' ORDER BY RAND() LIMIT 15
<?php exit(); ?> Time: 2014-04-11 19:25:16. || Page: / || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-04-11 19:26:40. || Page: / || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-04-11 19:31:25. || Page: / || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-04-14 13:53:57. || Page: /orderinfo.php || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0)' at line 1 Error sql: select * from `lc_postmode` where id in (0,,0)
<?php exit(); ?> Time: 2014-04-15 09:18:53. || Page: /m/ || IP: 127.0.0.1 || Error: Unknown column 'lc_goods.phpone' in 'where clause' Error sql: SELECT `lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
AND `lc_goodsattribute`.g_id=`lc_goods`.id 
WHERE `lc_goodsattribute`.a_id=2 AND`lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = ''  
AND `lc_goods`.phpone='1'
ORDER BY RAND() LIMIT 3
<?php exit(); ?> Time: 2014-04-16 11:19:23. || Page: /m/shopcart.php?act=update&id=166&num=1&goods_num=0&rn=19190 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:19:23. || Page: /m/shopcart.php?act=update&id=166&num=12&goods_num=0&rn=74934 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:24:19. || Page: /m/shopcart.php?act=update&id=166&num=10&goods_num=-1&rn=64868 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:24:21. || Page: /m/shopcart.php?act=update&id=166&num=10&goods_num=1&rn=63620 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:24:22. || Page: /m/shopcart.php?act=update&id=166&num=10&goods_num=-1&rn=46257 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:24:22. || Page: /m/shopcart.php?act=update&id=166&num=10&goods_num=1&rn=72248 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:26:29. || Page: /m/shopcart.php?act=update&id=166&num=1&goods_num=0&rn=63692 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:26:34. || Page: /m/shopcart.php?act=update&id=166&num=1&goods_num=0&rn=57593 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-16 11:27:29. || Page: /m/shopcart.php?act=update&id=166&num=1&goods_num=0&rn=74328 || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = 166' at line 1 Error sql: UPDATE `lc_goodsshopcart` SET num =  WHERE id = 166
<?php exit(); ?> Time: 2014-04-17 18:40:11. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:40:15. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:40:20. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:43:26. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:43:28. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:50:41. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:51:15. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:51:33. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:52:22. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:54:25. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-17 18:56:48. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 09:41:30. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:08:43. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:08:45. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:13:43. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:17:58. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:19:34. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:21:10. || Page: /m/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:28:38. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:28:52. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:28:54. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:28:58. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:29:16. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-18 11:29:59. || Page: /M/member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 16:54:58. || Page: /manage/index.php?act=mywork || IP: 192.168.6.205 || Error: Table 'lcshop_db.lc_goods' doesn't exist Error sql: select sum(housenum) from `lc_goods` where checkinfo = 'true' and delstate = ''
<?php exit(); ?> Time: 2014-04-23 16:57:29. || Page: / || IP: 192.168.6.205 || Error: Table 'lcshop_db.lc_goods' doesn't exist Error sql: SELECT `lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM 
	`lc_goods` INNER JOIN
	(`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and  `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0 AND `lc_goodsattribute`.a_id=2 and (`lc_goods`.`classid`=1 OR `lc_goods`.parentstr like '%,1,%') AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' GROUP BY id ORDER BY  orderid ASC LIMIT 0,8
<?php exit(); ?> Time: 2014-04-23 17:03:02. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:03:06. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:03:08. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:03:10. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:18:54. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:18:55. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:19:01. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:19:40. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:31:21. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:31:23. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:43:44. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 17:43:45. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:00:23. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:25:54. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:25:55. || Page: /member.php?act=selectarea&parentid= || IP: 127.0.0.1 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:34:52. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:35:00. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:35:00. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:35:03. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:35:12. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:36:38. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:38:14. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:38:48. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-23 18:40:13. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-24 15:59:44. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-04-28 15:18:45. || Page: /manage/order.php?act=edit&id=91&from=L21hbmFnZS9vcmRlci5waHA/YWN0PWxpc3QmY2hlY2tpbmZvPTA= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0)' at line 1 Error sql: select * from `lc_postmode` where id in (0,,0)
<?php exit(); ?> Time: 2014-04-28 16:03:44. || Page: /member.php?act=ordercontent&orderid=93 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '='4'' at line 1 Error sql: select classname from `lc_postmode` where id in ='4'
<?php exit(); ?> Time: 2014-04-28 17:03:53. || Page: /item_show.php?cid=111&id=135 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 Error sql: SELECT `135` FROM `lc_` WHERE `id`=
<?php exit(); ?> Time: 2014-04-28 18:25:45. || Page: /item_show.php?cid=111&id=135 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select (@mycnt := @mycnt + 1) as rank from (select sum(num) as s_num,gid from lc' at line 2 Error sql:  SET @mycnt=0;
select (@mycnt := @mycnt + 1) as rank from (select sum(num) as s_num,gid from lc_goodsshopcart where `Status`='order' GROUP BY gid order by  s_num desc) as a  where gid=135
			
<?php exit(); ?> Time: 2014-04-29 13:15:04. || Page: /data/payment/kuaiqian/receive.php?dealTime=20140429131455&payAmount=1&signType=1&errCode=&merchantAcctId=1002149156301&orderTime=20140429131237&dealId=1488217849&version=v2.0&bankId=POST&fee=1&bankDealId=140429303161&payResult=10&ext1=&ext2=&orderAmount=1&signMsg=101A1B00F0A0B9795BBC80A402EF2BA7&payType=10&language=1&orderId=1398748564 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'set checkinfo=1 where UserID=88 and orderlistnum=''' at line 1 Error sql: update lc_goodsorder set set checkinfo=1 where UserID=88 and orderlistnum=''
<?php exit(); ?> Time: 2014-04-30 17:12:01. || Page: /pay.php?act=setpay&olnum=1398825463 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 Error sql: SELECT * FROM `lc_payment` WHERE id=
<?php exit(); ?> Time: 2014-05-06 12:37:57. || Page: /item_show.php?cid=111&id=135 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1399487877 AND 1399351077' at line 4 Error sql:  SELECT sum(lc_goodsshopcart.num) as num FROM lc_goodsshopcart INNER JOIN lc_goodsorder
	 	 	ON lc_goodsorder.orderlistnum=lc_goodsshopcart.gorderlistnum  
			WHERE GID='135' AND `Status`='order'
			AND lc_goodsorder.POSTTIME BETWEEN unix_timestamp 1399487877 AND 1399351077
			
<?php exit(); ?> Time: 2014-05-06 14:33:34. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: Column count doesn't match value count at row 1 Error sql: INSERT INTO `lc_attribute` VALUES (null,'234324')
<?php exit(); ?> Time: 2014-05-06 14:34:57. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: Column count doesn't match value count at row 1 Error sql: INSERT INTO `lc_attribute` VALUES (null,'345435')
<?php exit(); ?> Time: 2014-05-06 14:36:12. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: Column count doesn't match value count at row 1 Error sql: INSERT INTO `lc_attribute` VALUES (null,'234324')
<?php exit(); ?> Time: 2014-05-06 14:37:17. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'false' at line 1 Error sql: INSERT INTO `lc_attribute` VALUES (null,'234324')false
<?php exit(); ?> Time: 2014-05-08 17:09:26. || Page: /manage/goodstype.php?act=addattr&attr_i=9 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 9,1' at line 1 Error sql: SELECT `attrvalue` FROM `lc_goodstypeattr` WHERE `typeid` =  limit 9,1
<?php exit(); ?> Time: 2014-07-19 11:05:15. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: Column count doesn't match value count at row 1 Error sql: REPLACE INTO `lc_attribute` VALUES ('1','热卖推荐'),('2','特价推荐')
<?php exit(); ?> Time: 2014-07-19 13:18:35. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'p' in 'field list' Error sql: SELECT `lc_goods`.id,p
	icurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
	INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`) 
	ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
	AND `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0  AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' 
	
	  ORDER BY RAND() 
<?php exit(); ?> Time: 2014-07-19 13:19:24. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'p' in 'field list' Error sql: SELECT `lc_goods`.id,p
	icurl,title,description,classid,`lc_goodsattr`.`price` FROM `lc_goods` 
	INNER JOIN (`lc_goodsattr`,`lc_goodsattribute`) 
	ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid`
	AND `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0  AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' 
	 AND `lc_goodsattribute`.a_id=4 
	  ORDER BY RAND() 
<?php exit(); ?> Time: 2014-07-19 13:20:45. || Page: /manage/goodsattribute.php?act=subadd || IP: 192.168.6.205 || Error: Column count doesn't match value count at row 1 Error sql: REPLACE INTO `lc_attribute` VALUES ('4','新品上市')
<?php exit(); ?> Time: 2014-07-19 15:33:18. || Page: / || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' GROUP BY id O' at line 4 Error sql: SELECT `lc_goods`.id,picurl,title,description,classid,`lc_goodsattr`.`price` FROM 
	`lc_goods` INNER JOIN
	(`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and  `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0 AND `lc_goodsattribute`.a_id=3 and  `lc_goods`.parentstr like '%,429,%') AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' GROUP BY id ORDER BY  orderid ASC LIMIT 0,10
<?php exit(); ?> Time: 2014-07-19 16:36:19. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'image' in 'where clause' Error sql: SELECT id,picurl,title,linkurl FROM `lc_ads_list` WHERE `classid` = 6 AND `checkinfo`='true' AND `starttime`<=1405699200 AND `endtime`>=1405699200   AND admode=image  ORDER BY orderid DESC 
<?php exit(); ?> Time: 2014-07-23 11:06:21. || Page: /agree_aticle.php?type=1&Aticle_id=12&toJSONString=%7B%22j%22%3A-1%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A679%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE a_id='12'' at line 1 Error sql: REPLACE `lc_article_agree` SET  yes=yes+1 WHERE a_id='12'
<?php exit(); ?> Time: 2014-07-23 11:10:59. || Page: /agree_aticle.php?type=1&Aticle_id=12&toJSONString=%7B%22j%22%3A-1%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A679%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: Duplicate entry '12' for key 'PRIMARY' Error sql: INSERT INTO `lc_article_agree` VALUES ('12','1','0')
<?php exit(); ?> Time: 2014-07-23 11:11:07. || Page: /agree_aticle.php?type=0&Aticle_id=12&toJSONString=%7B%22j%22%3A-1%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A679%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: Duplicate entry '12' for key 'PRIMARY' Error sql: INSERT INTO `lc_article_agree` VALUES ('12','0','1')
<?php exit(); ?> Time: 2014-07-23 11:11:26. || Page: /agree_aticle.php?type=1&Aticle_id=12&toJSONString=%7B%22j%22%3A-1%2C%22BSHARE_SHOST_NAME%22%3A%22http%3A%2F%2Fstatic.bshare.cn%22%2C%22BSHARE_BUTTON_HOST%22%3A%22http%3A%2F%2Fb.bshare.cn%22%2C%22BSHARE_WEB_HOST%22%3A%22http%3A%2F%2Fwww.bshare.cn%22%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A679%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: Duplicate entry '12' for key 'PRIMARY' Error sql: INSERT INTO `lc_article_agree` VALUES ('12','1','0')
<?php exit(); ?> Time: 2014-07-23 13:12:07. || Page: /item_show.php?id=18&cid=410 || IP: 192.168.6.205 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-07-23 13:12:25. || Page: /item_show.php?id=18&cid=410 || IP: 192.168.6.205 || Error: 无法使用数据库！
<?php exit(); ?> Time: 2014-07-23 16:17:45. || Page: /cook.php?cid=20 || IP: 192.168.6.205 || Error: Column 'checkinfo' in where clause is ambiguous Error sql: SELECT `lc_article`.id,`lc_article`.title,`lc_article`.content,`lc_article`.linkurl,`lc_article`.description,`lc_article_category`.classname FROM `lc_article` LEFT JOIN  `lc_article_category` ON `lc_article_category`.id=`lc_article`.classid WHERE checkinfo='true' AND (`classid` = 20 OR `parentstr` like '%,20,%') ORDER BY orderid DESC
<?php exit(); ?> Time: 2014-07-23 16:22:19. || Page: /cook.php?cid=20 || IP: 192.168.6.205 || Error: Unknown column 'lc_article_category.classid' in 'field list' Error sql: SELECT `lc_article`.id,`lc_article`.title,`lc_article`.content,`lc_article`.linkurl,`lc_article`.description,`lc_article`.picurl,`lc_article_category`.classname,`lc_article_category`.classid FROM `lc_article` LEFT JOIN  `lc_article_category` ON `lc_article_category`.id=`lc_article`.classid WHERE `lc_article`.checkinfo='true' AND (`lc_article`.`classid` = 20 OR `lc_article`.`parentstr` like '%,20,%') ORDER BY `lc_article`.orderid DESC
<?php exit(); ?> Time: 2014-07-24 09:52:00. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE parentid=0 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:01:57. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:04:56. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:05:00. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:05:06. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:06:06. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:07:16. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:07:40. || Page: /manage/goodspoint.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:20:26. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:26:58. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:27:28. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Unknown column 'orderid' in 'order clause' Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:36:16. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:38:04. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:38:10. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:39:21. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:41:04. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:43:36. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:48:31. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:49:22. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:55:57. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 10:57:25. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 11:00:27. || Page: /manage/point.php?act=list || IP: 192.168.6.205 || Error: Table 'hensen.lc_goodspoint' doesn't exist Error sql: SELECT * FROM `lc_goodspoint` WHERE 1=1 order by orderid desc
<?php exit(); ?> Time: 2014-07-24 15:44:04. || Page: /manage/point.php?act=add || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1',\x0D\x0A\x09\x09\x09\x09\x09\x09\x09\x09\x09'0',\x0D\x0A\x09\x09\x09\x09\x09' at line 3 Error sql: INSERT INTO `lc_point` VALUES (
									null
									'1',
									'0',
									'0,1,',
									'1楼购物券',
									'uploads/image/20140724/1406192659.jpg',
									'',
									'1',
									'1406187790',
									'true',
									'1406131200',
									'1437667200',
									'',
									'',
									'',
									'0',
									'210',
									'83',
									'10.00',
									'10.00',
									'&nbsp;<img src=\"/uploads/image/20140724/1406187891.jpg\" alt=\"\" />'
								)
<?php exit(); ?> Time: 2014-07-25 16:26:28. || Page: /point_info.php?id=59 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id=59' at line 1 Error sql: SELECT id,title,picurl,endtime,content FROM `lc_point` WHERE checkinfo='true' AND starttime<='1406217600'  AND endtime>='1406217600' id=59
<?php exit(); ?> Time: 2014-07-26 09:56:40. || Page: /member.php?act=point_add&id=62&uri=L3BvaW50X2luZm8ucGhwP2lkPTYy || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.'20140726562',0)' at line 1 Error sql: INSERT INTO `lc_member_point` VALUES (null,'5','62','1406339800'.'20140726562',0)
<?php exit(); ?> Time: 2014-07-26 10:42:42. || Page: /member.php?act=point_list || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `lc_member_point` LEFT JOIN lc_point ON lc_point.id=`lc_member_point`.p_id ' at line 6 Error sql: SELECT `lc_member_point`.posttime,lc_member_point.password,lc_member_point.o_id,lc_point.title,
	lc_point.picurl,lc_point.id,
	lc_point.endtime,
	lc_point.money,
	lc_point.meet_money,
	FROM `lc_member_point` LEFT JOIN lc_point ON lc_point.id=`lc_member_point`.p_id  
	WHERE `lc_member_point`.m_id = '1' AND `lc_point`.checkinfo='true' AND starttime<='1406304000'  AND endtime>'1406304000'
<?php exit(); ?> Time: 2014-07-26 14:05:11. || Page: /shopcart.php?act=list || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '==0' at line 8 Error sql: SELECT `lc_member_point`.posttime,lc_member_point.password,lc_point.title,
	lc_point.picurl,lc_point.id,
	lc_point.endtime,
	lc_point.money,
	lc_point.meet_money
	FROM `lc_member_point` LEFT JOIN lc_point ON lc_point.id=`lc_member_point`.p_id  
	WHERE `lc_member_point`.m_id = '1' AND `lc_point`.checkinfo='true' AND starttime<='1406304000'  AND endtime>'1406304000'
	AND lc_member_point.o_id==0
	
<?php exit(); ?> Time: 2014-07-26 14:35:02. || Page: /shopcart.php?val=11&act=point_add&rn=33949&toJSONString=%7B%22j%22%3A-1%2C%22timeout%22%3A500%2C%22closetimer%22%3A0%2C%22ddmenuitem%22%3A0%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A979%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and Status = 'cart' \x0D\x0A\x09\x09AND norm=''' at line 1 Error sql: select gid from `lc_goodsshopcart` where uid = 1 AND gid =  and Status = 'cart' 
		AND norm=''
<?php exit(); ?> Time: 2014-07-26 14:35:06. || Page: /shopcart.php?val=11&act=point_add&rn=31723&toJSONString=%7B%22j%22%3A-1%2C%22timeout%22%3A500%2C%22closetimer%22%3A0%2C%22ddmenuitem%22%3A0%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A429%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and Status = 'cart' \x0D\x0A\x09\x09AND norm=''' at line 1 Error sql: select gid from `lc_goodsshopcart` where uid = 1 AND gid =  and Status = 'cart' 
		AND norm=''
<?php exit(); ?> Time: 2014-07-26 15:41:17. || Page: /member.php?val=20140726159&act=shopcartPoint_add&rn=86193&toJSONString=%7B%22j%22%3A-1%2C%22timeout%22%3A500%2C%22closetimer%22%3A0%2C%22ddmenuitem%22%3A0%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A979%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='-1' WHERE id='1'' at line 1 Error sql: UPDATE `lc_member_point` SET =='-1' WHERE id='1'
<?php exit(); ?> Time: 2014-07-26 15:41:21. || Page: /member.php?val=20140726159&act=shopcartPoint_add&rn=29611&toJSONString=%7B%22j%22%3A-1%2C%22timeout%22%3A500%2C%22closetimer%22%3A0%2C%22ddmenuitem%22%3A0%2C%22devicePixelRatio%22%3A1%2C%22defaultstatus%22%3A%22%22%2C%22defaultStatus%22%3A%22%22%2C%22status%22%3A%22%22%2C%22name%22%3A%22%22%2C%22length%22%3A0%2C%22closed%22%3Afalse%2C%22pageYOffset%22%3A0%2C%22pageXOffset%22%3A0%2C%22scrollY%22%3A0%2C%22scrollX%22%3A0%2C%22screenTop%22%3A0%2C%22screenLeft%22%3A0%2C%22screenY%22%3A0%2C%22screenX%22%3A0%2C%22innerWidth%22%3A1920%2C%22innerHeight%22%3A619%2C%22outerWidth%22%3A1920%2C%22outerHeight%22%3A1040%2C%22offscreenBuffering%22%3Atrue%7D || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='-1' WHERE id='1'' at line 1 Error sql: UPDATE `lc_member_point` SET =='-1' WHERE id='1'
<?php exit(); ?> Time: 2014-07-26 16:54:20. || Page: /index.php || IP: 192.168.6.205 || Error: Table 'hensen.llc_goodsorder' doesn't exist Error sql:  SELECT lc_goods.id,`lc_goodsattr`.price,lc_goods.picurl,lc_goods.classid,lc_goods.title 
		FROM lc_goodsshopcart INNER JOIN (llc_goodsorder,lc_goods,lc_goodsattr)
		ON lc_goodsorder.orderlistnum=lc_goodsshopcart.gorderlistnum  
		AND lc_goodsshopcart.gid=lc_goods.id
		AND lc_goodsattr.goodsid=lc_goodsshopcart.gid
		WHERE   lc_goodsshopcart.`Status`='order'
		AND lc_goodsorder.POSTTIME >=1406364860-604800
		
		GROUP BY lc_goodsshopcart.gid ORDER BY tot DESC 
		
<?php exit(); ?> Time: 2014-07-26 16:54:52. || Page: /index.php || IP: 192.168.6.205 || Error: Unknown column 'tot' in 'order clause' Error sql:  SELECT lc_goods.id,`lc_goodsattr`.price,lc_goods.picurl,lc_goods.classid,lc_goods.title 
		FROM lc_goodsshopcart INNER JOIN (lc_goodsorder,lc_goods,lc_goodsattr)
		ON lc_goodsorder.orderlistnum=lc_goodsshopcart.gorderlistnum  
		AND lc_goodsshopcart.gid=lc_goods.id
		AND lc_goodsattr.goodsid=lc_goodsshopcart.gid
		WHERE   lc_goodsshopcart.`Status`='order'
		AND lc_goodsorder.POSTTIME >=1406364892-604800
		
		GROUP BY lc_goodsshopcart.gid ORDER BY tot DESC 
		
<?php exit(); ?> Time: 2014-07-26 16:54:53. || Page: /index.php || IP: 192.168.6.205 || Error: Unknown column 'tot' in 'order clause' Error sql:  SELECT lc_goods.id,`lc_goodsattr`.price,lc_goods.picurl,lc_goods.classid,lc_goods.title 
		FROM lc_goodsshopcart INNER JOIN (lc_goodsorder,lc_goods,lc_goodsattr)
		ON lc_goodsorder.orderlistnum=lc_goodsshopcart.gorderlistnum  
		AND lc_goodsshopcart.gid=lc_goods.id
		AND lc_goodsattr.goodsid=lc_goodsshopcart.gid
		WHERE   lc_goodsshopcart.`Status`='order'
		AND lc_goodsorder.POSTTIME >=1406364893-604800
		
		GROUP BY lc_goodsshopcart.gid ORDER BY tot DESC 
		
<?php exit(); ?> Time: 2014-08-31 09:18:15. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'need_integral' in 'field list' Error sql: SELECT `lc_goods`.id,`lc_goods`.title,picurl,retitle,description,classid,need_integral,`lc_goodsattr`.`price`,`lc_goodsattr`.`old_price`,
	sum(`lc_goodsattr`.housenum) as housenum 
	,(SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer,
	 `lc_goodsattr`.`price`/`lc_goodsattr`.`old_price`*10 as discount
	FROM 
	`lc_goods` LEFT JOIN
	(`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and  `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0   
	 AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' 
	  AND (`lc_goods`.classid='434' OR `lc_goods`.parentstr like '%,434,%') AND `lc_goodsattribute`.a_id=3
	 GROUP BY `lc_goods`.id ORDER BY  orderid ASC  LIMIT 8 
<?php exit(); ?> Time: 2014-08-31 09:20:29. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'lc_goodsattr.old_price' in 'field list' Error sql: SELECT `lc_goods`.id,`lc_goods`.title,picurl,retitle,description,classid,need_integral,`lc_goodsattr`.`price`,`lc_goodsattr`.`old_price`,
	sum(`lc_goodsattr`.housenum) as housenum 
	,(SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer,
	 `lc_goodsattr`.`price`/`lc_goodsattr`.`old_price`*10 as discount
	FROM 
	`lc_goods` LEFT JOIN
	(`lc_goodsattr`,`lc_goodsattribute`)  ON `lc_goods`.`id`=`lc_goodsattr`.`goodsid` and  `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goodsattr`.housenum>0   
	 AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' 
	  AND (`lc_goods`.classid='434' OR `lc_goods`.parentstr like '%,434,%') AND `lc_goodsattribute`.a_id=3
	 GROUP BY `lc_goods`.id ORDER BY  orderid ASC  LIMIT 8 
<?php exit(); ?> Time: 2014-08-31 17:01:00. || Page: /m/item_list.php?cid=408&ordername=counter&ordersort=desc || IP: 192.168.6.205 || Error: Unknown column 'counter' in 'order clause' Error sql: select  (SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer , `lc_goods`.`need_integral`,`lc_goods`.`phone_picurl`,`lc_goods`.`id`,`lc_goods`.`classid`,`lc_goods`.`title`,`lc_goods`.`picurl`,`lc_goodsattr`.`price`,sum(`lc_goodsattr`.housenum) as housenum 
	from `lc_goodsattr`,`lc_goods` LEFT JOIN `lc_goodsattribute`  
	ON    `lc_goodsattribute`.g_id=`lc_goods`.id
	WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0 AND `lc_goods`.checkinfo=true AND `lc_goods`.delstate='' AND `lc_goods`.phone=1  AND `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND (`lc_goods`.`classid` = 408 or `lc_goods`.`parentstr` like '%,408,%')  GROUP BY `lc_goods`.id  order by  counter desc, orderid desc
<?php exit(); ?> Time: 2014-08-31 17:01:40. || Page: /m/item_list.php?cid=408&ordername=counter&ordersort=desc || IP: 192.168.6.205 || Error: Unknown column 'counter' in 'order clause' Error sql: select  (SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer , `lc_goods`.`need_integral`,`lc_goods`.`phone_picurl`,`lc_goods`.`id`,`lc_goods`.`classid`,`lc_goods`.`title`,`lc_goods`.`picurl`,`lc_goodsattr`.`price`,sum(`lc_goodsattr`.housenum) as housenum 
	from `lc_goodsattr`,`lc_goods` LEFT JOIN `lc_goodsattribute`  
	ON    `lc_goodsattribute`.g_id=`lc_goods`.id
	WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0 AND `lc_goods`.checkinfo=true AND `lc_goods`.delstate='' AND `lc_goods`.phone=1  AND `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND (`lc_goods`.`classid` = 408 or `lc_goods`.`parentstr` like '%,408,%')  GROUP BY `lc_goods`.id  order by  counter desc, orderid desc
<?php exit(); ?> Time: 2014-08-31 17:03:47. || Page: /m/item_list.php?cid=408&ordername=counter&ordersort=desc || IP: 192.168.6.205 || Error: Unknown column 'counter' in 'order clause' Error sql: select  (SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer , `lc_goods`.`need_integral`,`lc_goods`.`phone_picurl`,`lc_goods`.`id`,`lc_goods`.`classid`,`lc_goods`.`title`,`lc_goods`.`picurl`,`lc_goodsattr`.`price`,sum(`lc_goodsattr`.housenum) as housenum 
	from `lc_goodsattr`,`lc_goods` LEFT JOIN `lc_goodsattribute`  
	ON    `lc_goodsattribute`.g_id=`lc_goods`.id
	WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0 AND `lc_goods`.checkinfo=true AND `lc_goods`.delstate='' AND `lc_goods`.phone=1  AND `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND (`lc_goods`.`classid` = 408 or `lc_goods`.`parentstr` like '%,408,%')  GROUP BY `lc_goods`.id  order by  counter desc, orderid desc
<?php exit(); ?> Time: 2014-08-31 17:07:08. || Page: /m/item_list.php?cid=408&ordername=time&ordersort=desc || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc, orderid desc' at line 4 Error sql: select   (SELECT COUNT(id) FROM `lc_usercomment` WHERE `gid` = `lc_goods`.`id`) AS counter ,(SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer , `lc_goods`.`need_integral`,`lc_goods`.`phone_picurl`,`lc_goods`.`id`,`lc_goods`.`classid`,`lc_goods`.`title`,`lc_goods`.`picurl`,`lc_goodsattr`.`price`,sum(`lc_goodsattr`.housenum) as housenum 
	from `lc_goodsattr`,`lc_goods` LEFT JOIN `lc_goodsattribute`  
	ON    `lc_goodsattribute`.g_id=`lc_goods`.id
	WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0 AND `lc_goods`.checkinfo=true AND `lc_goods`.delstate='' AND `lc_goods`.phone=1  AND `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND (`lc_goods`.`classid` = 408 or `lc_goods`.`parentstr` like '%,408,%')  GROUP BY `lc_goods`.id  order by  `lc_goods`.`posttime`, desc, orderid desc
<?php exit(); ?> Time: 2014-09-01 13:31:59. || Page: /m/member.php?act=add_collect&gid=35&uri=L20vaXRlbV9zaG93LnBocD9jaWQ9NDIwJmlkPTM1 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:34:20. || Page: /m/member.php?act=add_collect&gid=35&uri=L20vaXRlbV9zaG93LnBocD9jaWQ9NDIwJmlkPTM1 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:36:58. || Page: / || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:37:29. || Page: /m/member.php?act=add_collect&gid=35&uri=L20vaXRlbV9zaG93LnBocD9jaWQ9NDIwJmlkPTM1 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:41:45. || Page: /m/member.php?act=add_collect&gid=35&uri=L20vaXRlbV9zaG93LnBocD9jaWQ9NDIwJmlkPTM1 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:41:53. || Page: /m/member.php || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:42:26. || Page: /m/member.php || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:45:03. || Page: /m/member.php || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:45:28. || Page: /m/member.php || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND  uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:50:35. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=36852 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:50:39. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=95833 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:51:04. || Page: /m/shopcart.php?act=NowBuy&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=63479 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:51:12. || Page: /m/shopcart.php?act=NowBuy&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=89712 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:53:24. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=23915 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:53:37. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=3926 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:53:46. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=5460 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:54:11. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=16679 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:54:26. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=75034 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:54:29. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=53239 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:54:31. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=19634 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:54:42. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=16335 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:55:45. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=34944 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:57:05. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=51072 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:57:14. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=69230 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:57:51. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=17150 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 13:59:21. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=60926 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 14:01:14. || Page: /m/shopcart.php?act=add&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=5422 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 14:08:22. || Page: /m/shopcart.php?act=NowBuy&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=1616 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-01 14:08:28. || Page: /m/shopcart.php?act=NowBuy&goods_id=35&goods_num=1&goods_price=324.00&housenum=1111&goods_norm=2%2C6&rn=42853 || IP: 192.168.6.205 || Error: Column 'uid' in where clause is ambiguous Error sql: select gid from `lc_goodsshopcart`,`lc_goods` where `lc_goods`.id = `lc_goodsshopcart`.gid AND uid = 1 and Status = 'cart'
<?php exit(); ?> Time: 2014-09-02 14:22:13. || Page: /m/shopcart.php?act=del || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 Error sql: DELETE FROM `lc_goodsshopcart` WHERE id in (  ) 
<?php exit(); ?> Time: 2014-09-02 14:22:21. || Page: /m/shopcart.php?act=del || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 Error sql: DELETE FROM `lc_goodsshopcart` WHERE id in (  ) 
<?php exit(); ?> Time: 2014-09-02 14:34:53. || Page: /m/shopcart.php?act=del || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 Error sql: DELETE FROM `lc_goodsshopcart` WHERE id in (  ) 
<?php exit(); ?> Time: 2014-09-02 17:29:06. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-03 10:42:02. || Page: /m/member.php?act=collect || IP: 192.168.6.205 || Error: Table 'hensen.lc_gmember_good' doesn't exist Error sql: SELECT lc_ggoods.id,lc_ggoods.title,
		lc_ggoods.phone_picurl as picurl, lc_ggoods.classid,
		sum(lc_ggoodsattr.housenum) as housenum,
		min(lc_ggoodsattr.price) as min_price,
		max(lc_ggoodsattr.price) as max_price
		FROM `lc_gmember_good` INNER JOIN (lc_ggoods,lc_ggoodsattr) 
		ON lc_ggoods.id=`lc_gmember_good`.g_id 
		and lc_ggoods.id=lc_ggoodsattr.goodsid
		WHERE `lc_gmember_good`.m_id = '1' 
		group by lc_goods.id
<?php exit(); ?> Time: 2014-09-03 10:42:46. || Page: /m/member.php?act=collect || IP: 192.168.6.205 || Error: Unknown column 'lc_ggoods.phone_picurl' in 'field list' Error sql: SELECT lc_goods.id,lc_goods.title,
		lc_ggoods.phone_picurl as picurl, lc_goods.classid,
		sum(lc_goodsattr.housenum) as housenum,
		min(lc_goodsattr.price) as min_price,
		max(lc_goodsattr.price) as max_price
		FROM `lc_member_good` INNER JOIN (lc_goods,lc_goodsattr) 
		ON lc_goods.id=`lc_member_good`.g_id 
		and lc_goods.id=lc_goodsattr.goodsid
		WHERE `lc_member_good`.m_id = '1' 
		group by lc_goods.id
<?php exit(); ?> Time: 2014-09-03 13:13:36. || Page: /m/member.php?act=default || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goodsshopcart.gpicurl, \x0D\x0A\x09SUM(lc_goodsshopcart.num) as num\x0D\x0A\x' at line 2 Error sql: SELECT `lc_goodsorder`.*
	lc_goodsshopcart.gpicurl, 
	SUM(lc_goodsshopcart.num) as num
	 FROM `lc_goodsorder`
	inner join lc_goodsshopcart 
	on lc_goodsshopcart.gorderlistnum=lc_goodsorder.orderlistnum
	where userid = '1' group by lc_goodsshopcart.gorderlistnum order by id desc
<?php exit(); ?> Time: 2014-09-03 15:12:12. || Page: /m/member.php?act=default&chk=0 || IP: 192.168.6.205 || Error: Unknown column 'lc_goodsorder.lc_goodsorder' in 'where clause' Error sql: SELECT `lc_goodsorder`.*,
	lc_goodsshopcart.gpicurl, 
	SUM(lc_goodsshopcart.num) as num
	 FROM `lc_goodsorder`
	inner join lc_goodsshopcart 
	on lc_goodsshopcart.gorderlistnum=lc_goodsorder.orderlistnum
	where userid = '1'  AND lc_goodsorder.lc_goodsorder='0'  group by lc_goodsshopcart.gorderlistnum order by id desc
<?php exit(); ?> Time: 2014-09-04 16:30:43. || Page: /m/member.php?act=default || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and consume_points >0 GROUP BY uid' at line 1 Error sql: SELECT sum(consume_points*num) as consume_points FROM `lc_goodsshopcart` where uid = and consume_points >0 GROUP BY uid
<?php exit(); ?> Time: 2014-09-04 16:42:03. || Page: /m/member.php?act=confirm_goods&orderid=2&uri=L20vbWVtYmVyLnBocD9hY3Q9Y2hrMg== || IP: 192.168.6.205 || Error: Table 'hensen. lc_goodsorder' doesn't exist Error sql: select orderlistnum from ` lc_goodsorder` where  `id`= '2' 
<?php exit(); ?> Time: 2014-09-04 16:42:57. || Page: /m/member.php?act=confirm_goods&orderid=2&uri=L20vbWVtYmVyLnBocD9hY3Q9Y2hrMg== || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' where id = '1'' at line 1 Error sql: UPDATE `lc_member` SET integral =integral +0' where id = '1'
<?php exit(); ?> Time: 2014-09-04 16:43:25. || Page: /m/member.php?act=confirm_goods&orderid=2&uri=L20vbWVtYmVyLnBocD9hY3Q9Y2hrMg== || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' where id ='1'' at line 1 Error sql: UPDATE `lc_member` SET integral =integral +0' where id ='1'
<?php exit(); ?> Time: 2014-09-05 09:47:25. || Page: /m/point_goods.php || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0, 5' at line 11 Error sql: SELECT `lc_goods`.id,`lc_goods`.phone_picurl,`lc_goods`.title,picurl,retitle,description,classid,need_integral,`lc_goodsattr`.`price`,`lc_goodsattr`.`old_price`,
	sum(`lc_goodsattr`.housenum) as housenum 
	,(SELECT SUM(num)  FROM `lc_goodsshopcart` WHERE `gid` = `lc_goods`.`id` and `lc_goodsshopcart`.norm = `lc_goodsattr`.attrname and `lc_goodsshopcart`.Status='order') AS sumer,
	 `lc_goodsattr`.`price`/`lc_goodsattr`.`old_price`*10 as discount
	FROM `lc_goodsattr`,
	`lc_goods` LEFT JOIN
	`lc_goodsattribute`  ON    `lc_goodsattribute`.g_id=`lc_goods`.id
	 WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0   
	 AND `lc_goods`.`checkinfo`='true' AND `lc_goods`.`delstate` = '' 
	  AND `lc_goods`.phone=1 AND `lc_goods`.`need_integral`>0
	 GROUP BY `lc_goods`.id ORDER BY  orderid ASC  LIMIT 5  limit 0, 5
<?php exit(); ?> Time: 2014-09-05 10:21:44. || Page: /m/point_goods.php?cid=421&id=33 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lc_goods`.checkinfo='true' \x0D\x0A\x09\x09and `lc_goods`.delstate = '' AND' at line 9 Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,`lc_goods`.need_integral,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.phone_content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price,
		sum(`lc_goodsattr`.housenum) as tot_housenum
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.`id` =  AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = '' AND `lc_goods`.phone=1 group by `lc_goods`.id   
<?php exit(); ?> Time: 2014-09-05 10:32:08. || Page: /m/point_goods.php?cid=421&id=33 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'min(`lc_goodsattr`.price) as min_price,\x0D\x0A\x09\x09max(`lc_goodsattr`.price)' at line 4 Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,`lc_goods`.need_integral,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.phone_content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,`lc_goods`.phone_picurl,`lc_goods`.content
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price,
		sum(`lc_goodsattr`.housenum) as tot_housenum
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.`id` = 33 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = ''  AND `lc_goods`.phone=1  group by `lc_goods`.id
<?php exit(); ?> Time: 2014-09-05 10:32:20. || Page: /m/point_goods.php?cid=421&id=33 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\xEF\xBC\x8C\x0D\x0A\x09\x09min(`lc_goodsattr`.price) as min_price,\x0D\x0A\x09\' at line 3 Error sql: SELECT `lc_goods`.norm,`lc_goods`.picarr,`lc_goods`.classid,`lc_goods`.flag,`lc_goods`.need_integral,
		`lc_goods`.id,`lc_goods`.retitle,`lc_goods`.phone_content,`lc_goods`.ser_conent,
		`lc_goods`.picurl,`lc_goods`.title,`lc_goods`.phone_picurl,`lc_goods`.content，
		min(`lc_goodsattr`.price) as min_price,
		max(`lc_goodsattr`.price) as max_price,
		sum(`lc_goodsattr`.housenum) as tot_housenum
		FROM `lc_goods` 
		left join `lc_goodsattr` on `lc_goods`.id=`lc_goodsattr`.goodsid
		WHERE `lc_goods`.`id` = 33 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = ''  AND `lc_goods`.phone=1  group by `lc_goods`.id
<?php exit(); ?> Time: 2014-09-05 11:20:16. || Page: /m/member.php?act=default || IP: 192.168.6.205 || Error: Unknown column 'lc_goodsshopcart.userid' in 'where clause' Error sql: select sum(lc_goodsorder.integral) as integral,sum(lc_goodsshopcart.consume_points) as consume_points
		 from lc_goodsorder RIGHT JOIN lc_goodsshopcart
		on lc_goodsorder.orderlistnum=lc_goodsshopcart.gorderlistnum
		and  lc_goodsorder.userid=lc_goodsshopcart.uid
		 where lc_goodsshopcart.userid='1'
<?php exit(); ?> Time: 2014-09-05 14:28:03. || Page: /m/member.php?act=message&act=history&ordername=sumer&ordersort=asc || IP: 192.168.6.205 || Error: Unknown column 'sumer' in 'order clause' Error sql: select `lc_member_good`.date,`lc_goods`.`phone_picurl`,`lc_goods`.`id`,`lc_goods`.`classid`,`lc_goods`.`title`,`lc_goodsattr`.`price`,sum(`lc_goodsattr`.housenum) as housenum 
	from `lc_goodsattr`,`lc_goods` INNER JOIN `lc_member_good`
	ON `lc_member_good`.g_id=`lc_goods`.id
	WHERE `lc_goods`.`id`=`lc_goodsattr`.`goodsid` AND `lc_goodsattr`.housenum>0 AND `lc_goods`.checkinfo=true AND `lc_goods`.delstate='' AND `lc_goods`.phone=1 
	AND `lc_member_good`.m_id='1'
	AND `lc_member_good`.type=1
	GROUP BY `lc_goods`.id  order by  sumer asc, orderid desc
<?php exit(); ?> Time: 2014-09-05 15:28:03. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:28:03. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:29:06. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:31:29. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:31:48. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:31:59. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:32:04. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:33:56. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:34:09. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:34:12. || Page: /member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:22. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:24. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:24. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:27. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:29. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-05 15:40:44. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:00:39. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:00:41. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:07:49. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:07:52. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:08:50. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:08:53. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 09:08:54. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-09-09 16:39:07. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-10-23 15:58:15. || Page: / || IP: 192.168.6.205 || Error: Table 'beidahuang.lc_ads_list' doesn't exist Error sql: SELECT picurl FROM `lc_ads_list` WHERE `classid` = 29 AND `checkinfo`='true' AND `admode`='image' AND `starttime`<=1413993600 AND `endtime`>=1413993600  ORDER BY orderid DESC
<?php exit(); ?> Time: 2014-11-06 15:15:10. || Page: /member.php?act=subpswedit || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 Error sql: UPDATE `lc_member` SET `password` = '1aaf768ae4dffbae540d9709b80c9cb3' WHERE `id` = 
<?php exit(); ?> Time: 2014-11-06 17:50:45. || Page: /member.php?act=address_update || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 Error sql: select * from `lc_member_address` where id = 
<?php exit(); ?> Time: 2014-11-12 11:03:26. || Page: / || IP: 192.168.6.205 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-12 11:03:26. || Page: / || IP: 192.168.6.205 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-15 12:48:22. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'lc_content' in 'field list' Error sql: select classname,id,description,lc_content from lc_article_category where `checkinfo`='true'  AND parentid='20'   order by  orderid desc  LIMIT 2 
<?php exit(); ?> Time: 2014-11-15 12:48:53. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'lc_content' in 'field list' Error sql: select classname,id,description,lc_content from lc_article_category where `checkinfo`='true'  AND parentid='20'   order by  orderid desc  LIMIT 2 
<?php exit(); ?> Time: 2014-11-15 12:49:38. || Page: / || IP: 192.168.6.205 || Error: Unknown column 'lc_content' in 'field list' Error sql: select classname,id,description,lc_content from lc_article_category where `checkinfo`='true'  AND parentid='20'   order by  orderid desc  LIMIT 2 
<?php exit(); ?> Time: 2014-11-20 08:24:47. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 08:29:19. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 08:31:41. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 08:31:43. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 08:31:46. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 08:31:48. || Page: /shop/member.php?act=selectarea&parentid= || IP: 222.171.225.189 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-20 09:37:18. || Page: /shop/news_info.php?cid=3 || IP: 222.171.225.189 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-20 09:37:23. || Page: /shop/index.php || IP: 222.171.225.189 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-20 09:37:28. || Page: /shop/member.php?act=default || IP: 222.171.225.189 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-22 14:55:50. || Page: /shop/member.php?act=selectarea&parentid= || IP: 1.56.135.195 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:14:32. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:14:34. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:14:39. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:14:49. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:14:51. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:15:06. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-22 16:15:13. || Page: /shop/member.php?act=selectarea&parentid= || IP: 171.123.34.115 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-26 18:01:24. || Page: /manage/ || IP: 192.168.6.205 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2014-11-26 18:01:51. || Page: /manage/ || IP: 192.168.6.205 || Error: 无法使用数据库！
<?php exit(); ?> Time: 2014-11-26 18:02:09. || Page: /manage/ || IP: 192.168.6.205 || Error: 无法使用数据库！
<?php exit(); ?> Time: 2014-11-26 18:02:13. || Page: / || IP: 192.168.6.205 || Error: 无法使用数据库！
<?php exit(); ?> Time: 2014-11-27 16:22:01. || Page: /member.php?act=ordercontent&orderid={$oid} || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '}' at line 1 Error sql: select * from `lc_goodsorder` where id = {$oid}
<?php exit(); ?> Time: 2014-11-27 16:23:52. || Page: /member.php?act=ordercontent&orderid={$oid} || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '}' at line 1 Error sql: select * from `lc_goodsorder` where id = {$oid}
<?php exit(); ?> Time: 2014-11-27 16:23:55. || Page: /member.php?act=ordercontent&orderid={$oid} || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '}' at line 1 Error sql: select * from `lc_goodsorder` where id = {$oid}
<?php exit(); ?> Time: 2014-11-28 15:40:42. || Page: /m/member.php?act=default || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 Error sql: select picurl from `lc_member` where id = 
<?php exit(); ?> Time: 2014-11-29 16:04:55. || Page: /m/item_show.php?act=comments&id=40 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods` \x0D\x0A\x09\x09WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='t' at line 1 Error sql: SELECT `lc_goods`.picarr,`lc_goods`.phone_picurl,lc_goods`.title
		FROM `lc_goods` 
		WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = ''   AND `lc_goods`.phone=1 
<?php exit(); ?> Time: 2014-11-29 16:24:49. || Page: /m/item_show.php?act=goods_content&id=40 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods` \x0D\x0A\x09\x09WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='t' at line 1 Error sql: SELECT `lc_goods`.picarr,`lc_goods`.phone_picurl,`lc_goods`.title,`lc_goods`.phone_content`
		FROM `lc_goods` 
		WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = ''   AND `lc_goods`.phone=1 
<?php exit(); ?> Time: 2014-11-29 16:25:06. || Page: /m/item_show.php?act=goods_content&id=40 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'lc_goods` \x0D\x0A\x09\x09WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='t' at line 1 Error sql: SELECT `lc_goods`.picarr,`lc_goods`.phone_picurl,`lc_goods`.title,`lc_goods`.phone_content` 
		FROM `lc_goods` 
		WHERE `lc_goods`.`id` = 40 AND `lc_goods`.checkinfo='true' 
		and `lc_goods`.delstate = ''   AND `lc_goods`.phone=1 
<?php exit(); ?> Time: 2014-11-29 16:58:54. || Page: /member.php?act=orderdel&orderid=61&rn=38312 || IP: 192.168.6.205 || Error: Column 'id' in where clause is ambiguous Error sql: DELETE FROM `lc_goodsorder`,`lc_goodsshopcart` USING `lc_goodsorder` JOIN `lc_goodsshopcart`
	ON `lc_goodsorder`.orderlistnum=`lc_goodsshopcart`.gorderlistnum
	WHERE id=61
<?php exit(); ?> Time: 2014-11-29 16:59:00. || Page: /member.php?act=orderdel&orderid=61&rn=49598 || IP: 192.168.6.205 || Error: Column 'id' in where clause is ambiguous Error sql: DELETE FROM `lc_goodsorder`,`lc_goodsshopcart` USING `lc_goodsorder` JOIN `lc_goodsshopcart`
	ON `lc_goodsorder`.orderlistnum=`lc_goodsshopcart`.gorderlistnum
	WHERE id=61
<?php exit(); ?> Time: 2014-11-29 16:59:06. || Page: /member.php?act=orderdel&orderid=61&rn=95028 || IP: 192.168.6.205 || Error: Column 'id' in where clause is ambiguous Error sql: DELETE FROM `lc_goodsorder`,`lc_goodsshopcart` USING `lc_goodsorder` JOIN `lc_goodsshopcart`
	ON `lc_goodsorder`.orderlistnum=`lc_goodsshopcart`.gorderlistnum
	WHERE id=61
<?php exit(); ?> Time: 2014-11-30 15:14:50. || Page: /m/orderinfo.php || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '}' at line 1 Error sql: select classname from `lc_area` where id = {$list.id}
<?php exit(); ?> Time: 2014-11-30 15:19:19. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-11-30 15:19:25. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-01 15:52:58. || Page: /m/member.php?act=evaluation_list || IP: 192.168.6.205 || Error: Unknown column 'lc_member_good.ishow' in 'where clause' Error sql: SELECT lc_goods.id,lc_goods.title,lc_goods.picurl,
			lc_goods.classid,
			lc_goods.phone_picurl,
			case when min(`lc_goodsattr`.price)=max(`lc_goodsattr`.price) then max(`lc_goodsattr`.price)
			else Concat(min(`lc_goodsattr`.price),'-',max(`lc_goodsattr`.price)) 
			end as salesprice
			FROM `lc_usercomment` RIGHT JOIN lc_goods ON lc_goods.id=`lc_usercomment`.gid  
			LEFT JOIN (lc_goodscategory,`lc_goodsattr`) ON lc_goods.classid=lc_goodscategory.id
			AND `lc_goods`.id=`lc_goodsattr`.goodsid
			WHERE `lc_usercomment`.uid = '1' AND `lc_member_good`.ishow=1  group by lc_goods.id 
<?php exit(); ?> Time: 2014-12-01 15:53:38. || Page: /m/member.php?act=evaluation_list || IP: 192.168.6.205 || Error: Unknown column 'lc_usercomment.ishow' in 'where clause' Error sql: SELECT lc_goods.id,lc_goods.title,lc_goods.picurl,
			lc_goods.classid,
			lc_goods.phone_picurl,
			case when min(`lc_goodsattr`.price)=max(`lc_goodsattr`.price) then max(`lc_goodsattr`.price)
			else Concat(min(`lc_goodsattr`.price),'-',max(`lc_goodsattr`.price)) 
			end as salesprice
			FROM `lc_usercomment` RIGHT JOIN lc_goods ON lc_goods.id=`lc_usercomment`.gid  
			LEFT JOIN (lc_goodscategory,`lc_goodsattr`) ON lc_goods.classid=lc_goodscategory.id
			AND `lc_goods`.id=`lc_goodsattr`.goodsid
			WHERE `lc_usercomment`.uid = '1' AND `lc_usercomment`.ishow=1  group by lc_goods.id 
<?php exit(); ?> Time: 2014-12-01 15:53:39. || Page: /m/member.php?act=evaluation_list || IP: 192.168.6.205 || Error: Unknown column 'lc_usercomment.ishow' in 'where clause' Error sql: SELECT lc_goods.id,lc_goods.title,lc_goods.picurl,
			lc_goods.classid,
			lc_goods.phone_picurl,
			case when min(`lc_goodsattr`.price)=max(`lc_goodsattr`.price) then max(`lc_goodsattr`.price)
			else Concat(min(`lc_goodsattr`.price),'-',max(`lc_goodsattr`.price)) 
			end as salesprice
			FROM `lc_usercomment` RIGHT JOIN lc_goods ON lc_goods.id=`lc_usercomment`.gid  
			LEFT JOIN (lc_goodscategory,`lc_goodsattr`) ON lc_goods.classid=lc_goodscategory.id
			AND `lc_goods`.id=`lc_goodsattr`.goodsid
			WHERE `lc_usercomment`.uid = '1' AND `lc_usercomment`.ishow=1  group by lc_goods.id 
<?php exit(); ?> Time: 2014-12-01 15:54:05. || Page: /m/member.php?act=evaluation_list || IP: 192.168.6.205 || Error: Unknown column 'lc_usercomment.ishow' in 'where clause' Error sql: SELECT lc_goods.id,lc_goods.title,lc_goods.picurl,
			lc_goods.classid,
			lc_goods.phone_picurl,
			case when min(`lc_goodsattr`.price)=max(`lc_goodsattr`.price) then max(`lc_goodsattr`.price)
			else Concat(min(`lc_goodsattr`.price),'-',max(`lc_goodsattr`.price)) 
			end as salesprice
			FROM `lc_usercomment` RIGHT JOIN lc_goods ON lc_goods.id=`lc_usercomment`.gid  
			LEFT JOIN (lc_goodscategory,`lc_goodsattr`) ON lc_goods.classid=lc_goodscategory.id
			AND `lc_goods`.id=`lc_goodsattr`.goodsid
			WHERE `lc_usercomment`.uid = '1' AND `lc_usercomment`.ishow=1  group by lc_goods.id 
<?php exit(); ?> Time: 2014-12-02 16:03:50. || Page: /manage/order.php?act=list&checkinfo=1&phone=1 || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lc_goodsorder`.phone_sign='1'' at line 1 Error sql: SELECT count(*) FROM `lc_goodsorder` where delstate='' order by orderid desc  AND `lc_goodsorder`.phone_sign='1' 
<?php exit(); ?> Time: 2014-12-03 17:16:17. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:17:21. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:17:31. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:18:33. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:29:14. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:29:55. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:37:39. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-03 17:38:44. || Page: /m/member.php?act=selectarea&parentid= || IP: 192.168.6.205 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-06 13:58:39. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=username&username=ojiashop || IP: 60.219.201.147 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE username='ojiashop' and id <> undefined
<?php exit(); ?> Time: 2014-12-06 13:58:40. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=email&email=286620705@qq.com || IP: 60.219.201.147 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE email='286620705@qq.com' and id <> undefined
<?php exit(); ?> Time: 2014-12-06 13:58:49. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=username&username=ojiashop || IP: 60.219.201.147 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE username='ojiashop' and id <> undefined
<?php exit(); ?> Time: 2014-12-06 13:58:49. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=email&email=286620705@qq.com || IP: 60.219.201.147 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE email='286620705@qq.com' and id <> undefined
<?php exit(); ?> Time: 2014-12-09 13:57:58. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 13:58:00. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:09:44. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=username&username=jason22 || IP: 218.241.203.249 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE username='jason22' and id <> undefined
<?php exit(); ?> Time: 2014-12-09 14:09:44. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=email&email=1041181883@qq.com || IP: 218.241.203.249 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE email='1041181883@qq.com' and id <> undefined
<?php exit(); ?> Time: 2014-12-09 14:17:26. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:17:27. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:17:28. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:17:32. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:17:38. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 14:17:49. || Page: /shop/member.php?act=selectarea&parentid= || IP: 218.241.203.249 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 15:21:24. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 1.58.78.138 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-09 15:21:29. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 1.58.78.138 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:30:05. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:30:07. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:30:10. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:30:12. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:31:24. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:31:26. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:33:31. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:33:39. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:34:54. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:35:03. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:37:35. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:37:36. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:37:38. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:37:38. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:40:03. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:40:04. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:40:04. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:40:06. || Page: /shop/m/member.php?act=selectarea&parentid= || IP: 182.200.13.233 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:44:17. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:44:23. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:44:24. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:44:56. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:45:21. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:45:22. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:45:24. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:46:40. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:46:41. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:46:43. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:07. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:12. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:14. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:15. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:43. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:44. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:47:49. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:50:43. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:51:16. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:53:20. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 11:53:35. || Page: /shop/member.php?act=selectarea&parentid= || IP: 221.207.184.42 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 13:41:23. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-12 13:41:23. || Page: /shop/member.php?act=selectarea&parentid= || IP: 123.245.8.166 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 09:32:51. || Page: /shop/member.php?act=selectarea&parentid= || IP: 60.223.227.187 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 09:35:20. || Page: /shop/member.php?act=selectarea&parentid= || IP: 60.223.227.187 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 12:17:56. || Page: /shop/member.php?act=selectarea&parentid= || IP: 124.163.214.89 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 12:17:56. || Page: /shop/member.php?act=selectarea&parentid= || IP: 124.163.214.89 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 12:17:57. || Page: /shop/member.php?act=selectarea&parentid= || IP: 124.163.214.89 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-13 12:18:20. || Page: /shop/member.php?act=selectarea&parentid= || IP: 124.163.214.89 || Error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by orderid asc,id asc' at line 1 Error sql: SELECT id,classname FROM `lc_area` WHERE 1=1  AND parentid= order by orderid asc,id asc
<?php exit(); ?> Time: 2014-12-14 09:30:51. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=username&username=v03501234 || IP: 124.163.214.89 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE username='v03501234' and id <> undefined
<?php exit(); ?> Time: 2014-12-14 09:30:52. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=email&email=52809984@qq.com || IP: 124.163.214.89 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE email='52809984@qq.com' and id <> undefined
<?php exit(); ?> Time: 2014-12-14 09:32:14. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=username&username=v03501234 || IP: 124.163.214.89 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE username='v03501234' and id <> undefined
<?php exit(); ?> Time: 2014-12-14 09:32:14. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=email&email=52809984@qq.com || IP: 124.163.214.89 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE email='52809984@qq.com' and id <> undefined
<?php exit(); ?> Time: 2014-12-14 09:32:14. || Page: /shop/manage/member.php?tid=undefined&act=Unique&id=mobile&mobile=13935063031 || IP: 124.163.214.89 || Error: Unknown column 'undefined' in 'where clause' Error sql: SELECT id FROM `lc_member` WHERE mobile='13935063031' and id <> undefined
<?php exit(); ?> Time: 2014-12-15 09:43:19. || Page: /shop/index.php || IP: 60.223.227.187 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-01-13 09:35:32. || Page: /shop/item_list.php?cid=653&ordername=price&ordersort=desc || IP: 220.181.108.116 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-01-13 09:35:40. || Page: /shop/manage/payment.php || IP: 221.207.184.42 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-01-13 09:35:45. || Page: /shop/manage/payment.php || IP: 221.207.184.42 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-01-29 09:39:54. || Page: /shop/manage/index.php?act=sublogin || IP: 182.200.39.107 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-01-30 10:24:19. || Page: /shop/item_list.php?cid=599& || IP: 220.181.108.150 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-02-10 09:50:45. || Page: /shop/manage/index.php?act=sublogin || IP: 125.86.117.125 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-02-10 09:50:51. || Page: /shop/manage/templates/default/js/artDialog_js.php || IP: 125.86.117.125 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-02-10 09:51:04. || Page: /shop/manage/index.php?act=sublogin || IP: 125.86.117.125 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-02-16 09:32:18. || Page: /shop/manage/goods.php?act=list&nav=oos || IP: 27.19.155.155 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-04 09:47:54. || Page: /shop/index.php || IP: 219.147.192.86 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-11 09:45:47. || Page: /shop/m/member.php?act=default || IP: 118.79.97.36 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-11 09:46:05. || Page: /shop/m/member.php?act=default || IP: 118.79.97.36 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-11 09:46:12. || Page: /shop/m/shopcart.php?act=list || IP: 118.79.97.36 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-13 15:34:37. || Page: /shop/m/index.php || IP: 124.163.100.228 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 10:45:54. || Page: /shop/index.php || IP: 123.245.12.28 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 10:45:54. || Page: /shop/index.php || IP: 123.245.12.28 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 10:46:23. || Page: /shop/index.php || IP: 122.158.10.210 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 10:46:37. || Page: /shop/index.php || IP: 122.158.10.210 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 10:52:12. || Page: /shop/manage/templates/default/js/artDialog_js.php || IP: 123.245.12.28 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 11:10:15. || Page: /shop/manage/index.php || IP: 123.245.12.28 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 11:13:05. || Page: /shop/index.php || IP: 221.203.10.40 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 11:15:43. || Page: /shop/index.php || IP: 221.203.10.40 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 11:15:43. || Page: /shop/index.php || IP: 221.203.10.40 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
��！
<?php exit(); ?> Time: 2015-03-14 11:15:43. || Page: /shop/index.php || IP: 221.203.10.40 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-03-14 11:20:42. || Page: /shop/manage/index.php?act=default&from=mywork&menukey=06_article || IP: 123.245.12.28 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-06-04 12:03:21. || Page: /shop/m/index.php || IP: 59.46.215.98 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-06-23 15:50:20. || Page: /shop/manage/index.php || IP: 110.84.158.180 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-21 10:15:30. || Page: /shop/item_show.php?id=12&cid=452 || IP: 59.46.215.98 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-21 10:15:30. || Page: /shop/manage/index.php?act=unlogin || IP: 59.46.215.98 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-21 10:15:31. || Page: /shop/manage/bug.php?act=add || IP: 59.46.215.98 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-21 10:15:32. || Page: /shop/manage/chart_user.php || IP: 59.46.215.98 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-22 18:26:23. || Page: /shop/manage/templates/default/js/artDialog_js.php || IP: 61.134.234.123 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-28 18:29:56. || Page: /shop/index.php || IP: 60.223.227.187 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-28 18:30:08. || Page: /shop/manage/member.php?act=list&phone_sign_s=1 || IP: 101.226.33.228 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-07-30 11:26:54. || Page: /shop/item_list.php?cid=606 || IP: 123.125.71.107 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 09:42:48. || Page: /shop/item_list.php?cid=457 || IP: 60.222.162.163 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 09:42:50. || Page: /shop/item_list.php?cid=424 || IP: 60.222.162.163 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 09:43:07. || Page: /shop/item_list.php?cid=443 || IP: 60.222.162.163 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 10:03:39. || Page: /shop/member.php?act=ordercontent&orderid=228 || IP: 123.232.145.148 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 10:27:37. || Page: /shop/m/index.php || IP: 117.136.4.94 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-04 10:35:58. || Page: /shop/member.php?act=login&from=L3Nob3Avb3JkZXJpbmZvLnBocD9hY3Q9YWRkciZhY3QxPXVwZGF0ZSZybj05MTIwOA== || IP: 180.153.206.33 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:13. || Page: /shop/index.php || IP: 42.184.20.23 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:14. || Page: /shop/index.php || IP: 42.184.20.23 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:14. || Page: /shop/manage/index.php?act=sublogin || IP: 42.184.20.23 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:14. || Page: /shop/index.php || IP: 113.235.122.39 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:20. || Page: /shop/manage/index.php?act=sublogin || IP: 42.184.20.23 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-07 09:56:28. || Page: /shop/index.php || IP: 113.235.122.39 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-08 10:39:42. || Page: /shop/manage/goodsbrand.php?act=list&page=3 || IP: 60.223.227.187 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:37. || Page: /shop/item_list.php?cid=409 || IP: 112.64.235.87 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:37. || Page: /shop/item_list.php?cid=450 || IP: 113.233.134.217 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:37. || Page: /shop/manage/index.php?act=mywork || IP: 180.153.206.37 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:38. || Page: /shop/item_list.php?cid=425 || IP: 101.226.66.173 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:38. || Page: /shop/manage/index.php?act=default&from=mywork&menukey=10_goods || IP: 112.64.235.91 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-08-10 10:01:38. || Page: /shop/item_list.php?cid=424 || IP: 101.226.33.239 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2015-11-24 08:57:05. || Page: /20151016shopx/index.php || IP: 221.207.184.42 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2017-10-26 16:53:19. || Page: /shopx/ || IP: 127.0.0.1 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 14:43:19. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 14:51:29. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 14:56:48. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 15:01:26. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 15:02:46. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 15:02:49. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
<?php exit(); ?> Time: 2018-05-03 15:04:32. || Page: / || IP: 0.0.0.0 || Error: 连接数据库失败，可能数据库密码不对或数据库服务器出错！
