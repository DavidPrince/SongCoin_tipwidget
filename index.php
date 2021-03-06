<!doctype html>
<html lang="en">
<head>
	<title>SongCoin Donation Button</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="SongCoin Widget  for your websites." />
	<meta name="keywords" content="SOngCoin donation button,Song donate" />
	<link rel="stylesheet" type="text/css" href="songDonate.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="songDonate.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!--[if (IE 7) | (IE 8)]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script>
			$(function(){
				$('img.gear').remove();
			});
		</script>
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>


<header id="header">
	<section>
		<a href="/"><img width="304" height="78" src="images/songlogo.png" /></a>
		<div id="social1">
		<!--
			<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1363148939.html#_=1365084676934&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fcoinwidget.com%2F&amp;size=m&amp;text=coinwidget.com&amp;url=http%3A%2F%2Fcoinwidget.com%2F" class="twitter-share-button twitter-count-horizontal" style="width:90px; height: 20px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
			<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcoinwidget.com%2F&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowtransparency="true"></iframe>
		-->
			
			<g:plusone></g:plusone>
			
		</div>
	</section>
</header>
		
 
<section>
	<div id="social2"><br/></div>
	<article class="primary">
		<h1>Add a SongCoin donation button to your website and start getting coins today!</h1>
		<p>It's simple to use, clean cut, and loaded with customizable features.</p><br/>
		<p><b>Here is what it looks like, go ahead and give it a try:</b><br/>
		<span id="preview_holder"><span id="preview">
			<script src="http://www.songcoin.org/tipwidget/widget/coin.js"></script>
			<script>SONGDonateCom.go({
				wallet_address 	: 'SQbDPTwE3AZNcG4F5yeo9wJ1or8UVXR4o3'
				, currency		: 'SongCoin'
				, counter 		: 'count'
				, alignment 	: 'ac'
				, lbl_button 	: 'Donate SongCoin'
				, lbl_address	: 'songcoin.org SongCoin Address:'
				, lbl_count 	: 'donations'
				, lbl_amount	: 'SONG'
				, qrcode 		: true
				, decimals 		: 6
			});
			</script>
		</span></span></p>
		<br/>
	</article>
	<br/>
	<article id="version_note">
		<h1>Welcome to Version 1.0!</h1>
		<p>This is based on the awesome work of coinwidget.com creator Scotty.</p>
	</article>
	<article id="get_it">
		<img style="position:absolute;top:15px;left:20px;" src="images/icon_75_gear.png" />
		<div style="margin-left:90px;">
			<h1>Get a SongCoin widget right now:</h1>
			<p>Use the wizard to quickly create a widget button that you can embed in your site.</p>
			<br/>
		</div>
		
		<div id="go_buttons">
			<button onclick="wizard.start();" style="box-shadow:inset 1px 1px 0px #76b5f2;padding:8px;"><img src="images/favicon.png" />Create a SongCoin Widget now!</button> 
		</div>
	</article>

	<article>
		<img style="position:absolute;top:15px;left:20px;" src="images/icon_75_settings.png" />
		<div style="margin-left:90px;">
			<h1>Manual Configuration</h1>
			<p>Add any of these options to the launcher code to customize this widget.</p>
		</div>
		<br/><br/>
		<table cellspacing="0" cellpadding="0" border="0">
		<thead>
			<tr><th width="100">Option</th>
			<th width="120">Default Value</th>
			<th width="120">Acceptable Values</th>
			<th class="col_desc">Description</th>
		</tr></thead>
		<tbody>
			<tr>
				<td><b>currency</b></td>
				<td>SongCoin</td>
				<td>SongCoin</td>
				<td class="col_desc">This widget is for SongCoin</td>
			</tr>
			
			<tr>
				<td><b>counter</b></td>
				<td>count</td>
				<td>count<br>amount<br>hide</td>
				<td class="col_desc">Toggle what is shown in the counter next to the main button.<br><div style="padding:0px 5px;margin:5px;background:#FCF9ED;border:1px solid #f3f0ea;"><b>count</b> will show the total number of transactions.<br><b>amount</b> will show the total amount received (SONG)<br><b>hide</b> will hide the counter as well as hide the transaction count and total amount received within the window.</div></td>
			</tr>
			<tr>
				<td><b>qrcode</b></td>
				<td>true</td>
				<td>true<br>false</td>
				<td class="col_desc">Set to true if you want to show the QR code generator that appears at the bottom left of the window.<br/>Set to false to hide the QR code icon.</td>
			</tr>
			<tr>
				<td><b>auto_show</b></td>
				<td>false</td>
				<td>true<br>false</td>
				<td class="col_desc">Set to true if you want the window to auto appear as soon as the counter finishes loading.</td>
			</tr>
			<tr>
				<td><b>decimals</b></td>
				<td>4</td>
				<td>0-10</td>
				<td class="col_desc">Adjust the number of decimals shown on the amount received statistic.</td>
			</tr>

			<tr>
				<td><b>lbl_button</b></td>
				<td>Donate</td>
				<td><em>(anything)</em></td>
				<td class="col_desc">Change the text of the label on the main button.</td>
			</tr>
			<tr>
				<td><b>lbl_address</b></td>
				<td>My SongCoin Address:</td>
				<td><em>(anything)</em></td>
				<td class="col_desc">The text that appears above your SongCoin wallet address within the window.</td>
			</tr>
			<tr>
				<td><b>lbl_count</b></td>
				<td>donations</td>
				<td><em>(anything)</em></td>
				<td class="col_desc">The text that appears in the window under the total number of transactions.</td>
			</tr>
			<tr>
				<td><b>lbl_amount</b></td>
				<td>SONG</td>
				<td><em>(anything)</em></td>
				<td class="col_desc">The text that appears in the window under the total amount of SongCoin received.</td>
			</tr>
			<tr>
				<td><b>onShow</b></td>
				<td>null</td>
				<td>function</td>
				<td class="col_desc">Execute a function when the window opens.</td>
			</tr>
			<tr>
				<td><b>onHide</b></td>
				<td>null</td>
				<td>function</td>
				<td class="col_desc">Execute a function when the window closes.</td>
			</tr>
		</tbody>
	</table>
	<small style="margin-top:4px;display:block;font-size:10px;"><p>Not sure how to work these options into the code? <a style="color:#666;" href="javascript:;" onclick="$('.example').show();">This example</a> might help.</p></small>

	<div class="example" style="display: none;"><br/>
