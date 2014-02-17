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
		2 = TEXT
		2.value = container-fluid no-side-padding
	}
}
