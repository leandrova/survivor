<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T7QKJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7QKJ5');</script>
<!-- End Google Tag Manager -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga("create", "UA-66632677-1", "auto");
	ga("require", "displayfeatures");
	
	Analytics = new function (){
		
		this.pageview = function (data){
			try {
				ga("send", "pageview", {
					"page": data.page,
					"title": data.title
				});
			} catch (e) {
				console.dir("error pageview" + e)
			}
		}

		this.genericEvent =  function (data){
			try {
				ga("send", "event", data.category, data.action, data.label)
			} catch (e) {
				console.dir("error custom event" + e)
			}
		}
	}
	
	Analytics.pageview({page:window.location.host + window.location.pathname, title:document.title});
	Analytics.genericEvent(
		{
			category: 'Load-Page',
			action:document.title,
			label:window.location.host + window.location.pathname
		}
	)
	<?php if ($USUARIO <> "") {?>
	Analytics.genericEvent(
		{
			category: '<?php=strtoupper($_SESSION["NOMEUSUARIO"]);?>-Load-Page',
			action:document.title,
			label:window.location.host + window.location.pathname
		}
	)
	<?php } ?>
	
	$(".tagAnalytics").click(function(data) {
		Analytics.genericEvent(
			{
				category:data.currentTarget.dataset.category,
				action:data.currentTarget.dataset.action,
				label:data.currentTarget.dataset.label
			}
		)
		<?php if ($USUARIO <> "") {?>
		Analytics.genericEvent(
			{
				category: '<?php echo strtoupper($_SESSION["NOMEUSUARIO"]);?>-' + data.currentTarget.dataset.category,
				action:data.currentTarget.dataset.action,
				label:data.currentTarget.dataset.label
			}
		)
		<?php } ?>
	});
	
	$(".tagAnalytics").change(function(data) {
		for(i in data.currentTarget) {
			if (!isNaN(i)){
				dado = data.currentTarget[i];
				if ( dado.selected ){
					Analytics.genericEvent(
						{
							category:data.currentTarget.dataset.category,
							action:data.currentTarget.dataset.action,
							label:dado.label
						}
					)
					<?php if ($USUARIO <> "") {?>
					Analytics.genericEvent(
						{
							category: '<?php echo strtoupper($_SESSION["NOMEUSUARIO"]);?>-' + data.currentTarget.dataset.category,
							action:data.currentTarget.dataset.action,
							label:dado.label
						}
					)
					<?php } ?>
				}
			}
		}
	});
	
</script>