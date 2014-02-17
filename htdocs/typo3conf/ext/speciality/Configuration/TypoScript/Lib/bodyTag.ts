###################################################
# Body tag
###################################################

body = COA
body {
	wrap = <body|>

	# ID
	100 = COA
	100 {
		200 = TEXT
		200.field = uid
		200.noTrimWrap = | id="pageUid|" |
	}

	# Class
	200 = COA
	200 {
		100 = TEXT
		100.field = uid
		100.noTrimWrap = |class="body-| |

		# not in homepage
		120 = TEXT
		120.value = notHomepage
		120.noTrimWrap = || |
		120.if.value = 1
        120.if.equals.data = TSFE:id
        120.if.negate = 1

		# get tree level (NOTE: 0 is first level, ID=1)
		150 = TEXT
		150.data = level : 1
		150.noTrimWrap = |treeLvl| |

		# get parent uid
		200 = TEXT
		200.field = pid
		200.noTrimWrap = |parentUid| |

		# get language uid
		250 = TEXT
		250.data = TSFE : sys_language_uid
		250.noTrimWrap = |langUid| |

		500 = TEXT
		500.wrap = "
	}
}
