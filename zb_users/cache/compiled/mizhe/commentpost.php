<div class="cmtpost">
	<form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>" >
	<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />

	<div class="cmtimg"><img src="<?php  echo $user->Avatar;  ?>" alt="" /></div>
	<div class="cmtcon">
		<textarea name="txaArticle" id="txaArticle" cols="30" rows="10" tabindex="1"></textarea>
		<div class="cmtbtn"><span>◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</span>
		<input name="sumbit" type="submit" tabindex="6" onclick="return VerifyMessage()" value="" class="cmtbtn" />
		</div>
	</div>
	<div class="cmtinfo">
	<?php if ($user->ID>0) { ?>
		<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->Name;  ?>" />
		<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
		<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />	
	<?php }else{  ?>
	<p><input type="text" name="inpName" id="inpName" class="text" size="28" tabindex="1" /><label for="inpName">名称(*)</label></p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" size="28" tabindex="2" /><label for="inpEmail">邮箱</label></p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" size="28" tabindex="3" /><label for="inpHomePage">网址</label></p>
	<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
	<p><input type="text" name="inpVerify" id="inpVerify" value="" size="28" tabindex="5" /><img src="<?php  echo $article->ValidCodeUrl;  ?>" class="verifyimg" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();" /><label for="inpVerify">验证码(*)</label></p>
	<?php } ?>
	<?php } ?>
	</div>
	</form>
</div>
<script language="JavaScript" type="text/javascript">
var txaArticle = document.getElementById('txaArticle');
txaArticle.onkeydown = function quickSubmit(e) {
if (!e) var e = window.event;
if (e.ctrlKey && e.keyCode == 13){
return VerifyMessage();
}
}
</script>