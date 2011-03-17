<?php

function shrsb_preFlight_Checks() {
	global $shrsb_plugopts;
	if( ((function_exists('curl_init') && function_exists('curl_exec')) || function_exists('file_get_contents')) && (is_dir(SHRSB_PLUGDIR.'spritegen') && is_writable(SHRSB_PLUGDIR.'spritegen')) && ((isset($_POST['bookmark']) && is_array($_POST['bookmark']) && sizeof($_POST['bookmark']) > 0 ) || (isset($shrsb_plugopts['bookmark']) && is_array($shrsb_plugopts['bookmark']) && sizeof($shrsb_plugopts['bookmark']) > 0 )) && !$shrsb_plugopts['custom-mods'] ) {
		return true;
	}
	else {
		return false;
	}
}

function get_sprite_file($opts, $type) {
  global $shrsb_plugopts;

  $shrbase = $shrsb_plugopts['shrbase']?$shrsb_plugopts['shrbase']:'http://www.shareaholic.com';
  $spritegen = $shrbase.'/api/sprite/?v=1&apikey=8afa39428933be41f8afdb8ea21a495c&imageset=60'.$opts.'&apitype='.$type;
  $filename = SHRSB_PLUGDIR.'spritegen/shr-custom-sprite.'.$type;
  $content = FALSE;

  if ( $type == 'png' ) {
    $fp_opt = 'rb';
  }
  else {
    $fp_opt = 'r';
  }

  if(function_exists('wp_remote_retrieve_body') && function_exists('wp_remote_get') && function_exists('wp_remote_retrieve_response_code')) {
    $request = wp_remote_get(
      $spritegen,
      array(
        'user-agent' => "shr-wpspritebot-fopen/v" . SHRSB_vNum,
        'headers' => array(
          'Referer' => get_bloginfo('url')
        )
      )
    );
    $response = wp_remote_retrieve_response_code($request);
    if($response == 200 || $response == '200') {
      $content = wp_remote_retrieve_body($request);
    }
    else {
      $content = FALSE;
    }
  }

  if ( $content === FALSE && function_exists('curl_init') && function_exists('curl_exec') ) {
	  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $spritegen);
    curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 6);
    curl_setopt($ch, CURLOPT_USERAGENT, "shr-wpspritebot-cURL/v" . SHRSB_vNum);
    curl_setopt($ch, CURLOPT_REFERER, get_bloginfo('url'));
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);

    $content = curl_exec($ch);

    if ( curl_errno($ch) != 0 ) {
      $content = FALSE;
    }
    curl_close($ch);
  }

  if ( $content !== FALSE ) {
    if ( $type == 'png' ) {
      $fp_opt = 'w+b';
    }
    else {
      $fp_opt = 'w+';
    }

    
    $fp = @fopen($filename, $fp_opt);

    if ( $fp !== FALSE ) {
      $ret = @fwrite($fp, $content);
      @fclose($fp);
    }
    else {
      $ret = @file_put_contents($filename, $content);
    }

    if ( $ret !== FALSE ) {
      @chmod($filename, 0666);
      return 0;
    }
    else {
      return 1;
    }
  }
  else {
    return 2;
  }
}

/**
 * Gets the contents of a url on www.shareaholic.com.  We use shrbase as the
 * URL base path.  The caller is responsible for keeping track of whether the
 * cache is up-to-date or not.  If the cache is stale (because some argument
 * has changed), then the caller should pass true as the second argument.
 *
 * @url        - the partial url without base.  ex. /publishers
 * @path       - path to cache result to, under spritegen.
 *               ex. /publishers.html
 *               pass null to use the path part of url
 * @clearcache - force call and overwrite cache.
 */
function _shrsb_fetch_content($url, $path, $clearcache=false) {
  global $shrsb_plugopts;

  $shrbase = $shrsb_plugopts['shrbase']?$shrsb_plugopts['shrbase']:'http://www.shareaholic.com';

  if (!preg_match('|^/|', $url)) {
    @error_log("url must start with '/' in _shrsb_fetch_content");
    return FALSE;
  }

  // default path
  if (null === $path) {
    $url_parts = explode('?', $url);
    $path = rtrim($url_parts[0], '/');
  }

  $base_path = path_join(SHRSB_PLUGDIR, 'spritegen');
  $abs_path = $base_path.$path;

  if ($clearcache || !($retval = _shrsb_read_file($abs_path))) {
    $response = wp_remote_get($shrbase.$url);
    if (is_wp_error($response)) {
      @error_log("Failed to fetch ".$shrbase.$url);
      $retval = FALSE;
    } else {
      $retval = $response['body'];
    }

    _shrsb_write_file($abs_path, $retval);
  }

  return $retval;
}

function _shrsb_write_file($path, $content) {
  $dir = dirname($path);
  if(!wp_mkdir_p(dirname($path))) {
    @error_log("Failed to create path ".dirname($path));
  }
  $fh = fopen($path, 'w+');
  if (!$fh) {
    @error_log("Failed to open ".$path);
  } 
  else {
    if (!fwrite($fh, $content)) {
      @error_log("Failed to write to ".$path);
    }
    @fclose($fh);
  }
}

function _shrsb_read_file($path) {
  $content = FALSE;

  $fh = @fopen($path, 'r');
  if (!$fh) {
    @error_log("Failed to open ".$path);
  } 
  else {
    if (!$content = fread($fh, filesize($path))) {
      @error_log("Failed to read from ".$path);
    }
    @fclose($fh);
  }

  return $content;
}