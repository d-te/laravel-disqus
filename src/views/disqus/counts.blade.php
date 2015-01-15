<script type="text/javascript">
@foreach ($settings as $key => $value)
	var {{ $key }} = '{{ $value }}';
@endforeach

	(function() {
		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = '//{{$settings["disqus_shortname"]}}.disqus.com/count.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
</script>