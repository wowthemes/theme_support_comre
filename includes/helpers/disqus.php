<?php $options = _WSH()->option();
$post_id = $_POST['uniq_id'];
$post_url = get_permalink($post_id); ?>
<div id="disqus_thread"></div>
        <script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: THIS CODE IS ONLY AN EXAMPLE * * */
	    var disqus_shortname = '<?php echo (sh_set( $options, 'disqus_idetifier')) ? esc_js(sh_set( $options, 'disqus_idetifier') ) : esc_js('example'); ?>'; // Required - Replace example with your forum shortname
	    var disqus_identifier = 'disqus_thread<?php echo $post_id; ?>';
	    var disqus_title = 'a unique title for each page where Disqus is present';
	    var disqus_url = '<?php echo esc_url($post_url); ?>';

	    /* * * DON'T EDIT BELOW THIS LINE * * */ 
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>