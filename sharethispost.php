<?php
/*
Plugin Name: ShareThisPost
Plugin URI: http://www.cypherbox.net
Description: Helps to share your post to digg, twitter and other bookmarking sites.
Version: 1.0
Author: Christopher Caralos
Author URI: http://www.christophercaralos.com
*/


/*  Copyright 2009  ShareThisPost  (email : caralos@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_filter('the_content', 'sharethispost');

function sharethispost($content)
{
$sharethispost = '
<style>
		img{border:0;}
		#wrapper{width:488px; height:139px; background-image:url('.get_option('siteurl').'/wp-content/plugins/sharethispost/images/bg.gif); position:relative;}
		#wrapper ul{position:absolute; width:368px; top:38px; left:80px; list-style-type:none;}
		#wrapper li{float:left;}
</style>
				
<div id="wrapper">
		<ul>
			<li>
			<a href="http://digg.com/submit?phase=2&url='.get_permalink().'&title='.the_title('', '', false).'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/digg_ico.gif" />
			</a>
			</li>
			
			<li>			
			<a href="http://twitter.com/home?status=Currently reading '.get_permalink().'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/twitter_ico.gif" />
			</a>
			</li>
			
			<li>
			<a href="http://del.icio.us/post?url='.get_permalink().'&title='.the_title('', '', false).'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/delicious_ico.gif" />
			</a>
			</li>
			
			<li>
			<a href="http://technorati.com/faves?add='.get_permalink().'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/technorati_ico.gif" />
			</a>
			</li>
			
			<li>
			<a href="http://www.stumbleupon.com/submit?url='.get_permalink().'&title='.the_title('', '', false).'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/stumble_ico.gif" />
			</a>
			</li>
			
			<li>		
			<a href="http://reddit.com/submit?url='.get_permalink().'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/reddit_ico.gif" />
			</a>
			</li>
			
			<li>		
			<a href="http://www.cypherbox.net/pliggit.php?url='.get_permalink().'">
			<img src="'.get_option('siteurl').'/wp-content/plugins/sharethispost/images/cypher_ico.gif" />
			</a>
			</li>
		</ul>
</div>
			';
return $content.$sharethispost;
}
?>