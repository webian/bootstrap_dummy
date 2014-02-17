###################################################
# Navbar
###################################################

lib.navbar {
	position = CASE
	position {
		key = {$config.navStyle}
		default = TEXT
		default.value =
		1 = TEXT
		1.value = navbar-fixed-top
		2 = TEXT
		2.value = navbar-fixed-bottom
		3 = TEXT
		3.value = navbar-static-top
	}
	imgLogo = CASE
	imgLogo {
		key = {$config.imgLogo}
		default = TEXT
		default.value =
		1 = TEXT
		1.value = imgLogo
	}
}

###################################################
# Navbar - Bootstrap 3 reference
#
# Default navbar
# <nav class="navbar navbar-default" role="navigation">
#   <div class="container-fluid">
#   </div><!-- /.container-fluid -->
# </nav>
#
# Forms
# Buttons
# Text
# Non-nav links
# Component alignment
#
# Fixed to top
# <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
#   <div class="container">
#     ...
#   </div>
# </nav>
# Requires:
# body { padding-top: 70px; }
# after core Bootstrap CSS
#
# Fixed to bottom
# <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
#   <div class="container">
#     ...
#   </div>
# </nav>
# Requires:
# body { padding-bottom: 70px; }
# after core Bootstrap CSS
#
# Static top
# <nav class="navbar navbar-default navbar-static-top" role="navigation">
#   <div class="container">
#     ...
#   </div>
# </nav>
#
# Inverted navbar
###################################################