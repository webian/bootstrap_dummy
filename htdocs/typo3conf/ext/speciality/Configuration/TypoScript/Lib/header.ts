###################################################
# Header
###################################################

lib.header {
	containerType = CASE
	containerType {
		key = {$config.headerContainerType}
		default = TEXT
		default.value = container
		1 = TEXT
		1.value = container-fluid
	}
}
