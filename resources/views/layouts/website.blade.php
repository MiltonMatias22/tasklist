<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--
    * ===================== STYLESHEET SECTION ====================================
    *	-->
    @include('partials.stylesheet-links')


    <title>Tasklist - @yield('subtitle')</title>
  </head>
  <body>
    <!--
		* ===================== NAV-BAR SECTION ====================================
		*	-->
		@include('partials.nav')

    <!--
		* ===================== CONTENT PAGE MASTER LAYOUT =========================
    * -->

    @yield('content')

    <!--
    * ===================== AND CONTENT PAGE MASTER LAYOUT =====================
		*	-->

    <!--
		* ===================== FOOTER CONTENT =====================================
		*	-->
    @include('partials.footer')

    <!--
		* ===================== SCRIPT LINKS CONTENT ===============================
		*	-->
    @include('partials.script-links')

  </body>
</html>