<pre>
&lt;script src="http://www.songcoin.org/tipwidget/widget/coin.js"&gt;&lt;/script&gt;
&lt;script&gt;
	SONGDonateCom.go({
		wallet_address	: 'SQbDPTwE3AZNcG4F5yeo9wJ1or8UVXR4o3',
		currency 		: 'SongCoin',
		counter			: 'hide',
		lbl_button 		: 'TIP ME',	
		lbl_count		: 'payments',
		lbl_amount 		: 'coins',
		lbl_address		: 'Please send SongCoin tips to:',
		qrcode			: false,
		decimals		: 6,
		onShow 			: function(){
			alert('window opened!');
		},
		onHide 			: function(){
			alert('window closed!');
		}
	});
&lt;/script&gt;
</pre>
	<br/><small><b>Note:</b> Make sure your last option does not have a trailing comma.</small>
	</div>
	</article>


	<article>
		<img style="position:absolute;top:15px;left:20px;" src="images/icon_75_chat.png" />
		<div style="margin-left:90px;">
			<p><strong>Donate to SONGDonate</strong></p>
			<p>If you would like to help support the SONGDonation cause, here you go:</p>

			<div style="position:relative;top:5px;"><script>SONGDonateCom.go({
				wallet_address 	: 'SQbDPTwE3AZNcG4F5yeo9wJ1or8UVXR4o3'
				, currency		: 'SongCoin'
				, counter 		: 'hide'
				, alignment 	: 'bc'
				, lbl_button 	: 'Donate SongCoin'
				, lbl_address	: 'songcoin.org SongCoin Address:'
				, lbl_count 	: 'donations, thank you!'
				, lbl_amount	: 'SONG'
				, qrcode 		: true
			});</script> 

			</script>
			&nbsp; <i style="font-size:10px;">Thank you very much for your generosity! -songcoin.org</i>
			</div>
		</div>
		<br/>
	</article>


	<article class="end">
		<img style="position:absolute;top:15px;left:20px;" src="images/icon_75_gear.png" />
		<div style="margin-left:90px;">
			<h1>Want the source?</h1>
			<button onclick="window.location='#';" class="grey" style="padding:8px;"><img src="images/icon_16_download.png" />Download the Source Code</button>
			<br/>
	<!-- 
			<h1>Have an idea to make this widget better? Make a cool tweak to our widget? Need help with a currency related project?</h1>
			<p><a href="mailto:info@songcoin.com">E-mail me</a>, I would love to hear your ideas! I'll do my best to reply as soon as possible.</p>
	-->	
		</div>
		<br/>
	</article>

	<small id="footer">&copy; 2014 songcoin.org</small>

