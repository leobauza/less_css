site =
	helpers: {}
	markers: {}
	ui: {}

#Helpers Object
site.helpers =
	init: ->
		@fixConsole()
		@setup()
	
	fixConsole: ->
		that = window
		if console is "undefined" then that.console = log: ->
	
	getIeVer: ->
		rv = -1;
		if navigator.appName is 'Microsoft Internet Explorer'
			ua = navigator.userAgent;
			re = new RegExp "MSIE ([0-9]{1,}[\.0-9]{0,})"
			if re.exec(ua) isnt null
				rv = parseFloat(RegExp.$1)
		rv
	
	setup: ->
		#add l class for ie
		$('[class*=row-fluid]').each ->
			$(this).find("[class*=\"span\"]:last-child").addClass 'l'
	

#markers object
site.markers =
	win: $(window).width()
	ieVer: site.helpers.getIeVer()

site.ui = 
	init: ->
		@btnDropdown()
		@navigation()
	
	resize: ->
		@navigation()
	
	btnDropdown: ->
		$('.btn-dropdown .btn-drop').click (e) ->
			e.preventDefault()
			$that = $(@)
			$that.closest('.btn-dropdown').find('ul').toggle()
	
	navigation: ->
		console.log "nav code!"
		#go mobile or desktop...also pass the width so we can get more specific in mobile
		if not $('.site-nav .btn-dropdown').length
			$('.site-nav .menu > li.dropdown > a').after '<i class="btn-dropdown">v</i>'
		if site.markers.win > 1024 then @desktopNav(site.markers.win) else @mobileNav(site.markers.win)
	
	desktopNav: (w) ->
		console.log "desktop nav: ", w
		$('.site-nav .menu > li.dropdown').unbind('click mouseenter mouseleave').mouseenter ->
				$(@).find('.dropdown-menu').show()
		.mouseleave ->
				$(@).find('.dropdown-menu').hide()
	
	mobileNav: (w) ->
		console.log "mobile nav: ", w
		$('.site-nav .menu > li.dropdown').unbind 'mouseenter mouseleave'
		$('.site-nav .menu > li.dropdown > .btn-dropdown').unbind('click').click (e) ->
			e.preventDefault()
			$(@).toggleClass 'is-active'
			$(@).parent().find('.dropdown-menu').toggle()
	

#dom ready
$ ->
	site.helpers.init()
	site.ui.init()
	
	#logging markers
	console.log "win width: ", site.markers.win
	console.log "ie version: ", site.markers.ieVer
	
	$(window).resize ->
		site.markers.win = $(window).width()
		site.ui.resize()
	