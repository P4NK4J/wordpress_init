/*! ColoredCow 2020-03-11 */
jQuery(document).ready(function(){jQuery(".navbar-toggle").on("click",function(){jQuery(this).hasClass("navbar-toggle-cross")?(jQuery(".mobile-menu").removeClass("d-flex"),jQuery("html, body").removeClass("overflow-hidden position-relative h-100p")):(jQuery(".mobile-menu").addClass("d-flex"),jQuery("html, body").addClass("overflow-hidden position-relative h-100p")),jQuery(this).toggleClass("navbar-toggle-cross")})});