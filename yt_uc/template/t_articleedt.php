{* Template Name: 发布投稿*}

{template:t_header}
{if $user.Level < 5}
<input type="hidden" name="token" id="token" value="{$zbp->GetToken()}" />
标题:<input id="edtTitle" class="edit" name="Title" type="text">
分类:<select name="CateID" size="1" class="form-control user_input">{Yt_Categories(0)}</select>
内容:{$article.UEditor}
验证码:<input required="required" name="verifycode" type="text"> {$article.verifycode}
<button onclick="return checkArticleInfo();">提交</button>
{else}
权限不足提示代码。
{/if}