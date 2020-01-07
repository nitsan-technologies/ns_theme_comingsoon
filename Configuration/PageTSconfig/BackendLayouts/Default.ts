// Backend Layout for "Default" Template
mod {
    web_layout {
        BackendLayouts {
            default {
                title = LLL:EXT:ns_basetheme/Resources/Private/Language/BackendLayouts/locallang.xlf:default
                icon = EXT:ns_basetheme/Resources/Public/Icons/BackendLayouts/Default.png
                config {
                    backend_layout {
                        colCount = 1
                        rowCount = 1
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:ns_basetheme/Resources/Private/Language/BackendLayouts/locallang.xlf:content
                                        colPos = 0
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
