<?php
//list all bookmarks in the plugin options page
function shrsb_network_input_select($name, $hint) {
	global $shrsb_plugopts;
	return sprintf('<label class="%s" title="%s"><input %sname="bookmark[]" type="checkbox" value="%s"  id="%s" /><br />%s</label>',
		$name,
		$hint,
		@in_array($name, $shrsb_plugopts['bookmark'])?'checked="checked" ':"",
		$name,
		$name,
		shrsb_truncate_text(end(explode('-', $name)), 9)
	);
}

function shrsb_truncate_text($text, $nbrChar, $append='..') {
     if(strlen($text) > $nbrChar) {
          $text = substr($text, 0, $nbrChar);
          $text .= $append;
     }
     return $text;
}

// returns the option tag for a form select element
// $opts array expecting keys: field, value, text
function shrsb_form_select_option($opts) {
	global $shrsb_plugopts;
	$opts=array_merge(
		array(
			'field'=>'',
			'value'=>'',
			'text'=>'',
		),
		$opts
	);
	return sprintf('<option%s value="%s">%s</option>',
		($shrsb_plugopts[$opts['field']]==$opts['value'])?' selected="selected"':"",
		$opts['value'],
		$opts['text']
	);
}

// given an array $options of data and $field to feed into shrsb_form_select_option
function shrsb_select_option_group($field, $options) {
	$h='';
	foreach ($options as $value=>$text) {
		$h.=shrsb_form_select_option(array(
			'field'=>$field,
			'value'=>$value,
			'text'=>$text,
		));
	}
	return $h;
}

// function to list bookmarks that have been chosen by admin
function bookmark_list_item($name, $opts=array()) {
	global $shrsb_plugopts, $shrsb_bookmarks_data, $post;

  $post_info = shrsb_get_params($post->id);
  // If Twitter, check for custom tweet configuration and modify tweet accordingly
  if($name == 'shr-twitter') {
      
    $url = $shrsb_plugopts['shrbase'].'/api/share/?'.implode('&amp;',array(	
    																		'title=TITLE',
    																		'link=PERMALINK',
    																		'notes='.$post_info['notes'],
    																		'short_link='.$post_info['short_link'],
    																		'v=1',
    																		'apitype=1',
    																		'apikey='.$shrsb_plugopts['apikey'],
    																		'source=Shareaholic',
    																		'template='.urlencode($shrsb_plugopts['tweetconfig']),
    																		'service='.$shrsb_bookmarks_data[$name]['id'],
    																		'tags='.$post_info['d_tags'],
    																		'ctype='
    																		));
  }
  else if($name == 'shr-comfeed') {// Otherwise, use default baseUrl format
      $url=$shrsb_bookmarks_data[$name]['baseUrl'];
  }
  else {
	 $url = $shrsb_plugopts['shrbase'].'/api/share/?'.implode('&amp;',array(	
																			'title=TITLE',
																			'link=PERMALINK',
																			'notes='.$post_info['notes'],
																			'short_link='.$post_info['short_link'],
																			'v=1',
																			'apitype=1',
																			'apikey='.$shrsb_plugopts['apikey'],
																			'source=Shareaholic',
																			'template=',
																			'service='.$shrsb_bookmarks_data[$name]['id'],
																			'tags='.$post_info['d_tags'],
																			'ctype='
																			));
  }


	$onclick = "";
	if($name == 'shr-facebook') {
		$onclick = " onclick=\"window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=436'); return false;\"";
	}
  else {
    if($shrsb_plugopts['targetopt'] == '_blank') {
      $topt = ' class="external"';
    }
    else {
      $topt = '';
    }
  }
	foreach ($opts as $key=>$value) {
		$url=str_replace(strtoupper($key), $value, preg_replace('/\s+/', '%20', $url));
	}
	if(is_feed()) {
		return sprintf(
			"\t\t".'<li class="%s">'."\n\t\t\t".'<a href="%s" rel="%s"%s title="%s">%s</a>'."\n\t\t".'</li>'."\n",
			$name,
			$url,
			$shrsb_plugopts['reloption'],
			$topt,
			$shrsb_bookmarks_data[$name]['share'],
			$shrsb_bookmarks_data[$name]['share']
		);
	}
	else {
		return sprintf(
			"\t\t".'<li class="%s">'."\n\t\t\t".'<a href="%s" rel="%s"%s title="%s"%s>&nbsp;</a>'."\n\t\t".'</li>'."\n",
			$name,
			$url,
			$shrsb_plugopts['reloption'],
			$topt,
			$shrsb_bookmarks_data[$name]['share'],
			$onclick
		);
	}
}

