    <div id="signbtn">

        	<a href="#" class="btnsignin">Sign In</a>
    </div> 

<div id="frmsignin">
        <form method="post" id="signin" target="_top" action="<?=$arResult["AUTH_URL"]?>"> 
        	<?
	if (strlen($arResult["BACKURL"]) > 0)
	{
	?>
		<input style="border: 1px solid gray; background-color:white;" type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<?
	}              
	?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
        <p id="puser">
        <label for="username">�����</label><br />
        <input id="username" name="USER_LOGIN" value="" title="username" tabindex="1" type="text" />
        </p>
        <p>
        <label for="password">������</label><br />
        <input id="password" name="USER_PASSWORD" value="" title="password" tabindex="2" type="password" />
        </p>
        <p class="submit">
        <input id="submitbtn" value="�����" tabindex="3" type="submit" />
        <input id ="remember" name="USER_REMEMBER"  value="1" tabindex="4" type="checkbox" />
        <label for="remember">��������� ����</label>
        </p>
        </form>
        <p id="msg"></p>
    </div>