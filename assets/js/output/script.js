// Generated by CoffeeScript 1.6.3
var site;

site = {
  helpers: {},
  markers: {},
  ui: {}
};

site.helpers = {
  init: function() {
    this.fixConsole();
    return this.setup();
  },
  fixConsole: function() {
    var that;
    that = window;
    if (console === "undefined") {
      return that.console = {
        log: function() {}
      };
    }
  },
  getIeVer: function() {
    var re, rv, ua;
    rv = -1;
    if (navigator.appName === 'Microsoft Internet Explorer') {
      ua = navigator.userAgent;
      re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
      if (re.exec(ua) !== null) {
        rv = parseFloat(RegExp.$1);
      }
    }
    return rv;
  },
  setup: function() {
    return $('[class*=row-fluid]').each(function() {
      return $(this).find("[class*=\"span\"]:last-child").addClass('l');
    });
  }
};

site.markers = {
  win: $(window).width(),
  ieVer: site.helpers.getIeVer()
};

site.ui = {
  init: function() {
    this.btnDropdown();
    return this.navigation();
  },
  resize: function() {
    return this.navigation();
  },
  btnDropdown: function() {
    return $('.btn-dropdown .btn-drop').click(function(e) {
      var $that;
      e.preventDefault();
      $that = $(this);
      return $that.closest('.btn-dropdown').find('ul').toggle();
    });
  },
  navigation: function() {
    console.log("nav code!");
    if (!$('.site-nav .btn-dropdown').length) {
      $('.site-nav .menu > li.dropdown > a').after('<i class="btn-dropdown">v</i>');
    }
    if (site.markers.win > 1024) {
      return this.desktopNav(site.markers.win);
    } else {
      return this.mobileNav(site.markers.win);
    }
  },
  desktopNav: function(w) {
    console.log("desktop nav: ", w);
    return $('.site-nav .menu > li.dropdown').unbind('click mouseenter mouseleave').mouseenter(function() {
      return $(this).find('.dropdown-menu').show();
    }).mouseleave(function() {
      return $(this).find('.dropdown-menu').hide();
    });
  },
  mobileNav: function(w) {
    console.log("mobile nav: ", w);
    $('.site-nav .menu > li.dropdown').unbind('mouseenter mouseleave');
    return $('.site-nav .menu > li.dropdown > .btn-dropdown').unbind('click').click(function(e) {
      e.preventDefault();
      $(this).toggleClass('is-active');
      return $(this).parent().find('.dropdown-menu').toggle();
    });
  }
};

$(function() {
  site.helpers.init();
  site.ui.init();
  console.log("win width: ", site.markers.win);
  console.log("ie version: ", site.markers.ieVer);
  return $(window).resize(function() {
    site.markers.win = $(window).width();
    return site.ui.resize();
  });
});
