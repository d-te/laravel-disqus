<div id="disqus_thread"></div>
<script type="text/javascript">
@foreach ($settings as $key => $value)
	var {{ $key }} = '{{ $value }}';
@endforeach
	var disqus_config = function () {
	@if (false !== $language)
	    this.language = "{{ $language }}";
	@endif
	};

	(function() {
		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = '//{{$settings["disqus_shortname"]}}.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
