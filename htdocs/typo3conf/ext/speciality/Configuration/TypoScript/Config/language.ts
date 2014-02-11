###################################################
# language handling
###################################################


# !!! don't forget to configure the language in the constants as well
# !!! since it is not possible to use variable in TS expect than with constants
config {
	sys_language_uid = 0
	language = it
	locale_all = it_IT.UTF-8
	htmlTag_langKey = it_IT
}

[globalVar = GP:L = 1]
	config {
		sys_language_uid = 1
		language = fr
		locale_all = fr_FR.UTF-8
		htmlTag_langKey = fr_FR
	}
[end]

[globalVar = GP:L = 2]
	config {
		sys_language_uid = 2
		language = de
		locale_all = de_DE.UTF-8
		htmlTag_langKey = de_DE
	}
[end]

[globalVar = GP:L = 3]
	config {
		sys_language_uid = 3
		language = en
		locale_all = en_GB.UTF-8
		htmlTag_langKey = en_GB
	}
[end]

