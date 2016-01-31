<?php
// Plugin for adding ASCII old school smileys/emoticons 
class YellowEmojisASCII
{
	const Version = "0.1";
	var $yellow;			// access to API

	// Handle initialisation
	function onLoad($yellow)
	{
	}

	// Return emoji translations
	function onEmojiTranslations($name)
	{
		if($name!="ascii")
			return null;
			
		// Used https://en.wikipedia.org/wiki/List_of_emoticons as reference
		return array(
			array('short'=>":c)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":-)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":o)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":3", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":>", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>"=]", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>"8)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>"=)", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":}", 'utf8'=>"\xf0\x9f\x99\x82"),
			array('short'=>":^)", 'utf8'=>"\xf0\x9f\x99\x82"),

			array('short'=>":-D", 'utf8'=>"\xf0\x9f\x98\x80"),
			array('short'=>":D", 'utf8'=>"\xf0\x9f\x98\x80"),

			array('short'=>"=-D", 'utf8'=>"\xf0\x9f\x98\x83"),
			array('short'=>"=D", 'utf8'=>"\xf0\x9f\x98\x83"),
			array('short'=>"=-3", 'utf8'=>"\xf0\x9f\x98\x83"),
			array('short'=>"=3", 'utf8'=>"\xf0\x9f\x98\x83"),

			array('short'=>"8-D", 'utf8'=>"\xf0\x9f\x98\x8e"),
			array('short'=>"8D", 'utf8'=>"\xf0\x9f\x98\x8e"),
			array('short'=>"B^D", 'utf8'=>"\xf0\x9f\x98\x8e"),
			
			array('short'=>"x-D", 'utf8'=>"\xf0\x9f\x98\x86"),
			array('short'=>"xD", 'utf8'=>"\xf0\x9f\x98\x86"),
			array('short'=>"X-D", 'utf8'=>"\xf0\x9f\x98\x86"),
			array('short'=>"XD", 'utf8'=>"\xf0\x9f\x98\x86"),

			array('short'=>":-))", 'utf8'=>"\xf0\x9f\x98\x84"),

			array('short'=>">:[", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":-(", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":(", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":-c", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":c", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":-<", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":<", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":-[", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":[", 'utf8'=>"\xe2\x98\xb9"),
			array('short'=>":{", 'utf8'=>"\xe2\x98\xb9"),

			array('short'=>";(", 'utf8'=>"\xf0\x9f\x99\x81"),

			array('short'=>":-||", 'utf8'=>"\xf0\x9f\x98\xa1"),
			array('short'=>":@", 'utf8'=>"\xf0\x9f\x98\xa1"),
			array('short'=>">:(", 'utf8'=>"\xf0\x9f\x98\xa1"),

			array('short'=>":'-(", 'utf8'=>"\xf0\x9f\x98\xa2"),
			array('short'=>":'(", 'utf8'=>"\xf0\x9f\x98\xa2"),

			array('short'=>":'-)", 'utf8'=>"\xf0\x9f\x98\x82"),
			array('short'=>":')", 'utf8'=>"\xf0\x9f\x98\x82"),

			array('short'=>"D:<", 'utf8'=>"\xf0\x9f\x98\xb1"),

			array('short'=>"D:", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"D8", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"D;", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"D=", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"DX", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"v.v", 'utf8'=>"\xf0\x9f\x98\xa8"),
			array('short'=>"D-':", 'utf8'=>"\xf0\x9f\x98\xa8"),

			array('short'=>">:O", 'utf8'=>"\xf0\x9f\x98\xb2"),

			array('short'=>":-O", 'utf8'=>"\xf0\x9f\x98\xaf"),
			array('short'=>":O", 'utf8'=>"\xf0\x9f\x98\xaf"),
			array('short'=>":-o", 'utf8'=>"\xf0\x9f\x98\xaf"),
			array('short'=>":o", 'utf8'=>"\xf0\x9f\x98\xaf"),
			array('short'=>"8-0", 'utf8'=>"\xf0\x9f\x98\xaf"),

			array('short'=>"O_O", 'utf8'=>"\xf0\x9f\x98\xb3"),
			array('short'=>"o-o", 'utf8'=>"\xf0\x9f\x98\xb3"),
			array('short'=>"o_o", 'utf8'=>"\xf0\x9f\x98\xb3"),
			array('short'=>"O-O", 'utf8'=>"\xf0\x9f\x98\xb3"),
			array('short'=>"O_o", 'utf8'=>"\xf0\x9f\x98\xb3"),
			array('short'=>"o_O", 'utf8'=>"\xf0\x9f\x98\xb3"),

			array('short'=>":*", 'utf8'=>"\xf0\x9f\x98\x98"),
			array('short'=>":-*", 'utf8'=>"\xf0\x9f\x98\x98"),
			array('short'=>":^*", 'utf8'=>"\xf0\x9f\x98\x98"),

			array('short'=>";-)", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>";)", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>"*-)", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>"*)", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>";-]", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>";]", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>";D", 'utf8'=>"\xf0\x9f\x98\x89"),
			array('short'=>";^)", 'utf8'=>"\xf0\x9f\x98\x89"),

			array('short'=>":-,", 'utf8'=>"\xf0\x9f\x98\x8f"),

			array('short'=>">:P", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":-P", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":P", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":-p", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":p", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>"=p", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":-Þ", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":Þ", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":þ", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":-þ", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":-b", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>":b", 'utf8'=>"\xf0\x9f\x98\x8b"),
			array('short'=>"d:", 'utf8'=>"\xf0\x9f\x98\x8b"),

			array('short'=>"X-P", 'utf8'=>"\xf0\x9f\x98\x9d"),
			array('short'=>"x-p", 'utf8'=>"\xf0\x9f\x98\x9d"),
			array('short'=>"xp", 'utf8'=>"\xf0\x9f\x98\x9d"),
			array('short'=>"XP", 'utf8'=>"\xf0\x9f\x98\x9d"),

			array('short'=>">:\\", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>">:/", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>":-\\", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>":-.", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>":\\", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>"://", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>"=\\", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>"=/", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>":L", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>"=L", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>":S", 'utf8'=>"\xf0\x9f\x98\x92"),
			array('short'=>">.<", 'utf8'=>"\xf0\x9f\x98\x92"),

			array('short'=>":|", 'utf8'=>"\xf0\x9f\x98\x90"),
			array('short'=>":-|", 'utf8'=>"\xf0\x9f\x98\x90"),

			array('short'=>":-X", 'utf8'=>"\xf0\x9f\xa4\x90"),
			array('short'=>":X", 'utf8'=>"\xf0\x9f\xa4\x90"),
			array('short'=>":-#", 'utf8'=>"\xf0\x9f\xa4\x90"),
			array('short'=>":#", 'utf8'=>"\xf0\x9f\xa4\x90"),

			array('short'=>"O:-)", 'utf8'=>"\xf0\x9f\x98\x87"),
			array('short'=>"0:-)", 'utf8'=>"\xf0\x9f\x98\x87"),
			array('short'=>"0:-3", 'utf8'=>"\xf0\x9f\x98\x87"),
			array('short'=>"0:)", 'utf8'=>"\xf0\x9f\x98\x87"),
			array('short'=>"O;^)", 'utf8'=>"\xf0\x9f\x98\x87"),

			array('short'=>">:)", 'utf8'=>"\xf0\x9f\x91\xbf"),
			array('short'=>">;)", 'utf8'=>"\xf0\x9f\x91\xbf"),
			array('short'=>">:-)", 'utf8'=>"\xf0\x9f\x91\xbf"),

			array('short'=>"}:-)", 'utf8'=>"\xf0\x9f\x98\x88"),
			array('short'=>"}:)", 'utf8'=>"\xf0\x9f\x98\x88"),
			array('short'=>"3:-)", 'utf8'=>"\xf0\x9f\x98\x88"),
			array('short'=>"3:)", 'utf8'=>"\xf0\x9f\x98\x88"),

			array('short'=>"#-)", 'utf8'=>"\xf0\x9f\x98\xab"),

			array('short'=>"%-)", 'utf8'=>"\xf0\x9f\x98\x95"),
			array('short'=>"%)", 'utf8'=>"\xf0\x9f\x98\x95"),

			array('short'=>":-###..", 'utf8'=>"\xf0\x9f\xa4\x92"),
			array('short'=>":###..", 'utf8'=>"\xf0\x9f\xa4\x92"),

			array('short'=>"<*)))-{", 'utf8'=>"\xf0\x9f\x90\x9f"),
			array('short'=>"><(((*>", 'utf8'=>"\xf0\x9f\x90\x9f")
		);
	}
}

$yellow->plugins->register("emojis-ascii", "YellowEmojisASCII", YellowEmojisASCII::Version);
?>

