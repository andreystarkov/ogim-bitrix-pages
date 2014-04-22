
				</div> <!-- content -->

				
	</div> <!-- workspace -->
	</div> <!-- workspace-wrapper -->
	</div> <!-- wrapper -->


	<div id="footer">
		<div id="footer-shadow"></div>
		<div id="footer-workspace">
					<p>&copy; 2013 Оренбургский государственный институт менеджмента</p>
		</div>
	</div>

	<!-- auth dialog -->

	<div id="dialog" title="Авторизация на сайте">
		<?$APPLICATION->IncludeComponent("bitrix:system.auth.form",".default",Array("REGISTER_URL" => "/auth/","PROFILE_URL" => "/personal/profile/","SHOW_ERRORS" => "N"));?>
	</div>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28993159-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</body>
</html>