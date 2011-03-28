<?
include "config.php";
include "functions.php";
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

$nr = "";
if (isset ($_GET['nr']))
{
	$nr = intval($_GET['nr']);
}


?>
<script>
function closeDialog ()
{
	$('#dialog').jqmHide();
}

function delMail (nr)
{
	$('#dialogContent').html("<h2>Please wait ...</h2>");

	$.ajax({
		url: "ajaxdelete.php?nr=" + nr,
		context: document.body,
		success: function(){
			$('#dialog').jqmHide();
			$("#email" + nr).animate({
			    opacity: 0.5,
			    height: '=0',
			    height: 'toggle'
			  }, 888, function() { /* Animation complete.*/  });
		},
		error: function() { 
			$('#dialogContent').html("<h2 class='error'>Fehler beim Löschen der E-Mail</h2>" +
					  "<a onclick='closeDialog();'><img style='margin-right:100px;' " +
					  " src='/images/ok.png' align='right'></a>");
		},
    		complete: function() { 
		}
	});
}
</script>

<div id="dialogContent">
<h2>Möchten Sie die E-Mail wirlich löschen?</h2>
<center><table border=0 width='50%'><tr><td align=center>
<!-- 
<a href="/delete.php?nr=<?=$nr?>" class="jqmClose"><img src='/images/ja.png' border=0></a>
<a onclick="javascript:$('#dialog').jqmHide();" class="jqmClose"><img src='/images/ja.png' border=0></a>
 -->

<a onclick="javascript:delMail(<?=$nr?>);" class="jqmClose"><img src='/images/ja.png' border=0></a>
</td><td align=center>
<a href="#" class="jqmClose"><img src='/images/nein.png' border=0></a>
</td></tr></table></center>
<br>
Nach dem Löschen ist der inhalt der E-Mail unwiederuflich gelöscht. Das Löschen der E-Mail kann nicht
rückgängig gemacht werden.
</div>