</section>
<img src="images/icon_512_gear.png" width="512" height="512" class="gear" />

<div id="fade"></div>
<div id="code">
	<button style="position:absolute;right:5px;top:5px;font-size:11px;padding:3px 6px;z-index:9;font-weight:bold;" onclick="wizard.code.close();" title="Close Window" class="grey">X</button>
	
	<div align="center">
		<h1>Paste the code below into your website to install your widget:</h1>
	
		<textarea onclick="this.select();"></textarea>
		
		<button style="width:150px;text-align:center;" onclick="wizard.code.close_all();">Done, Close Wizard</button>
		<button style="width:150px;text-align:center;" class="grey" onclick="wizard.code.close();">Go back and Edit</button><br/><br/>
		
		<!--Place your ad here-->
		<!--a target="_blank" class="ad" href=""><img src="images/ad002.png" width="160" height="90" /></a>
		<a target="_blank" class="ad" href=""><img src="images/ad001.png" width="160" height="90" /></a-->
		<div class="ad">Your ad here!<br/><small>25 SONG per month</small><br/><button onclick="alert('Let us know you are interested and we will respond with a payment address. Once payment is confirmed we will request your banner/link information. Your time will start when your ad is posted.');window.open('mailto:info@songcoin.com?subject=Advertising+on+songcoin.org');" class="grey" style="font-size:10px;padding:3px 5px;">Click Here to Contact</button></div>
	
	</div>
