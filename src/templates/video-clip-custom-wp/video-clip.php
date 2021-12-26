<div id="videos-src" class="video-clip-src" style="display:none;" data-src="<?php 
	$src_tab = '';
	while(have_rows('video_clip_videos')) : the_row();
		$src_tab .= get_sub_field('video');
		$src_tab .= ', ';
	endwhile;
	$src_tab = substr($src_tab, 0, -2);
	echo $src_tab;
?>"></div>


<video style="background: black;"  class="video-clip" id="video-clip" playsinline muted autoplay>
</video> 
<video style="background: black;"  class="video-clip fade-out" id="video-clip-2" playsinline muted>
</video>  