</div>
<div id="wizard">
	<button style="position:absolute;right:5px;top:5px;font-size:11px;padding:3px 6px;z-index:9;font-weight:bold;" onclick="wizard.close();" title="Close Window" class="grey">X</button>
	<div class="loading">
		<img src="images/icon_128_wizard.png" />
	</div>
	<article>
		<aside>
			<b>select an option:</b>
			<ul>
				<li data-page="currency" class="sel">Wallet:<b>SongCoin</b></li>
				<li data-page="counter">Counter:<b>Amount</b></li>
				<li data-page="text">Text:<b>Default</b></li>
				<li data-page="alignment">Window Alignment:<b>Below, Left</b></li>
				<li data-page="qrcode">QR Code:<b>On</b></li>
				<li data-page="autoshow">Auto Show:<b>Off</b></li>
			</ul>
			
		</aside>
		<section class="preview">
			<div>
				<script>
				SONGDonateCom.go({
					wallet_address 	: 'SQbDPTwE3AZNcG4F5yeo9wJ1or8UVXR4o3'
					, currency		: 'SongCoin'
					, counter 		: 'count'
					, alignment 	: 'bl'
					, lbl_button 	: 'Donate'
					, lbl_address	: 'SONGDonate SongCoin Address:'
					, lbl_count 	: 'donations'
					, lbl_amount	: 'SONG'
					, qrcode 		: true
				});
				</script> 
			</div>
			<button onclick="wizard.get_code();">Finished? Click here to get the code!</button>
		</section>
		<section class="step">
			<div data-page="currency">
				<h2>What cryptocurrency is this button for?</h2>
				<button data-sidebar="SongCoin" data-currency="song"><img src="images/icon_16_SongCoin.jpg" />SongCoin</button>
				<br/>
				<h2>Enter your wallet address for this widget:</h2>
				<input type="text" style="width:295px;" name="wallet_address" onclick="$(this).select();" />
			</div>
			<div data-page="counter" class="hide">
				<h2>What should the counter show?</h2>
				<button data-sidebar="Transaction Count" data-counter="count"><img src="images/icon_16_counter.png" />transaction count</button>
				<button data-sidebar="Amount Received" data-counter="received" class="grey"><img src="images/icon_16_counter.png" />amount received</button>
				<button data-sidebar="Hidden" data-counter="hide" class="grey"><img src="images/icon_16_counter.png" />hidden</button>
				<small style="font-size:11px;display:block;margin-top:8px;border-top:1px solid #ddd;padding-top:8px;">Selecting hidden will hide all visible statistics.</small>
			</div>			
			<div data-page="text" class="hide" data-custom="false">
				<h2>Customize Text</h2>
				<label>Button Label</label>		<input name="button" type="text" /><br/>
				<label>Address Label</label>	<input name="address" type="text" /><br/>
				<label>Count Label</label>		<input name="count" type="text" /><br/>
				<label>Amount Label</label>		<input name="amount" type="text" /><br/>
				<a id="text_restore" href="#">Restore Defaults</a>
			</div>
			<div data-page="alignment" class="hide">
				<h2>Window Alignment</h2>
				<p>How should the window align to the button when opened?</p><br/>
				<div align="center"> 
					<table id="alignment" cellspacing="1" cellpadding="0" border="0">
						<tr>
							<td data-point="al" class="point"><img src="images/icon_16_check2.png" /></td>
							<td data-point="ac" class="point"><img src="images/icon_16_check2.png" /></td>
							<td data-point="ar" class="point"><img src="images/icon_16_check2.png" /></td>
						</tr>
						<tr>
							<td colspan="3" class="mid_point"><span>Below, Left</span></td>
						</tr>
						<tr>
							<td data-point="bl" class="sel point"><img src="images/icon_16_check2.png" /></td>
							<td data-point="bc" class="point"><img src="images/icon_16_check2.png" /></td>
							<td data-point="br" class="point"><img src="images/icon_16_check2.png" /></td>
						</tr>
					</table>
				</div>
			</div>
			<div data-page="qrcode" class="hide">
				<h2>QR Code</h2>
				<p>Do you want this widget to show a QR code of your wallet address?</p><br/>
				<button data-sidebar="On" data-qrcode="on"><img src="images/icon_16_check.png" />On</button>
				<button data-sidebar="Off" data-qrcode="off" class="grey"><img src="images/icon_16_cancel.png" />Off</button>
			</div>
			<div data-page="autoshow" class="hide">
				<h2>Auto Show</h2>
				<p>Do you want this widget to automatically show the window after the counter finishes loading?</p><br/>
				<button data-sidebar="On" data-autoshow="on" class="grey"><img src="images/icon_16_check.png" />On</button>
				<button data-sidebar="Off" data-autoshow="off"><img src="images/icon_16_cancel.png" />Off</button>
			</div>
		</section>
	</article>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '']);
  _gaq.push(['_setDomainName', '']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>